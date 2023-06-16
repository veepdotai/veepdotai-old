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
        } elseif (isset($vp[$pn .'-ai-next'])) {
            $self->save_configuration($vp);

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
    public static function update_option_if_set($post, $pn, $field, $fieldValue = true) {
        $r = null;
        $field_name = $pn .'-' . $field;
        if (! $fieldValue) {
            $field_value = '';
        } else {
            // if (isset($post[$pn .'-' .$field])){
            $field_value = sanitize_textarea_field( $post[$field_name] );
            //$field_value = str_replace('\\\'', '\'', $field_value);
        }
        Veepdotai_Util::log('field_name : ' . $field_name . ' = ' . $field_value);
        //$r = update_option($field_name, addslashes( stripslashes($field_value) ));
        $r = Veepdotai_Util::update_option($field, wp_unslash ($field_value) );

        return $r;
    }

    /**
     * 
     */
    public function reset_configuration($post) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        for ($i = 0; $i < 6; $i++) {
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-img', '');
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-title', '');
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-text', '');
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-page', '');
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-text', '');
            Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-href', '');
        }
    }

    public function save_configuration($post) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        if($this->security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 6; $i++) {
                Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-text-prompt-pre');
                Veepdotai_Admin_Prompts::update_option_if_set($post, $pn, 'ai-section' . $i . '-text-prompt-post');
            }

            //$this->update_option_if_set($post, $pn, 'ai-site-ts');
            $key = "ai-site-ts";
            Veepdotai_Util::update_option($key, sanitize_text_field($post[$key]));
        }

        return true;
    }

    public static function update_option($field_name, $field_value) {
        Veepdotai_Util::log("Field name: $field_name / Field value: $field_value");
        // Call the corresponding WP function
        // The case where the field starts with VEEPDOTAI_PLUGIN_NAME- is managed by the get_option method
        $existing_value = Veepdotai_Util::get_option($field_name);
        if ($existing_value) {
            Veepdotai_Util::log("Replacing existing value for this field: $existing_value...");
        }
        Veepdotai_Util::update_option($field_name, ""); // resetting data so we know there is a problem
        Veepdotai_Util::update_option($field_name, sanitize_textarea_field($field_value));
    }

    /**
     * 
     */
    public static function create_prompt($content_title, $i) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        // We don't concat content anymore because the prompt becomes too big
        //$content .= "\nSection " . $content_titles[$i] . "\n\n";
        $content = "\nSection " . $content_title . "\n\n";
        $key = 'ai-section' . $i . '-text-interview';
        Veepdotai_Util::log("Key: $pn-$key.");
        $content .= Veepdotai_Util::get_option($key);
        $content .= "\n";

        $prefix_variable = 'ai-section' . $i . '-text-prompt-';

        $prompt_pre = Veepdotai_Util::get_option($prefix_variable . 'pre');
        //$prompt_post = Veepdotai_Util::get_option($prefix_variable . 'post');

        $inspiration = $content;
        // $prompt contains a reference to $inspiration
        $prompt = strtr(
                    $prompt_pre,
                    ['$inspiration' => $inspiration]
        );

        return $prompt;
        //return stripslashes( $prompt );
    }

    /**
     * 
     */
    public static function get_data($i) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        // Gets an already computed data, for example: 20230509-135300
        $ts = Veepdotai_Util::get_option('ai-site-ts');
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
    public static function store_data($date, $i, $prompt, $raw, $r) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        $filename = "$date-$pn-ai-section$i";

        $r1 = Veepdotai_Util::store_data($prompt, $filename . "-prompt.txt");
        $r2 = Veepdotai_Util::store_data($raw, $filename . "-result_raw.txt");
        $r3 = Veepdotai_Util::store_data(json_encode($r), $filename . "-result_json.txt");

        return $r1 && $r2 && $r3;
    }

    /**
     * 
     */
    public static function create_text_with_ai($ts, $prompt, $i) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        $raw = Veepdotai_Admin_Prompts::get_data($i);
        $r;
        //error_log($this->plugin_name . '-ai-site-ts' . ': ' . $ts . '.');
        if (! $raw) {
            $raw = Veepdotai_Util::get_content_from_ai($prompt);
            $r = Veepdotai_Util::convert_to_valid_json($raw);
            Veepdotai_Admin_Prompts::store_data($ts, $i, $prompt, $raw, $r);
        } else {
            $r = Veepdotai_Util::convert_to_valid_json($raw);
            // $params = []; // should contain prompt
            // $this->store_data($ts, $i, $params, $raw, $r);
        }

        Veepdotai_Util::log($raw);

        $section = Veepdotai_Util::fix_results($r);
        return $section;
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