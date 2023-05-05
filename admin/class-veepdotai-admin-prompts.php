<?php

use Orhanerday\OpenAi\OpenAi;

Class Veepdotai_Admin_Prompts {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;

        $post = array_map('stripslashes_deep', $_POST);
        $veep_post = array_intersect_key(
                        $post,
                        array_flip(preg_grep('/^' . $this->plugin_name .'/', array_keys($post))));
        $this->post = $veep_post;
    }

    public function manage_action() {
        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        include('partials/veepdotai-form-prompts-functions.php');

        if (isset($vp[$pn .'-ai-save'])) {
            $self->save_configuration($vp);
		} elseif (isset($vp[$pn .'-ai-generate-site'])) {
            $page_url = $self->generate_page_from_template($vp);

            if ($page_url) {
                echo '<script>window.location.replace("' . $page_url . '")</script>';
            }
		} elseif (isset($vp[$pn .'-ai-transform'])) {
            $page_url = $self->improve($vp);
        }
        //generate the form
        ob_start();
        include( 'partials/main-admin-prompts.php' );
        $page_html = ob_get_contents();
        ob_end_clean();
        echo $page_html;
    }

    /**
     * 
     */
    public function update_option_if_set($post, $pn, $field) {
        $r = null;
        if (isset($post[$pn .'-' .$field])){
            $field_name = $pn .'-' . $field;
            $field_value = sanitize_text_field($post[$field_name]);
            //error_log('field_name : ' . $field_name . ' = ' . $field_value);
            $r = update_option($field_name, $field_value);
        }
        return $r;
    }

    /**
     * 
     */
    public function save_configuration($post) {
        $pn = $this->plugin_name;

        if($this->security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 6; $i++) {
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text-prompt');
            }
/*
            $selected_lp_template = isset($post[$pn .'-lp-templates'])
                                        ? $post[$pn .'-lp-templates']
                                        : get_option($pn .'-lp-templates');
            $selected_generation = isset($post[$pn .'-generation'])
                                        ? $post[$pn .'-generation']
                                        : get_option($pn .'-generation');
*/
        }

        return true;
    }

    public function convert_to_valid_json($text) {
/*
        $result = preg_replace('/\\\\n/', '##n', $text);
        $infos = json_decode($result);
        $text = $infos->choices[0]->text;
        $text = preg_replace('/^##n##n/', '', $text);
        $output = preg_replace('/##n/', '&#13;', $text);
        return $output;
*/
        $string = preg_replace('/\\n/', '', $text);
        $r = json_decode($string);

        if ($r) {
            $text = $r->choices[0]->text;
            $string = preg_replace('/Résultat :/', '', $text);
            $string = preg_replace('/Résumé :/', '', $text);
            $string = preg_replace('/^[^{]*/', '', $text);
            $results = json_decode($string);

            if ($results) {
                error_log("OK");
                return $results;
            } else {
                error_log("Error2");
                return $this->get_last_error();
            }
        } else {
            error_log("Error1");
            return $this->get_last_error();
        }
    }

    public function get_last_error() {
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $r = ' - No errors';
            break;
            case JSON_ERROR_DEPTH:
                $r = ' - Maximum stack depth exceeded';
            break;
            case JSON_ERROR_STATE_MISMATCH:
                $r = ' - Underflow or the modes mismatch';
            break;
            case JSON_ERROR_CTRL_CHAR:
                $r = ' - Unexpected control character found';
            break;
            case JSON_ERROR_SYNTAX:
                $r = ' - Syntax error, malformed JSON';
            break;
            case JSON_ERROR_UTF8:
                $r = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
            default:
                $r = ' - Unknown error';
            break;
        }

        return $r;
    }

    public function update_option($field_name, $field_value) {
        error_log("Field name: $field_name / Field value: $field_value");
        // Call the corresponding WP function
        $existing_value = get_option($field_name);
        if ($existing_value) {
            error_log("Replacing existing value for this field: $existing_value...");
        }
        update_option($field_name, ""); // resetting data so we know there is a problem
        update_option($field_name, $field_value);
    }

    /**
     * Improve provided content with AI (openai in our case)
     */
    public function improve($post) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;

        $prompt_pre = <<<_EOF_
        Agis comme un copywriter à qui on demande d'écrire des résumés de contenu. Tu n’utilises jamais ou très rarement les mêmes tournures de phrases et ton style est journalistique. Chacun de tes résumés est unique et permet de comprendre clairement les idées des textes.
    
        Le texte à résumer est le suivant :
        _EOF_;
    
        $prompt_post = <<<_EOF2_
        Tâche : Rédige une synthèse de ce texte en utilisant un format json valide avec la méthode suivante
    
        1 - Ajoute de la ponctuation au texte et fais des retours à la ligne quand tu le juges nécessaire
    
        2 - Commence par des informations générales sur le texte :
    
            "title" : titre de la section
            "themes" : thèmes abordés dans la section
    
        Puis suis cette structure pour chaque section identifiée dans le texte
    
        "section" : rappel du titre de la section
        "title" : hero title pour la section
        "text" : résumé en 3 lignes de la section
        "cta-text" : CTA court pour la section
        "themes" : 5 thèmes uniques liés à cette section en particulier
        "img" : prompt pour générer une image sur mid-journey en rapport avec le thème principal de la section

        Attention à bien utiliser du format JSON valide.
        _EOF2_;

        $results = [];
        if($this->security_check($post, $pn .'-main_admin_site')) {
            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];
            $content = "";

            // Process each prompt through the content of the corresponding field
            // input through voice during the interview ?
            // Or concat everything before providing the content to AI ?
            // Last method will be cheaper and more efficient

            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                // We don't concat content anymore because the prompt becomes too big
                //$content .= "\nSection " . $content_titles[$i] . "\n\n";
                $content = "\nSection " . $content_titles[$i] . "\n\n";
                $key = $this->plugin_name . '-ai-section' . $i . '-text-interview';
                error_log("Key: " . $key . ".");
                $content .= get_option($key);
                $content .= "\n";

                $open_ai_key = get_option($this->plugin_name.'_ai_api_key');
                $open_ai = new OpenAi($open_ai_key);

                //$prompt = get_option($this->plugin_name . 'ai-section' . $i . '-text-prompt');
         
                $prompt = $prompt_pre . "\n\n"
                            . $content
                            . "\n\n" . $prompt_post;

                $ts = "20230505-160437";
                $raw = "";
                //$raw = file_get_contents(WP_PLUGIN_DIR . "/$pn/data/$ts-$pn-ai-section$i-result.txt");
                if (! $raw) {
                    $raw = $open_ai->completion([
                        'model' => 'text-davinci-003',
                        'prompt' => $prompt,
                        'temperature' => 0.7,
                        'max_tokens' => 2000,
                        'frequency_penalty' => 0,
                        'presence_penalty' => 0.6,
                    ]);
                }

                error_log($raw);
                $filename = WP_PLUGIN_DIR . "/$pn/data/$date-$pn-ai-section$i";
                $filename_result = $filename . "-result.txt";
                $filename_prompt = $filename . "-prompt.txt";
                file_put_contents($filename_prompt, $prompt);
                file_put_contents($filename_result, $raw);
/*
                $normalized_raw = "";
                if (mb_detect_encoding($raw, 'utf-8', true) === false) {
                    $normalized_raw = mb_convert_encoding($raw, 'utf-8', 'iso-8859-1');
                }
                $r = $this->convert_to_valid_json($normalized_raw);
*/
                $r = $this->convert_to_valid_json($raw);
                //print_r($r);

                // veepdotai-ai-section0-title
                $prefix = $pn .'-ai-section' . $i . '-';
                $section = $r->section; //We process one section at a time
                if (is_string($section)) {
                    $section = $r;
                } elseif (is_null($section)) {
                    $section = $r->sections[0];
                } elseif (is_array($section)) {
                    $section = $json->section[0];
                } else {
                    error_log("The format of the result is not known.");
                }
                $res = $this->update_option($prefix . 'title', $section->title);
                $res = $this->update_option($prefix . 'text', $section->text);
                //$r = $this->update_option($prefix . 'cta-href', $section->{"cta-href"});
                $r = $this->update_option($prefix . 'cta-text', $section->{"cta-text"});
                //$res = $this->update_option($prefix . 'img', $section->img);

                $results[] = $r;
            }
        }
        return $results;
    }

    /**
     * Checks parameters are correct from a security point of view
     *
     * @since  1.0.0
     */
    public function security_check($parameters, $var_name) {
		return true;
	}    

}