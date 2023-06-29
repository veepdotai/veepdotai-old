<?php

require_once "class-veepdotai-util.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

use Psr\Log\LoggerInterface;

use Orhanerday\OpenAi\OpenAi;

Class Veepdotai_Admin_Site {
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

        include('partials/veepdotai-form-site-functions.php');

        $page_url = "";
        if (isset($vp[$pn .'-ai-save'])) {
            //$this.save_configuration($post);
            $self->save_configuration($vp);
		} elseif (isset($vp[$pn .'-ai-transform'])) {
            $page_url = $self->improve($vp);
		} elseif (isset($vp[$pn .'-ai-generate-site'])) {
            $page_url = $self->generate_page_from_template($vp);

            Veepdotai_Util::go_to_url( $page_url );
        } elseif (isset($vp[$pn .'-ai-generate-images'])) {
            $page_url = $self->generate_images_from_prompts($vp);

            Veepdotai_Util::go_to_url('site', true);
        } elseif (isset($vp[$pn .'-ai-generate-pages'])) {
            $page_url = $self->generate_pages_from_section_informations($vp);

            Veepdotai_Util::go_to_url( $page_url );
        } elseif (isset($vp[$pn .'-ai-generate-all'])) {
            $page_url = $self->generate_all($vp);
        } elseif (isset($vp[$pn .'-ai-transform-generate-all'])) {
            $page_url = $self->transform_generate_all($vp);
        }

        if ($page_url) {
            Veepdotai_Util::go_to_url( $page_url );
        }

        //generate the form
        //ob_start();
        include( 'partials/main-admin-site.php' );
        //$page_html = ob_get_contents();
        //ob_end_clean();
        //echo $page_html;
    }

        /**
     * Improve provided content with AI (openai in our case)
     * 
     * @TODO Storage needs to be reworked completely with a db!!!
     */
    public function improve($post) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        //$this->save_configuration($post);

        $results = [];
        if($this->security_check($post, $pn .'-main_admin_site')) {

            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];

            // Process each prompt through the content of the corresponding field
            // input through voice during the interview ?
            // Or concat everything before providing the content to AI ?
            // Last method will be cheaper and more efficient

            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                $prompt = Veepdotai_Admin_Prompts::create_prompt($content_titles[$i], $i);
 
                $section = Veepdotai_Admin_Prompts::create_text_with_ai($date, $prompt, $i);
                
                $prefix = $pn . '-ai-section' . $i . '-';

                Veepdotai_Admin_Prompts::update_option($prefix . 'title', $section->title);
                Veepdotai_Admin_Prompts::update_option($prefix . 'text', $section->text);

                $section_md = str_replace('#_#_#n', '\n', $section->page);
                Veepdotai_Admin_Prompts::update_option($prefix . 'page', $section_md);
//                $this->update_option($prefix . 'transcript', $section->transcript);
                //$r = $this->update_option($prefix . 'cta-href', $section->{"cta-href"});
                Veepdotai_Admin_Prompts::update_option($prefix . 'cta-text', $section->{"cta-text"});
//                $this->update_option($prefix . 'themes', $section->{"themes"});
                Veepdotai_Admin_Prompts::update_option($prefix . 'img-prompt', $section->img);

                //$img = $this->create_image_with_ai($open_ai, $date, $prompt, $i);

                //$results[] = $r;
            }
        }
        return $results;
    }

    /**
     * 
     */
    public function update_option_if_set($post, $pn, $field) {
        $r = null;
        if (isset($post[$pn .'-' .$field])){
            $field_name = $pn .'-' . $field;
            $field_value = sanitize_textarea_field($post[$field_name]);
           Veepdotai_Util::log('debug', 'field_name : ' . $field_name . ' = ' . $field_value);
            $r = Veepdotai_Util::update_option($field, wp_unslash( $field_value ));
        }
        return $r;
    }

    /**
     * 
     */
    public function save_configuration($post) {
        $pn = $this->plugin_name;

        if($this->security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 4; $i++) {
                // Everything needs to be saved because all parts may have been updated
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-prompt');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-href');
                // img->alt = img->prompt or part of? or summarized?
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-alt');

                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-title');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text');
//                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-transcription');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-page');
//                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-themes');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-text');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-href');
            }
            $selected_lp_template = isset($post[$pn .'-lp-templates']) ? $post[$pn .'-lp-templates'] : Veepdotai_Util::get_option('lp-templates');
            $selected_generation = isset($post[$pn .'-generation']) ? $post[$pn .'-generation'] : Veepdotai_Util::get_option('generation');
        }

        return;
    }

    public function set_section_data($_section, $selector, $value) {
        $section = $_section;
        try {
            $section->find($selector)[0]->firstChild()->setText($value);
        } catch (e) {
           Veepdotai_Util::log('debug', "Error while getting first-child of $selector. Does it exist?");
            return $section;
        } finally {
            return $section;
        }

    }

    public function set_section_image($_section, $selector, $href, $alt) {
        $section = $_section;
        try {
            $image = $section->find($selector)[0];
            $image->setAttribute('src', $href);
            $image->setAttribute('alt', $alt);

           Veepdotai_Util::log('debug', "Image: " . $image);
        } catch (e) {
           Veepdotai_Util::log('debug', "Image : Error while getting first-child of $selector. Does it exist?");
            return $section;
        } finally {
            return $section;
        }
    }

    public function set_section_ahref($_section, $selector, $href, $text) {
        $section = $_section;
        try {
            $a = $section->find($selector)[0];
            $a->setAttribute('href', $href);
            $a->firstChild()->setText($text);
        } catch (e) {
           Veepdotai_Util::log('debug', "Error while getting first-child of $selector. Does it exist?");
            return $section;
        } finally {
            return $section;
        }
    }

    /**
     * @TBD
     */
    public function generate_articles_from_vocals($post, $reset = false) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;

        // Is page already computed?
        $newcontent = Veepdotai_Util::get_option($pn ."-ai-section$i-page");
        if ($newcontent == "" || $reset) {
            $section_field = "ai-section$i-text-interview";
            Veepdotai_Util::log_direct("<h2>Processing section: $pn-$section_field.</h2>");

            // Should be stored into the prompts database so it may be translated.
            $prompt_pre = "Ecris à partir du contenu suivant un article de blog de 200 mots "
                        . "avec un style journalistique et argumenté reprenant les idées principales du texte sans écrire ce que tu fais : ";

            $content = Veepdotai_Util::get_option($section_field);
            $prompt = $prompt_pre . $content;

            Veepdotai_Util::log_direct("<p class='prompt'>" . $prompt . ".</p>");

            $open_ai_key = Veepdotai_Util::get_option('openai-api-key');
            $open_ai = new OpenAi($open_ai_key);

            $params = [
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.7,
                'max_tokens' => 2000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ];

            print_r("Params: ");
            print_r($params);
            Veepdotai_Util::log_direct("<p class='params'>" . $params . ".</p>");

            $raw = $open_ai->completion($params);
            print_r("Raw: ");
            print_r($raw);
            $r = json_decode($raw)->choices[0];
            $newcontent = $r->text;

            // Stores content in the corresponding option
            Veepdotai_Util::update_option("ai-section$i-page", $newcontent);
        }

        // Compute post_name for future reference by welcome|landing page
        $cta_text = Veepdotai_Util::get_option("ai-section$i-cta-text");
        $post_name = Veepdotai_Util::replace_special_chars($cta_text);
        $post_name = strtr($post_name, ["'" => "_", " " => "_"]);
        $post_name = strtolower($post_name);

        $template = $post[$pn .'-lp-templates'];
       Veepdotai_Util::log('debug', "post name for $i: " . $post_name);

        Veepdotai_Util::log_direct("<p class='post_name'>Post_name for this generation: " . $post_name . ".</p>");
        Veepdotai_Util::log_direct("<p class='template'>Template for this generation: " . $template . ".</p>");

        $image_href = Veepdotai_Util::get_option("ai-section$i-img-href");
        $image_alt = Veepdotai_Util::get_option("ai-section$i-img-prompt");

        $tpl_group_pre = '<!-- wp:group {"className":"veep_page","layout":{"type":"constrained"}} -->'
                            . '<div class="wp-block-group veep_page">';
        $tpl_group_post = '</div>'
                            .'<!-- /wp:group -->';

        $tpl_image = '<!-- wp:image {"align":"center","style":{"border":{"radius":"5px","width":"10px"}},"className":"size-full has-custom-border is-style-rounded","dynamicAttributes":{"toolsetDSVersion":"230000"}} -->'
                        . '<figure class="wp-block-image aligncenter has-custom-border size-full is-style-rounded">'
                        . '<img src="' . $image_href . '" alt="' . $image_alt . '" style="border-width:10px;border-radius:5px"/>'
                        . '</figure>'
                        . '<!-- /wp:image -->';

        $tpl_para = '<!-- wp:paragraph {"className":"veep_generated_text","dynamicAttributes":{"toolsetDSVersion":"230000"}} -->'
                    . '<p class="veep_text_generated">' . $newcontent . '</p>'
                    . '<!-- /wp:paragraph -->';

        $content = $tpl_group_pre . $tpl_image . $tpl_para . $tpl_group_post;

        //error_log('DOM: ' . $dom);
        $new_page = array(
            'post_title' => Veepdotai_Util::get_option("ai-section$i-cta-text"), // Needs wp_strip_all_tags ?
            'post_content' => $content,
            'post_status' => 'publish',
            'post_type' => 'page',  // post
            'post_name' => $post_name,
            'page_template' => $template
        );

        $page_id = wp_insert_post($new_page);
        $r = wp_set_post_categories($page_id, array(31));
        //error_log("Post $page_id has been assigned the 31 category" . $r);

        $page_url = get_permalink($page_id);

        // Not Implemented Yet
    }

    public function generate_pages_from_section_informations($post, $reset = false) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;
        
        if ($this->security_check($post, $pn .'-main_admin_site')) {
            //$id = $post[$pn . '-article-templates'];
            
            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];
            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                // Is page already computed?
                $newcontent = Veepdotai_Util::get_option("ai-section$i-page");
                if ($newcontent == "" || $reset) {
                    $section_field = "ai-section$i-text-interview";
                    Veepdotai_Util::log_direct("<h2>Processing section: $pn-$section_field.</h2>");

                    // Should be stored into the prompts database so it may be translated.
                    $prompt_pre = "Ecris à partir du contenu suivant un article de blog de 200 mots "
                                . "avec un style journalistique et argumenté reprenant les idées principales du texte sans écrire ce que tu fais : ";
        
                    $content = Veepdotai_Util::get_option($section_field);
                    $prompt = $prompt_pre . $content;

                    Veepdotai_Util::log_direct("<p class='prompt'>" . $prompt . ".</p>");

                    $open_ai_key = Veepdotai_Util::get_option('openai-api-key');
                    $open_ai = new OpenAi($open_ai_key);

                    $params = [
                        'model' => 'text-davinci-003',
                        'prompt' => $prompt,
                        'temperature' => 0.7,
                        'max_tokens' => 2000,
                        'frequency_penalty' => 0,
                        'presence_penalty' => 0.6,
                    ];

                    print_r("Params: ");
                    print_r($params);
                    Veepdotai_Util::log_direct("<p class='params'>" . $params . ".</p>");

                    $raw = $open_ai->completion($params);
                    print_r("Raw: ");
                    print_r($raw);
                    $r = json_decode($raw)->choices[0];
                    $newcontent = $r->text;

                    // Stores content in the corresponding option
                    Veepdotai_Util::update_option("ai-section$i-page", $newcontent);
                }

                // Compute post_name for future reference by welcome|landing page
                $cta_text = Veepdotai_Util::get_option("ai-section$i-cta-text");
                $post_name = Veepdotai_Util::replace_special_chars($cta_text);
                $post_name = strtr($post_name, ["'" => "_", " " => "_"]);
                $post_name = strtolower($post_name);

                $template = $post[$pn .'-lp-templates'];
               Veepdotai_Util::log('debug', "post name for $i: " . $post_name);

                Veepdotai_Util::log_direct("<p class='post_name'>Post_name for this generation: " . $post_name . ".</p>");
                Veepdotai_Util::log_direct("<p class='template'>Template for this generation: " . $template . ".</p>");

                $image_href = Veepdotai_Util::get_option("ai-section$i-img-href");
                $image_alt = Veepdotai_Util::get_option("ai-section$i-img-prompt");

                $tpl_group_pre = '<!-- wp:group {"className":"veep_page","layout":{"type":"constrained"}} -->'
                                    . '<div class="wp-block-group veep_page">';
                $tpl_group_post = '</div>'
                                    .'<!-- /wp:group -->';

                $tpl_image = '<!-- wp:image {"align":"center","style":{"border":{"radius":"5px","width":"10px"}},"className":"size-full has-custom-border is-style-rounded","dynamicAttributes":{"toolsetDSVersion":"230000"}} -->'
                                . '<figure class="wp-block-image aligncenter has-custom-border size-full is-style-rounded">'
                                . '<img src="' . $image_href . '" alt="' . $image_alt . '" style="border-width:10px;border-radius:5px"/>'
                                . '</figure>'
                                . '<!-- /wp:image -->';

/*
                $tpl_para = '<!-- wp:paragraph {"className":"veep_generated_text","dynamicAttributes":{"toolsetDSVersion":"230000"}} -->'
                            . '<p class="veep_text_generated">' . $newcontent . '</p>'
                            . '<!-- /wp:paragraph -->';
*/
                $tpl_para = Veepdotai_Util::generate_html_from_markdown($newcontent);

                $content = $tpl_group_pre . $tpl_image . $tpl_para . $tpl_group_post;

                //error_log('DOM: ' . $dom);
                $new_page = array(
                    'post_title' => Veepdotai_Util::get_option("ai-section$i-cta-text"), // Needs wp_strip_all_tags ?
                    'post_content' => $content,
                    'post_status' => 'publish',
                    'post_type' => 'page',  // post
                    'post_name' => $post_name,
                    'page_template' => $template
                );

                $page_id = wp_insert_post($new_page);
                $r = wp_set_post_categories($page_id, array(31));
                //error_log("Post $page_id has been assigned the 31 category" . $r);
        
                $page_url = get_permalink($page_id);        
            }
        }

        return $page_url;
    }

    /**
     * Stores computed data to check errors or enables users
     * to replay a previous prompt or reuse previous results
     */
    public function store_image($date, $i, $params, $raw) {

        $pn = $this->plugin_name;

        // It would be better to store data according to user/yyyy/mm/dd
        $filename = WP_PLUGIN_DIR . "/$pn/data/$date-$pn-ai-section$i";

        $filename_prompt = $filename . "-img-prompt.txt";
        $filename_result = $filename . "-img-result_json.txt";
        file_put_contents($filename_prompt, $params["prompt"]);
        file_put_contents($filename_result, $raw);

        return $raw;
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

       Veepdotai_Util::log('debug', $raw);

        return $raw;
    }

    /**
     * 
     */
    public function extract_create_current_page($post) {
        //echo "<p>Extracting data from the interview thanks to AI.</p>";
        $page = $this->improve($post);
        sleep(2);
        
        Veepdotai_Util::go_to_url($page_home);
    }

    /**
     * 
     */
    public function generate_all($post) {
        //echo "<p>Getting images extracted data.</p>";
        $page = $this->generate_images_from_prompts($post);

        //echo "<p>Generating home page from the extracted data.</p>";
        $page_home = $this->generate_page_from_template($post);

        //echo "<p>Generating pages, related to the home page, from the extracted data.</p>";
        $page = $this->generate_pages_from_section_informations($post);

        Veepdotai_Util::go_to_url($page_home);
    }

    /**
     * 
     */
    public function transform_generate_all($post) {
        //echo "<p>Extracting data from the interview thanks to AI.</p>";
        $page = $this->improve($post);
        sleep(2);

        //echo "<p>Getting images extracted data.</p>";
        $page = $this->generate_images_from_prompts($post);

        //echo "<p>Generating home page from the extracted data.</p>";
        $page_home = $this->generate_page_from_template($post);

        //echo "<p>Generating pages, related to the home page, from the extracted data.</p>";
        $page = $this->generate_pages_from_section_informations($post);

        Veepdotai_Util::go_to_url($page_home);
    }

    /**
     * 
     */
    public function generate_images_from_prompts($post) {
        //$this->save_configuration($post);
        $pn = $this->plugin_name;
        
        if ($this->security_check($post, $pn .'-main_admin_site')) {
            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];

            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                $prefix = 'ai-section' . $i . '-';

                // Open AI
                // Results with AI image generation are disappointed
                // $open_ai = new OpenAi($pexels_ai_key); 
                // $pexels_key = Veepdotai_Util::get_option('pexels-api-key');
                //$image = $this->create_image_with_ai($open_ai, $date, $prompt, $i);
                //$res = $this->update_option($prefix . 'img-href', $image->data[0]->url);

                // Pexels
                // Images are better. A search is done with the provided information.
                $prompt = Veepdotai_Util::get_option($prefix . 'img-prompt');
                $image = Veepdotai_Util::get_image($prompt);
                Veepdotai_Util::log('debug', "Image URL: " . $image . ".");
                $res = Veepdotai_Util::update_option($prefix . 'img-href', $image['media']); // $this->update_option ?

                $results[] = $res; // useless. @TODO Fix needed.
            }
        }
        return null;
    }

    /**
     * 
     */
    public function generate_page_from_template($post) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;
        
        if ($this->security_check($post, $pn .'-main_admin_site')) {
            $id = $post[$pn.'-lp-templates'];
            
            // Gets content from template choosen in the UI
            $initial_content = get_post($id)->post_content;
            //$initial_content2 = file_get_contents(plugin_dir_path(__FILE__) . '../data/template.html');

            $dom = new Dom;
            $dom->loadStr($initial_content,
                (new Options())
                ->setPreserveLineBreaks(true)
                ->setCleanupInput(true)
                ->setFixComments(true)
                ->setRemoveComments(false)
            );

            $sections = $dom->find('.veep_section');
            for ($i = 0; $i < count($sections); $i++) {
                $veep_title = Veepdotai_Util::get_option("ai-section$i-title");
                $veep_text = Veepdotai_Util::get_option("ai-section$i-text");
                $veep_img = Veepdotai_Util::get_option("ai-section$i-img-href");
                $veep_cta_href = Veepdotai_Util::get_option("ai-section$i-cta-href");
                $veep_cta_text = Veepdotai_Util::get_option("ai-section$i-cta-text");

                if ($veep_cta_href == "") {
                    // Compute post_name for future reference by welcome|landing page
                    $post_name = Veepdotai_Util::replace_special_chars($veep_cta_text);
                    $post_name = strtr($post_name, ["'" => "_", " " => "_"]);
                    $post_name = strtolower($post_name);
                    $veep_cta_href = $post_name;
                }

               Veepdotai_Util::log('debug', "Processing $i");
                try {
                    /**
                     * Syntax NOK :
                     *   $dom->find(".veep_section[$i] .veep_title")[0]->firstChild()->setText($veep_title);
                     */ 
                    $section = $dom->find('.veep_section')[$i];
                    $this->set_section_data($section, '.veep_title', $veep_title);
                    $this->set_section_data($section, '.veep_text', $veep_text);
                    $this->set_section_ahref($section, '.veep_cta a', $veep_cta_href, $veep_cta_text);
                    $this->set_section_image($section, 'img', $veep_img, $veep_title);
                } catch (\Exception $e) {
                   Veepdotai_Util::log('debug', "One of the value doesn't exist for the $i section.");
                   Veepdotai_Util::log('debug', "Exception: " . $e->getMessage() . "\n");
                }
            }

            //error_log('DOM: ' . $dom);
            $content = $dom->export();

            // Replace * by <span>\1</span>
            $content = preg_replace(
                '/(>[a-zA-Z\s]*)\*([a-zA-Z\s]*)\*/',
                "\\1<span>\\2</span>", $content);

           Veepdotai_Util::log('debug', $content);

            $new_page = array(
                'post_title' => Veepdotai_Util::get_option('ai-section0-title'),
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_name' => '',
                //'page_template' => $post[$pn .'-wp-templates']
            );
        }

        $page_id = wp_insert_post($new_page);
        $r = wp_set_post_categories($page_id, array(31));
        //error_log("Post $page_id has been assigned the 31 category" . $r);

        $page_url = get_permalink($page_id);

        return $page_url;
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