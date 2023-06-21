<?php

require_once "class-veepdotai-util.php";

use Psr\Log\LoggerInterface;

add_action( 'wp_ajax_generate_editorial_strategy', 'Veepdotai_Admin_Editorial_Strategy::generate_editorial_strategy_callback' );

Class Veepdotai_Admin_Editorial_Strategy {

    public static function generate_editorial_strategy_callback() {
        Veepdotai_Util::log("Generating editorial strategy callback");
        check_ajax_referer( 'my-special-string', 'security' );

        //$content_id = '20230605-071132-edcal-article-prompt.txt';
        $content_id = $_POST['content_id'];
        Veepdotai_Util::log('edstrat: content_id: ' . $content_id);        
        if (! $content_id) {
            $context = __( "L'entretien est le suivant:" )
                        . "\n\n" . __( "Quels sont les bénéfices pour les utilisateurs ?" ) . "\n\n"
                            . Veepdotai_Util::get_option("ai-section0-text-interview")
                        . "\n\n" . __( "Quels sont les pains des utilisateurs ?" ) . "\n\n"
                            . Veepdotai_Util::get_option("ai-section1-text-interview")
                        . "\n\n" . __( "Quels sont les produits et services de la société ?" ) . "\n\n"
                            . Veepdotai_Util::get_option("ai-section2-text-interview")
                        . "\n\n" . __( "Quels sont les éléments de différenciation de la société ?" ) . "\n\n"
                            . Veepdotai_Util::get_option("ai-section3-text-interview")
                        . "\n\n" . __( "Fin de l'entretien." );

            $keywords = Veepdotai_Util::get_option("ai-section-edstrat0-keywords");

            $prompt = strtr(
                        Veepdotai_Util::get_option("ai-section-edstrat0-prompt"),
                        [
                            '$context' => $context,
                            '$keywords' => $keywords
                        ]
            );

            Veepdotai_Util::log('Storing prompt.');
            Veepdotai_Util::store_data($prompt, "ai-section-edstrat0-prompt.txt");

            Veepdotai_Util::log('Getting content from AI');
            $raw = Veepdotai_Util::get_content_from_ai($prompt, 2000);

            Veepdotai_Util::log('Storing json');
            Veepdotai_Util::store_data($raw, "ai-section-edstrat0-raw.json");
        } else {
            Veepdotai_Util::log('edstrat: Getting content already stored: ' . $content_id);
            $raw = Veepdotai_Util::get_data($content_id);
            Veepdotai_Util::log('raw: ' . $raw);
        }

        // We are generating csv here, not json
        $ai_response = json_decode($raw);
        Veepdotai_Util::log('edstrat: text: ' . $ai_response->choices[0]->text);
        echo $raw;
        die();
    }

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

    public function generate_edstrat($vp) {
        $pn = $this->plugin_name;

        // Compute the editorial strategy from the corresponding prompt.
        $prompt = Veepdotai_Util::get_data('ai-section-edstrat0-prompt');

        $raw = Veepdotai_Util::get_content_from_ai($prompt);
        Veepdotai_Util::update_option('ai-section-edstrat0-strategy', $raw);

        return $raw;
    }

    public function manage_action() {
        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        include('partials/veepdotai-form-editorial-strategy-functions.php');

        $page_url = "";
        if (isset($vp[$pn .'-ai-save'])) {
            Veepdotai_Util::log("Editorial Strategy: Saving form data");
            //$this.save_configuration($post);
            $self->save_configuration($vp);
        } elseif (isset($vp[$pn .'-ai-generate-editorial-strategy'])) {
            $page_url = $self->generate_edstrat($vp);

            Veepdotai_Util::go_to_url( $page_url );
        } elseif (isset($vp[$pn .'-ai-generate-all'])) {
            $page_url = $self->generate_all($vp);
        }

        if ($page_url) {
            Veepdotai_Util::go_to_url( $page_url );
        }

        //generate the form
        //ob_start();
        include( 'partials/main-admin-editorial-strategy.php' );
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
            $field_value = sanitize_textarea_field($post[$field_name]);
            Veepdotai_Util::log('field_name : ' . $field_name . ' = ' . $field_value);
            $r = Veepdotai_Util::update_option($field, wp_unslash( $field_value ));
        }
        return $r;
    }

    /**
     * Everything needs to be saved because all parts may have been updated
     * 
     */
    public function save_configuration($post) {
        $pn = $this->plugin_name;

        if($this->security_check($post, $pn .'-main_admin_editorial_strategy')) {
            $this->update_option_if_set($post, $pn, 'ai-section-edstrat0-keywords');
            $this->update_option_if_set($post, $pn, 'ai-section-edstrat0-strategy');
            $this->update_option_if_set($post, $pn, 'ai-section-edstrat0-prompt');
        }

        return;
    }


    /**
     * 
     */
    public function generate_all($post) {
        //$this->generate_articles_from_section_informations($post);

        //Veepdotai_Util::go_to_url($page);
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