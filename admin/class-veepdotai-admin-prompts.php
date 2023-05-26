<?php

require_once "class-veepdotai-util.php";

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

        $post = $_POST;
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
            /* Unavailable ? */
            $page_url = $self->generate_page_from_template($vp);

            if ($page_url) {
                Veepdotai_Util::go_to_url($page_url);
            }
		} elseif (isset($vp[$pn .'-ai-transform'])) {
            $page_url = $self->improve($vp);
        } elseif (isset($vp[$pn .'-ai-next'])) {
			Veepdotai_Util::go_to_url('site');
		}

        //generate the form
        //ob_start();
        include( 'partials/main-admin-prompts.php' );
        //$page_html = ob_get_contents();
        //ob_end_clean();
        //echo $page_html;
    }

    /**
     * 
     */
    public function update_option_if_set($post, $pn, $field, $fieldValue = true) {
        $r = null;
        $field_name = $pn .'-' . $field;
        if (! $fieldValue) {
            $field_value = '';
        } else {
            // if (isset($post[$pn .'-' .$field])){
            $field_value = sanitize_text_field($post[$field_name]);
        }
        error_log('field_name : ' . $field_name . ' = ' . $field_value);
        $r = update_option($field_name, $field_value);
        return $r;
    }

    /**
     * 
     */
    public function reset_configuration($post) {
        $pn = $this->plugin_name;
        for ($i = 0; $i < 6; $i++) {
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img', '');
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-title', '');
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text', '');
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-page', '');
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-text', '');
            $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-href', '');
        }
}

    public function save_configuration($post) {
        $pn = $this->plugin_name;

        if($this->security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 6; $i++) {
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text-prompt-pre');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text-prompt-post');
            }

            //$this->update_option_if_set($post, $pn, 'ai_site_ts');
            $key = $pn . "_ai_site_ts";
            update_option($key, sanitize_text_field($post[$key]));

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
     * 
     */
    public function create_prompt($content_title, $i) {
        $pn = $this->plugin_name;
        // We don't concat content anymore because the prompt becomes too big
        //$content .= "\nSection " . $content_titles[$i] . "\n\n";
        $content = "\nSection " . $content_title . "\n\n";
        $key = $pn . '-ai-section' . $i . '-text-interview';
        error_log("Key: " . $key . ".");
        $content .= get_option($key);
        $content .= "\n";

        $prefix = $pn . '-ai-section' . $i . '-text-prompt-';

        $prompt_pre = get_option($prefix . 'pre');
        $prompt_post = get_option($prefix . 'post');

        $prompt = Veepdotai_Util::replace_special_chars($prompt_pre . "\n\n"
        . $content
        . "\n\n" . $prompt_post);

        return $prompt;
    }

    /**
     * 
     */
    public function get_data($i) {
        $pn = $this->plugin_name;

        // Gets an already computed data, for example: 20230509-135300
        $ts = get_option($pn . '_ai_site_ts');
        if ($ts) {
            $raw = file_get_contents(WP_PLUGIN_DIR
                    . "/$pn/data/$ts-$pn-ai-section$i-result.txt");
        } else {
            $raw = "";
        }

        return $raw;
    }
    /**
     * Stores computed data to check errors or enables users
     * to replay a previous prompt or reuse previous results
     */
    public function store_data($date, $i, $params, $raw, $r) {

        $pn = $this->plugin_name;

        // It would be better to store data according to user/yyyy/mm/dd
        $filename = WP_PLUGIN_DIR . "/$pn/data/$date-$pn-ai-section$i";

        $filename_prompt = $filename . "-prompt.txt";
        $filename_result = $filename . "-result_raw.txt";
        $filename_json = $filename . "-result_json.txt";
        file_put_contents($filename_prompt, $params["prompt"]);
        file_put_contents($filename_result, $raw);
        file_put_contents($filename_json, json_encode($r));  

        return $r;
    }

    /**
     * 
     */
    public function fix_results($r) {
        // $section is a global var
        if (property_exists($r, 'section')) {
            $section = $r->section;
            if (is_string($section)) {
                $section = $r;
            } elseif (is_null($section)) {
                $section = $r->sections[0];
            } elseif (is_array($section)) {
                $section = $r->section[0];
            } else {
                error_log("The format of the r->section is not known.");
            }    
        } elseif (property_exists($r, 'sections')) {
            if (is_array($r->sections)) {
                $section = $r->sections[0];
            } else {
                error_log("The format of the r->sections is not known.");
            }
        }

        return $section;
    }

    /**
     * 
     */
    public function create_text_with_ai($open_ai, $ts, $prompt, $i) {
        $pn = $this->plugin_name;

        $raw = $this->get_data($i);
        $r;
        //error_log($this->plugin_name . '_ai_site_ts' . ': ' . $ts . '.');
        if (! $raw) {
            $params = [
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.7,
                'max_tokens' => 2000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ];

            $raw = $open_ai->completion($params);
            $r = $this->convert_to_valid_json($raw);
            $this->store_data($ts, $i, $params, $raw, $r);
        } else {
            $r = $this->convert_to_valid_json($raw);
            // $params = []; // should contain prompt
            // $this->store_data($ts, $i, $params, $raw, $r);
        }

        error_log($raw);

        $section = $this->fix_results($r);
        return $section;
    }

    /**
     * Improve provided content with AI (openai in our case)
     * 
     * @TODO Storage needs to be reworked completely with a db!!!
     */
    public function improve($post) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;

        $results = [];
        if($this->security_check($post, $pn .'-main_admin_site')) {

            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];

            // Process each prompt through the content of the corresponding field
            // input through voice during the interview ?
            // Or concat everything before providing the content to AI ?
            // Last method will be cheaper and more efficient

            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                $prompt = $this->create_prompt($content_titles[$i], $i);

                $open_ai_key = get_option($this->plugin_name.'_ai_api_key');
                $open_ai = new OpenAi($open_ai_key);
 
                $section = $this->create_text_with_ai($open_ai, $date, $prompt, $i);
                
                $prefix = $pn . '-ai-section' . $i . '-';

                $this->update_option($prefix . 'title', $section->title);
                $this->update_option($prefix . 'text', $section->text);
                $this->update_option($prefix . 'page', $section->page);
                //$r = $this->update_option($prefix . 'cta-href', $section->{"cta-href"});
                $this->update_option($prefix . 'cta-text', $section->{"cta-text"});
                $this->update_option($prefix . 'img-prompt', $section->img);

                //$img = $this->create_image_with_ai($open_ai, $date, $prompt, $i);

                //$results[] = $r;
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