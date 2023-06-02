<?php

require_once "class-veepdotai-util.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

use Orhanerday\OpenAi\OpenAi;

// The function that handles the AJAX request
add_action( 'wp_ajax_upload', 'Veepdotai_Admin_Interview::upload_callback' );

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

    public static function upload_callback() {
        check_ajax_referer( 'my-special-string', 'security' );

        //print_r($_FILES); //this will print out the received name, temp name, type, size, etc. 
        $input = $_FILES['veepdotai-ai-record-audio_data']['tmp_name'];
        $current_user = wp_get_current_user();
        $output = VEEPDOTAI_PLUGIN_DIR . 'data/generated/'
                    . $current_user->user_login
                    . '-' . $_FILES['veepdotai-ai-record-audio_data']['name'].".wav";
        //move the file from temp name to local folder using $output name 
        move_uploaded_file($input, $output);

        $size = intval($_FILES['veepdotai-ai-record-audio_data']['size']);
        if ($size > 25000000) {
            $duration = 240; // 240 seconds so the size should be < 25 Mo for middle rate
            $cmd_split_wav = 'ffmpeg -i ' . $output
                                .' -f segment -segment_time ' . $duration
                                . ' -c copy ' . $output . '%2d.wav';
            $results = [];
            $result = exec('pwd', $results, $code);
            print_r($results);
            print_r($result);
            print_r($code);
        }
        // Process the wav through the whisper API from ChatGPT
        $open_ai_key = get_option(VEEPDOTAI_PLUGIN_NAME . '-openai-api-key');
        $open_ai = new OpenAi($open_ai_key);

        $c_file = curl_file_create($output);

        $params = [
            "model" => "whisper-1",
            "file" => $c_file,
        ];

        $raw = $open_ai->transcribe($params);

        //print_r($raw);
        //print_r(json_decode($raw));
        echo json_decode($raw)->text;
        die(); // this is required to return a proper result
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
    public function update_option_if_set($post, $pn, $field) {
        $r = null;
        if (isset($post[$pn .'-' .$field])){
            $field_name = $pn .'-' . $field;
            //$field_value = sanitize_text_field($post[$field_name]);
            $field_value = sanitize_text_field($post[$field_name]);
            error_log('field_name : ' . $field_name . ' = ' . $field_value);
            $r = update_option($field_name, wp_unslash( $field_value ));
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
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text-interview');
            }
            $selected_lp_template = isset($post[$pn .'-lp-templates']) ? $post[$pn .'-lp-templates'] : get_option($pn .'-lp-templates');
            $selected_generation = isset($post[$pn .'-generation']) ? $post[$pn .'-generation'] : get_option($pn .'-generation');
        }

        return;
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
