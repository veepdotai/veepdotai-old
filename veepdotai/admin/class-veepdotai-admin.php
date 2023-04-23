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
//require "vendor/autoload.php";
use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;


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

		require plugin_dir_path( __FILE__ ) . './class-veepdotai-site-generator.php';
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
        add_menu_page(
            'Veepdotai Admin',
            'Veepdotai',
            'manage_options',
            $this->plugin_name,
            array($this, 'main_admin_menu_callback'),
            plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
        );
        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name ),
            __( 'Configuration', $this->plugin_name ),
            'manage_options',
            $this->plugin_name.'-veepdotai-configuration-site',
            array($this, 'main_admin_submenu_configuration_callback')
        );
        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name  ),
            __( 'Menu', $this->plugin_name  ),
            'manage_options',
            $this->plugin_name.'-veepdotai-menu-logo', // 'veepdotai-menu', //plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
            array($this, 'main_admin_submenu_menu_callback')
        );
        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name ),
            __( 'Site', $this->plugin_name ),
            'manage_options',
            $this->plugin_name.'-veepdotai-menu-site',
            array($this, 'main_admin_submenu_site_callback')
        );

        /*
        add_submenu_page( $this->plugin_name,
            'Menu',
            'Menu',
            'manage_options',
            'veepdotai-menu',
            array($this, 'main_admin_submenu_menu_callback'),
            plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
        );
        add_submenu_page( $this->plugin_name,
            'Menu',
            'Site',
            'manage_options',
            'veepdotai-site',
            array($this, 'main_admin_submenu_site_callback'),
            plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
        );
        */
//        add_submenu_page( $this->plugin_name,
//            'Menu',
//            'Page',
//            'manage_options',
//            'veepdotai-site',
//            array($this, 'main_admin_submenu_page_callback'),
//            plugin_dir_url( __FILE__ ) .'assets/images/veepdotai-admin-icon.svg'
//        );

        remove_submenu_page($this->plugin_name, $this->plugin_name);

    }

    /**
     * Checks parameters are correct from a security point of view
     *
     * @since  1.0.0
     */
    public function security_check($parameters, $var_name) {
		return true;
	}

    public function main_admin_menu_callback() {
        include( 'partials/main-admin-home.php' );
    }

	/**
     * Render the main admin menu and save data to the db
     *
     * @since  1.0.0
     */
    public function main_admin_submenu_menu_callback() {
        global $wpdb;
        $templateSelect = '';

        $categories = get_categories();
        $tags = get_tags();

        //due to very strange behaviour of WP slashing POST data
        // --> https://stackoverflow.com/questions/8949768/with-magic-quotes-disabled-why-does-php-wordpress-continue-to-auto-escape-my
        $post = array_map('stripslashes_deep', $_POST);
        //filter subset of the post array to avoid conflict
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^'. $pn .'/', array_keys($post))));

        if (isset($post[$this->plugin_name.'-ai-generate-menu'])) {
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

                var_dump($raw);

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

            }
        }

        //generate the form
        ob_start();
        include( 'partials/main-admin-menu.php' );
        $admin_menu_html = ob_get_contents();
        ob_end_clean();
        echo $admin_menu_html;
    }

	public function update_option_if_set($post, $pn, $field) {
        $r = null;
        if (isset($post[$pn .'-' .$field])){
            $field_name = $pn .'-' . $field;
            $field_value = sanitize_text_field($post[$field_name]);
            error_log('field_name : ' . $field_name . ' = ' . $field_value);
            $r = update_option($field_name, $field_value);
        }
        return $r;
    }

	/**
     * Render the main admin site and save data to the db
     *
     * @since  1.0.0
     */
	public function main_admin_submenu_site_callback() {
        global $wpdb;
        $pn = $this->plugin_name;

        include('partials/veepdotai-form-functions.php');
        $selected_lp_template='';
        $selected_generation='';
        $selected_wp_template='';

        $page_templates = get_page_templates();
		$categories = get_categories();
        $tags = get_tags();

        //due to very strange behaviour of WP slashing POST data
        // --> https://stackoverflow.com/questions/8949768/with-magic-quotes-disabled-why-does-php-wordpress-continue-to-auto-escape-my
        $post = array_map('stripslashes_deep', $_POST);
        //filter subset of the post array to avoid conflict
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^' . $pn .'/', array_keys($post))));

        if (isset($post[$pn .'-ai-save'])) {
            if($this->security_check($post, $pn .'-main_admin_site')) {
                for ($i = 0; $i < 6; $i++) {
                    $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img');
                    $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-title');
                    $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text');
                    $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-text');
                    $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-href');
                }
                $selected_lp_template = isset($post[$pn .'-lp-templates']) ? $post[$pn .'-lp-templates'] : get_option($pn .'-lp-templates');
                $selected_generation = isset($post[$pn .'-generation']) ? $post[$pn .'-generation'] : get_option($pn .'-generation');
                //$selected_wp_template = isset($post[$pn .'-wp-templates']) ? $post[$pn .'-wp-templates'] : get_option($pn .'-wp-templates');
                include_once(plugin_dir_path(__FILE__) . 'partials/veepdotai-shortcode.php');
            }
		} elseif (isset($post[$pn .'-ai-generate-site'])) {
            if ($this->security_check($post, $pn .'-main_admin_site')) {
                //update_option($pn . '_ai_site', sanitize_text_field($post[$pn .'-ai-site']));
                $id = 20477;
                $initial_content = get_post($id)->post_content;
                //$initial_content2 = file_get_contents(plugin_dir_path(__FILE__) . '../data/template.html');

                $dom = new Dom;
                /*
                $dom->setOptions((new Options())
                        ->setPreserveLineBreaks(true)
                        ->setCleanupInput(true)
                        ->setFixComments(true)
                        ->setRemoveComments(false)
                );
                */

                $dom->loadStr($initial_content,
                    (new Options())
                    ->setPreserveLineBreaks(true)
                    ->setCleanupInput(true)
                    ->setFixComments(true)
                    ->setRemoveComments(false)
                );

/*
                $veep_title = get_option($pn . '-ai-section0-title');
                $veep_text = get_option($pn . '-ai-section0-text');
                $veep_image = get_option($pn . '-ai-section0-img');
//                $veep_cta_href = get_option($pn . '-ai-section0-cta-href');
//                $veep_cta_text = get_option($pn . '-ai-section0-cta-text');
                $veep_cta_href = "https://www.lemonde.fr";
                $veep_cta_text = "This is the new link!";
*/
                $sections = $dom->find('.veep_section');
                for ($i = 0; $i < count($sections); $i++) {
                    $veep_title = get_option("$pn-ai-section$i-title");
                    $veep_text = get_option("$pn-ai-section$i-text");
                    $veep_image = get_option("$pn-ai-section$i-img");
                    $veep_cta_href = get_option("$pn-ai-section$i-cta-href");
                    $veep_cta_text = get_option("$pn-ai-section$i-cta-text");

                    error_log("Processing $i");
                    try {
                        /**
                         * Syntax NOK :
                         *   $dom->find(".veep_section[$i] .veep_title")[0]->firstChild()->setText($veep_title);
                         */ 
                        /*
                        $dom->find('.veep_section')[$i]->find('.veep_title')[0]->firstChild()->setText($veep_title);
                        $dom->find('.veep_section')[$i]->find('.veep_text')[0]->firstChild()->setText($veep_text);
                        $dom->find('.veep_section')[$i]->find('.veep_cta a')[0]->setAttribute('href', $veep_cta_href);
                        $dom->find('.veep_section')[$i]->find('.veep_cta a')[0]->firstChild()->setText($veep_cta_text);
                        */
                        $section = $dom->find('.veep_section')[$i];
                        $section->find('.veep_title')[0]->firstChild()->setText($veep_title);
                        $section->find('.veep_text')[0]->firstChild()->setText($veep_text);
                        $section->find('.veep_cta a')[0]->setAttribute('href', $veep_cta_href);
                        $section->find('.veep_cta a')[0]->firstChild()->setText($veep_cta_text);

                    } catch (\Exception $e) {
                        error_log("One of the value doesn't exist for the $i section.");
                        error_log("Exeption: " . $e->getMessage() . "\n");
                    }
                }

                //error_log('DOM: ' . $dom);
                $content = $dom->export();
                $new_page = array(
                    'post_title' => get_option($pn .'-ai-section0-title'),
                    'post_content' => $content,
                    'post_status' => 'publish',
                    'post_type' => 'page',
                    'post_name' => '',
                    'page_template' => $post[$pn .'-wp-templates']
                );
            }
            $page_id = wp_insert_post($new_page);
            $page_url = get_permalink($page_id);
            echo '<script>window.location.replace("' .$page_url.'")</script>';
        }

        /*

        $hero_title = "This is the new Title";
        $hero_tagline = "This is the tagline";
        $hero_image = "https://media.istockphoto.com/id/1212064060/fr/photo/abs-hologram-data-flow-grid.jpg?s=612x612&w=0&k=20&c=8gcR3tSm1etZp0JL0aZAs5VwnGQrvgigVKq9tMdgjJI=";
        $hero_cta_href = "https://www.veep.ai";
        $hero_cta_text = "This is the new text link";

        //$r = preg_replace('/(veep-lp-hero-title[^\>]*>)[^\<]*(<.*)/', "${1}$hero_title${2}", $html);
        //$r = preg_replace('/("veep-lp-hero-title"[^>]*)>(.*)/', "${1}$hero_title${2}", $html);
        $r1 = preg_replace('/(veep-lp-hero-title[^\>]*\>)[^\<]*(.*)/', "$1$hero_title$2", $html);
        $r2 = preg_replace('/(veep-lp-hero-tagline[^\>]*\>)[^\<]*(.*)/', "$1$hero_tagline$2", $r1);
        $r3 = preg_replace('/(veep-lp-hero-cta-href[^\>]*\>)(.*href=\")[^\"]*(\"[^\>]*>)(.*<\/a><\/div>)/', "$1$2$hero_cta_href$3$hero_cta_text$4", $r2);
//      $r4 = preg_replace('/(veep-lp-hero-cta-text[^\>]*\>)[^\<]*(.*)/', "$1$cta_text$2", $r3);

        error_log("hero_cta_text: " . $r3);
        */

        //generate the form
        ob_start();
        include( 'partials/main-admin-site.php' );
        $admin_site_html = ob_get_contents();
        ob_end_clean();
        echo $admin_site_html;

    }

    /**
     * Render the main admin menu and save data to the db
     *
     * @since  1.0.0
     */
    public function main_admin_submenu_configuration_callback() {
        global $wpdb;

        $categories = get_categories();
        $tags = get_tags();

        //due to very strange behaviour of WP slashing POST data
        // --> https://stackoverflow.com/questions/8949768/with-magic-quotes-disabled-why-does-php-wordpress-continue-to-auto-escape-my
        $post = array_map('stripslashes_deep', $_POST);
        //filter subset of the post array to avoid conflict
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^'. $pn .'/', array_keys($post))));

        if (isset($post[$pn .'-ai-save-api-key'])) {
            if($this->security_check($post, $pn .'-main_admin_menu')) {
                update_option($pn .'_ai_api_key', sanitize_text_field($post[$this->plugin_name.'-ai-api_key']));
            }
        }

        //generate the form
        ob_start();
        include( 'partials/main-admin-configuration.php' );
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
