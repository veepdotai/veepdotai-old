<?php

require_once "class-veepdotai-util.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

use Orhanerday\OpenAi\OpenAi;

// The function that handles the AJAX request
add_action( 'wp_ajax_transcribe', 'Veepdotai_Admin_Interview::transcribe_callback' );
add_action( 'wp_ajax_save_interview', 'Veepdotai_Admin_Interview::serve_interview_callback' );

Class Veepdotai_Admin_Interview {
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

    public static function save_interview_callback() {
        Veepdotai_Util::log('debug', 'Saving interview callback');
        check_ajax_referer( 'my-special-string', 'security' );

        Veepdotai_Admin_Interview::save_configuration($_POST);
        echo "Configuration saved.";
        
        die();
    }

    public static function transcribe_callback() {
        Veepdotai_Util::log('debug', 'Entering transcribe_callback');
        check_ajax_referer( 'my-special-string', 'security' );

        //print_r($_FILES); //this will print out the received name, temp name, type, size, etc. 
        //$input = $_FILES['veepdotai-ai-record-audio_data']['tmp_name'];
        $content_id = $_POST['veepdotai-content-id'];
        $file = $_FILES['veepdotai-ai-record-audio_data'];

        Veepdotai_Util::get_content_from_wav($file, $content_id);
    }
    
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
/*        $veep_post = array_intersect_key(
                        $post,
                        array_flip(preg_grep('/^' . $this->plugin_name .'/', array_keys($post))));
        $this->post = $veep_post;
*/
        $this->post = $_POST;
    }

    public function manage_action() {
        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        include('partials/veepdotai-form-interview-functions.php');

        if (isset($vp[$pn .'-ai-save'])) {
            $self->save_configuration($vp);
		} elseif (isset($vp[$pn .'-ai-generate-site'])) {
            $page_url = $self->generate_page_from_template($vp);

            if ($page_url) {
                Veepdotai_Util::go_to_url($page_url);
            }
		} elseif (isset($vp[$pn .'-ai-improve'])) {
            $page_url = $self->improve($vp);
        } else if (isset($vp[$pn .'-ai-next'])) {
            if (current_user_can('veepdotai_prompt')) {
                Veepdotai_Util::go_to_url('prompts', true);
            } else {
                Veepdotai_Util::go_to_url('site', true);
            }
		}

        //generate the form
        //ob_start();
        include( 'partials/main-admin-interview.php' );
        //$page_html = ob_get_contents();
        //ob_end_clean();
        //echo $page_html;
    }

    /**
     * 
     */
    public static function update_option_if_set($post, $pn, $field) {
        $r = null;
        if (isset($post[$pn .'-' .$field])){
            $field_name = $pn .'-' . $field;
            //$field_value = sanitize_text_field($post[$field_name]);
            $field_value = sanitize_text_field($post[$field_name]);
            Veepdotai_Util::log('debug', 'field_name : ' . $field_name . ' = ' . $field_value);
            $r = Veepdotai_Util::update_option($field, wp_unslash( $field_value ));
        }
        return $r;
    }

    /**
     * 
     */
    public function save_configuration($post) {
        
        $pn = VEEPDOTAI_PLUGIN_NAME;
        if(Veepdotai_Admin_Interview::security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 4; $i++) {
                Veepdotai_Admin_Interview::update_option_if_set($post, $pn, 'ai-section' . $i . '-text-interview');
            }
            $selected_lp_template = isset($post[$pn .'-lp-templates']) ? $post[$pn .'-lp-templates'] : Veepdotai_Util::get_option('lp-templates');
            $selected_generation = isset($post[$pn .'-generation']) ? $post[$pn .'-generation'] : Veepdotai_Util::get_option('generation');
        }

        return;
    }

    /**
     * Checks parameters are correct from a security point of view
     *
     * @since  1.0.0
     */
    public static function security_check($parameters, $var_name) {
		return true;
	}    

}
