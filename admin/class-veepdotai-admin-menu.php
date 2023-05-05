<?php

Class Veepdotai_Admin_Menu {


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

        $post = array_map('stripslashes_deep', $_POST);
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^'. $this->plugin_name .'/', array_keys($post))));

        $this->post = $veep_post;
    }

    public function manage_action() {

        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        if (isset($vp[$pn .'-ai-generate-menu'])) {
            $self->process_menu($vp);
        }

        //generate the form
        ob_start();
        include( 'partials/main-admin-menu.php' );
        $page_html = ob_get_contents();
        ob_end_clean();
        echo $page_html;
        
    }

    public function process_menu() {

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

}