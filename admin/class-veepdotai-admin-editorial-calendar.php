<?php

require_once "class-veepdotai-util.php";

use Psr\Log\LoggerInterface;

add_action( 'wp_ajax_generate_article', 'Veepdotai_Admin_Editorial_Calendar::generate_article_callback' );

Class Veepdotai_Admin_Editorial_Calendar {

    public static function generate_article_callback() {
        Veepdotai_Util::log("Generating article callback");
        check_ajax_referer( 'my-special-string', 'security' );

        $prompt = <<<_EOF_
Rédige comme un copywriter spécialisé dans le SEO un article de blog en français, à partir du texte à analyser ci-dessous, en mettant en gras les mots déjà présents dans le texte en respectant le format json strict suivant:
{
    "title": mets le titre ici,
    "description": mets la description SEO ici,
    "content": mets le contenu de l'article de blog au format markdown ici,
    "hashtags": mets les hastags ici,
    "themes": extrais les 5 thèmes principaux du texte et mets-les ici,
    "keywords": extrais les 5 mots clés SEO du texte et mets-les ici,
    "image": mets ici un prompt permettant de générer une image pour cet article
}

Le texte à analyser est le suivant :

les bénéfices qu'on peut retirer du projet VIP sont les suivants premièrement on gagne énormément de temps puisque si vous êtes entrepreneur créateur d'entreprise que ce soit un restaurant ou une société de service l'objectif c'est d'y passer le moins de temps possible et en même temps cette présence sur Internet est absolument fondamentale puisque c'est grâce à elle que vous pourrez communiquer que vous pourrez avoir des leads alors il va venir avec moi et à partir de là l'idée ça va être de d'établir cette présence internet très rapidement pour autant il faut qu'elle soit riche et donc c'est pour ça que VIP grâce à la voix va vous permettre de construire votre bride de communication et ce brief de communication il va permettre derrière de créer un site web avec plusieurs pages une page d'accueil plus une dizaine de pages par exemple ainsi qu'un profil Linkedin qui sera constitué d'une audience qui ce qui s'enrichira automatiquement chaque semaine par exemple d'une cinquantaine de contacts automatiquement évidemment et les deux post-in qui seront également générés automatiquement à partir des pages Web qui sont elles-mêmes construites automatiquement pour votre site web donc l'idée c'est que vraiment avec la voix on puisse créer totalement une présence internet donc c'est un énorme gain de temps

_EOF_;

        //$content_id = '20230605-071132-edcal-article-prompt.txt';
        $content_id = $_POST['content_id'];
        Veepdotai_Util::log('content_id: ' . $content_id);        
        if (! $content_id) {
            Veepdotai_Util::log('Getting content from AI: ' . $content_id);

            $raw = Veepdotai_Util::get_content_from_ai($prompt);
            Veepdotai_Util::store_data($prompt, "edcal-article-prompt.txt");
            Veepdotai_Util::store_data($raw, "edcal-article-raw.json");
        } else {
            Veepdotai_Util::log('Getting content already stored: ' . $content_id);
            $raw = Veepdotai_Util::get_data($content_id);
            Veepdotai_Util::log('raw: ' . $raw);
        }

        //$ai_response = json_decode(Veepdotai_Util::fix_json($raw));
        $ai_response = json_decode($raw);
        Veepdotai_Util::log('text: ' . $ai_response->choices[0]->text);
        $text = $ai_response->choices[0]->text;
        $text_fixed = Veepdotai_Util::fix_json($text);
        $ai_response->choices[0]->text = json_decode($text_fixed);
        Veepdotai_Util::log('After fix_json' . json_encode($ai_response));
        echo json_encode($ai_response);
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

    public function manage_action() {
        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        include('partials/veepdotai-form-editorial-calendar-functions.php');

        $page_url = "";
        if (isset($vp[$pn .'-ai-save'])) {
            Veepdotai_Util::log("Editorial Calendar: Saving form data");
            //$this.save_configuration($post);
            $self->save_configuration($vp);
        } elseif (isset($vp[$pn .'-ai-generate-articles'])) {
            $page_url = $self->generate_articles_from_section_informations($vp);

            Veepdotai_Util::go_to_url( $page_url );
        } elseif (isset($vp[$pn .'-ai-generate-all'])) {
            $page_url = $self->generate_all($vp);
        }

        if ($page_url) {
            Veepdotai_Util::go_to_url( $page_url );
        }

        //generate the form
        //ob_start();
        include( 'partials/main-admin-editorial-calendar.php' );
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

        if($this->security_check($post, $pn .'-main_admin_editorial_calendar')) {
            $this->update_option_if_set($post, $pn, 'ai-section-edcal0-transcription');
            $this->update_option_if_set($post, $pn, 'ai-section-edcal0-verbatim');
            for($i = 1; $i < 4; $i++) {
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-title');
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-description');
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-content');
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-themes');
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-hashtags');
                $this->update_option_if_set($post, $pn, 'ai-section-edcal' . $i . '-keywords');
            }
        }

        return;
    }

    /**
     * 
     */
    public function get_image_with_pexels($ts, $prompt, $i) {
        $pn = $this->plugin_name;

        $pexels_key = get_option($pn . '-pexels-api-key');
        $provider = new ApiProvider($pexels_key);

        // Create a Search photos request.
        $request = new SearchPhotosRequest();
        $request->setQuery($prompt);
        $request->setOrientation("landscape"); // Optional
        $request->setSize("large"); // Optional
        $request->setLocale("fr-FR"); // Optional

        $response = $provider->sendRequest($request);

        $images = $response->getPhotos();
        if (! empty($images)) {
            $image = $images[0];
            return $image;
        } else {
            return null;
        }
    }

    /**
     * 
     */
    public function create_image_with_ai($open_ai, $ts, $prompt, $i) {
        $pn = $this->plugin_name;

        $raw = $this->get_data($i);
        if (! $raw) {
            $params = [
                "prompt" => $prompt,
                "n" => 1,
                "size" => "512x512",
                "response_format" => "url",
            ];

            $raw = $open_ai->image($params);
            $this->store_image($ts, $i, $params, $raw);
        }

        error_log($raw);

        return $raw;
    }

    /**
     * 
     */
    public function generate_all($post) {
        $page = $this->generate_images_from_prompts($post);
        $page = $this->generate_page_from_template($post);
        $page = $this->generate_pages_from_section_informations($post);
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