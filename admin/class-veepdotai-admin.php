<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.veep.ai
 * @since      1.0.0
 *
 * @package    Veepdotai
 * @subpackage Veepdotai/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Veepdotai
 * @subpackage Veepdotai/admin
 * @author     Jean-Christophe Kermagoret <jc@kermagoret.net>
 */
use Orhanerday\OpenAi\OpenAi;

class Veepdotai_Admin {

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

		$this->load_dependencies();

	}

	private function load_dependencies() {
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-veep-loader.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-menu-generator.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Veepdotai_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Veepdotai_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/veepdotai-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Veepdotai_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Veepdotai_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/veepdotai-admin.js', array( 'jquery' ), $this->version, false );
	}

	    /**
     * Add the main admin menu
     *
     * @since  1.0.0
     */
    public function main_admin_menu() {
        add_menu_page( 'Veepdotai Admin Menu',
            'Veepdotai',
            'manage_options',
            $this->plugin_name,
            array($this, 'main_admin_menu_callback'),
            plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
        );
    }

    /**
     * Checks parameters are correct from a security point of view
     *
     * @since  1.0.0
     */
    public function security_check($parameters, $var_name) {
		return true;
	}

		/**
     * Render the main admin menu and save data to the db
     *
     * @since  1.0.0
     */
    public function main_admin_menu_callback() {
        global $wpdb;

		$categories = get_categories();
        $tags = get_tags();

        //due to very strange behaviour of WP slashing POST data
        // --> https://stackoverflow.com/questions/8949768/with-magic-quotes-disabled-why-does-php-wordpress-continue-to-auto-escape-my
        $post = array_map('stripslashes_deep', $_POST);
        //filter subset of the post array to avoid conflict
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^'.$this->plugin_name.'/', array_keys($post))));

		if (isset($post[$this->plugin_name.'-ai-save-api-key'])) {
            if($this->security_check($post, $this->plugin_name.'-main_admin_menu')) {
                update_option($this->plugin_name.'_ai_api_key', sanitize_text_field($post[$this->plugin_name.'-ai-api_key']));
                echo '<script>window.location.replace("admin.php?page=veepdotai")</script>';
            }
        } elseif (isset($post[$this->plugin_name.'-ai-generate-menu'])) {
            if($this->security_check($post, $this->plugin_name.'-main_admin_menu')) {
                update_option($this->plugin_name.'_ai_context', sanitize_text_field($post[$this->plugin_name.'-ai-context']));

				//$open_ai_key = getenv('OPENAI_API_KEY');
				$open_ai_key = get_option($this->plugin_name.'_ai_api_key');
				$open_ai = new OpenAi($open_ai_key);
				
				$prompt = get_option($this->plugin_name.'_ai_context');
				$promptWithCommand = $prompt . " Rédige un menu de navigation pour un site web sur ces sujets au format YAML, avec un hero title, une tagline et les principales sections à mettre sur la page d'accueil.";
				//$prompt = $prompt . " Propose-moi un menu de navigation pour le site web des pompes funèbres duriez.";
				//$prompt = $prompt . " Propose-moi un menu de navigation pour un site web en remplaçant les '\n' par '&#13;'.";

				$raw = $open_ai->completion([
					'model' => 'text-davinci-003',
					'prompt' => $promptWithCommand,
					'temperature' => 0.7,
					'max_tokens' => 512,
					'frequency_penalty' => 0,
					'presence_penalty' => 0.6,
				]);

				$this->var_error_log( $raw );
			
/*				
				$raw= <<<_EOF_
				{"id":"cmpl-6gAFowcFdl66wjyIDh9CQ6btVAvXB","object":"text_completion","created":1675507212,"model":"text-davinci-003","choices":[{"text":"\n\n1. Accueil \n2. Notre Histoire \n3. Services Funéraires \n4. Réception des Défunts \n5. Cérémonies \n6. Salons Funéraires \n7. Démarches administratives \n8. Contact","index":0,"logprobs":null,"finish_reason":"stop"}],"usage":{"prompt_tokens":152,"completion_tokens":68,"total_tokens":220}}
				_EOF_;

				//$result = preg_replace('/\\n/', '\\\\\n', $raw);
*/
				$result = preg_replace('/\\\\n/', '##n', $raw);
				/*
					$this->var_error_log( $result );
					var_dump($result);
					echo $result . "\n";
				*/
				$infos = json_decode($result);
				/*
					$this->var_error_log( $infos );
					var_dump($infos);
					echo "Erreur? " . json_last_error() ."\n\n";
				*/
				$text = $infos->choices[0]->text;
				$text = preg_replace('/^##n##n/', '', $text);
				/*
					echo "Text: " . $text . ".\n\n";
					var_dump($text);
					echo "OUTPUT ###";
				*/
				//$output = preg_replace('/\\\\n/', '&#13;', $text);
				$output = preg_replace('/##n/', '&#13;', $text);
				/*
					echo "$output";
				*/

//				$result = $prompt . "\n\n"
//							. "Raw:\n.\n" . $raw . "\n\n"
//							. "Text:\n.\n" . $text . "\n\n"
//							. "Output:\n.\n" . $output;

				$result = $output;
				update_option($this->plugin_name.'_ai_menu', $result);

                echo '<script>window.location.replace("admin.php?page=veepdotai")</script>';
            }
		} elseif (isset($post[$this->plugin_name.'-ai-generate-site'])) {
            if($this->security_check($post, $this->plugin_name.'-main_admin_menu')) {
                update_option($this->plugin_name.'_ai_menu', sanitize_text_field($post[$this->plugin_name.'-ai-menu']));
				$generator = new Veepdotai_Menu_Generator();
				$menu = [];
				$menu["name"] = "Test menu";
				$menu["items"] = [
					"Accueil" => "Accueil menu",
					"Blog" => "Blog menu"
				];
				$generator->generateMenu($menu);
                echo '<script>window.location.replace("admin.php?page=veepdotai")</script>';
            }
		}

        //generate the form
        ob_start();
        include( 'partials/main-admin-menu.php' );
        $admin_menu_html = ob_get_contents();
        ob_end_clean();
        echo $admin_menu_html;
    }

	public function var_error_log( $object=null ){
		ob_start();                    // start buffer capture
		var_dump( $object );           // dump the values
		$contents = ob_get_contents(); // put the buffer into a variable
		ob_end_clean();                // end capture
		error_log( $contents );        // log contents of the result of var_dump( $object )
	}
	 
}
