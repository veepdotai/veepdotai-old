<?php

require_once "class-veepdotai-util.php";

use Psr\Log\LoggerInterface;

add_action( 'wp_ajax_generate_editorial_strategy', 'Veepdotai_Admin_Editorial_Strategy::generate_editorial_strategy_callback' );

Class Veepdotai_Admin_Editorial_Strategy {

    public static function generate_editorial_strategy_callback() {
        Veepdotai_Util::log("Generating editorial strategy callback");
        check_ajax_referer( 'my-special-string', 'security' );

        $prompt = <<<_EOF_
A partir de l'entretien ci-dessus, composé des parties Bénéfices, Besoins, Produits/Services et Différenciation, agis en spécialiste de la communication et propose une stratégie éditoriale au format csv composée d'une liste de 10 questions sans faire d'introduction ni de conclusion à ta réponse. La ligne d'en-tête de l'export csv sera la suivante :
* thème : le thème principal correspondant parmi bénéfices, besoins, produits/services ou différenciation
* question : la question, dans le style plus direct possible
* destinataire : le type de personne susceptible de répondre parmi directeur général ou responsable commercial ou responsable marketing ou responsable technique
* type : le type de la question parmi TOFU, MOFU ou BOFU
* format : le type de format de publication le plus pertinent parmi article de blog, post instagram, post facebook ou post linkedin
    
Les questions seront alternées en fonction des thèmes, des types de questions et des formats.

_EOF_;

        //$content_id = '20230605-071132-edcal-article-prompt.txt';
        $content_id = $_POST['content_id'];
        Veepdotai_Util::log('edstrat: content_id: ' . $content_id);        
        if (! $content_id) {
            $prompt = "L'entretien est le suivant:"
                        . "\n\nQuels sont les bénéfices pour les utilisateurs ?\n\n"
                            . get_option(VEEPDOTAI_PLUGIN_NAME . "-ai-section0-text-interview")
                        . "\n\nQuels sont les besoins des utilisateurs ?\n\n"
                            . get_option(VEEPDOTAI_PLUGIN_NAME . "-ai-section1-text-interview")
                        . "\n\nQuels sont les produits et services de la société ?\n\n"
                            . get_option(VEEPDOTAI_PLUGIN_NAME . "-ai-section2-text-interview")
                        . "\n\nQuels sont les éléments de différenciation de la société ?\n\n"
                            . get_option(VEEPDOTAI_PLUGIN_NAME . "-ai-section3-text-interview")
                        . "\n\n" . $prompt;
            Veepdotai_Util::store_data($prompt, "edstrat-prompt.txt");

            Veepdotai_Util::log('edstrat: Getting content from AI.');
            $raw = Veepdotai_Util::get_content_from_ai([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.7,
                'max_tokens' => 1000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            Veepdotai_Util::store_data($raw, "edstrat-raw.json");
        } else {
            Veepdotai_Util::log('edstrat: Getting content already stored: ' . $content_id);
            $raw = Veepdotai_Util::get_data($content_id);
            Veepdotai_Util::log('raw: ' . $raw);
        }

        //$ai_response = json_decode(Veepdotai_Util::fix_json($raw));
        $ai_response = json_decode($raw);
        Veepdotai_Util::log('edstrat: text: ' . $ai_response->choices[0]->text);
//        $text = $ai_response->choices[0]->text;
//        $text_fixed = Veepdotai_Util::fix_json($text);
//        $ai_response->choices[0]->text = json_decode($text_fixed);
//        Veepdotai_Util::log('After fix_json' . json_encode($ai_response));
//        echo json_encode($ai_response);
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

        update_option($pn . '-ai-section-edstrat0-strategy', 'Coucou');

        return ('editorial-strategy');
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
            error_log('field_name : ' . $field_name . ' = ' . $field_value);
            $r = update_option($field_name, wp_unslash( $field_value ));
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
            $this->update_option_if_set($post, $pn, 'ai-section-edstrat0-strategy');
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