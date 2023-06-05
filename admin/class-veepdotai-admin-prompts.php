<?php

require_once "class-veepdotai-util.php";

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
            $field_value = sanitize_textarea_field( $post[$field_name] );
            //$field_value = str_replace('\\\'', '\'', $field_value);
        }
        error_log('field_name : ' . $field_name . ' = ' . $field_value);
        //$r = update_option($field_name, addslashes( stripslashes($field_value) ));
        $r = update_option($field_name, wp_unslash ($field_value) );

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

        return stripslashes( $prompt );
    }

    /**
     * 
     */
    public function get_data($i) {
        $pn = $this->plugin_name;

        // Gets an already computed data, for example: 20230509-135300
        $ts = get_option($pn . '_ai_site_ts');
        if ($ts) {
            $raw = Veepdotai_Util::get_data("$ts-$pn-ai-section$i-result.txt");
        } else {
            $raw = "";
        }

        return $raw;
    }
    /**
     * Stores computed data to check errors or enables users
     * to replay a previous prompt or reuse previous results
     */
    public function store_data($date, $i, $prompt, $raw, $r) {

        $pn = $this->plugin_name;

        $filename = "$date-$pn-ai-section$i";

        $r1 = Veepdotai_Util::store_data($prompt, $filename . "-prompt.txt");
        $r2 = Veepdotai_Util::store_data($raw, $filename . "-result_raw.txt");
        $r3 = Veepdotai_Util::store_data(json_encode($r), $filename . "-result_json.txt");

        return $r1 && $r2 && $r3;
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
    public function create_text_with_ai($ts, $prompt, $i) {
        $pn = $this->plugin_name;

        $raw = $this->get_data($i);
        $r;
        //error_log($this->plugin_name . '_ai_site_ts' . ': ' . $ts . '.');
        if (! $raw) {
            $raw = Veepdotai_Util::get_content_from_ai($prompt);
            $r = Veepdotai_Util::convert_to_valid_json($raw);
            $this->store_data($ts, $i, $prompt, $raw, $r);
        } else {
            $r = Veepdotai_Util::convert_to_valid_json($raw);
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
 
                $section = $this->create_text_with_ai($date, $prompt, $i);
                
                $prefix = $pn . '-ai-section' . $i . '-';

                $this->update_option($prefix . 'title', $section->title);
                $this->update_option($prefix . 'text', $section->text);
                $this->update_option($prefix . 'page', $section->page);
//                $this->update_option($prefix . 'transcript', $section->transcript);
                //$r = $this->update_option($prefix . 'cta-href', $section->{"cta-href"});
                $this->update_option($prefix . 'cta-text', $section->{"cta-text"});
//                $this->update_option($prefix . 'themes', $section->{"themes"});
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