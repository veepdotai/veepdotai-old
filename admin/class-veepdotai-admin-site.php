<?php

require_once "class-veepdotai-util.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

use Psr\Log\LoggerInterface;

use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Response\PhotosResponse;

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

        $post = array_map('stripslashes_deep', $_POST);
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

        if (isset($vp[$pn .'-ai-save'])) {
            //$this.save_configuration($post);
            $self->save_configuration($vp);
		} elseif (isset($vp[$pn .'-ai-generate-site'])) {
            $page_url = $self->generate_page_from_template($vp);

            if ($page_url) {
                echo '<script>window.location.replace("' . $page_url . '")</script>';
            }
        } elseif (isset($vp[$pn .'-ai-generate-images'])) {
            $page_url = $self->generate_images_from_prompts($vp);

            if ($page_url) {
                echo '<script>window.location.replace("' . $page_url . '")</script>';
            }
        } elseif (isset($vp[$pn .'-ai-generate-pages'])) {
            $page_url = $self->generate_pages_from_section_informations($vp);

            if ($page_url) {
                echo '<script>window.location.replace("' . $page_url . '")</script>';
            }
        }

        //generate the form
        ob_start();
        include( 'partials/main-admin-site.php' );
        $page_html = ob_get_contents();
        ob_end_clean();
        echo $page_html;
    }

    /**
     * 
     */
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
     * 
     */
    public function save_configuration($post) {
        $pn = $this->plugin_name;

        if($this->security_check($post, $pn .'-main_admin_site')) {
            for ($i = 0; $i < 6; $i++) {
                // Everything needs to be saved because all parts may have been updated
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-prompt');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-href');
                // img->alt = img->prompt or part of? or summarized?
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img-alt');

                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-title');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-text');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-text');
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-cta-href');
            }
            $selected_lp_template = isset($post[$pn .'-lp-templates']) ? $post[$pn .'-lp-templates'] : get_option($pn .'-lp-templates');
            $selected_generation = isset($post[$pn .'-generation']) ? $post[$pn .'-generation'] : get_option($pn .'-generation');
            //$selected_wp_template = isset($post[$pn .'-wp-templates']) ? $post[$pn .'-wp-templates'] : get_option($pn .'-wp-templates');
            //include_once(plugin_dir_path(__FILE__) . 'partials/veepdotai-shortcode.php');
        }

        return;
    }

    public function set_section_data($_section, $selector, $value) {
        $section = $_section;
        try {
            $section->find($selector)[0]->firstChild()->setText($value);
        } catch (e) {
            error_log("Error while getting first-child of $selector. Does it exist?");
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

            error_log("Image: " . $image);
        } catch (e) {
            error_log("Image : Error while getting first-child of $selector. Does it exist?");
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
            error_log("Error while getting first-child of $selector. Does it exist?");
            return $section;
        } finally {
            return $section;
        }
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
                $newcontent = get_option($pn ."-ai-section$i-page");
                if ($newcontent == "" || $reset) {
                    $section_field = "$pn-ai-section$i-text-interview";
                    Veepdotai_Util::log_direct("<h2>Processing section: " . $section_field . ".</h2>");

                    $prompt_pre = "Ecris à partir du contenu suivant un article de blog de 20 lignes "
                                . "avec un style journalistique et argumenté reprenant les idées principales du texte sans écrire ce que tu fais : ";
        
                    $content = get_option("$section_field");
                    $prompt = $prompt_pre . $content;

                    Veepdotai_Util::log_direct("<p class='prompt'>" . $prompt . ".</p>");

                    $open_ai_key = get_option($this->plugin_name.'_ai_api_key');
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
                    update_option($pn ."-ai-section$i-page", $newcontent);
                }

                // Compute post_name for future reference by welcome|landing page
                $cta_text = get_option($pn ."-ai-section$i-cta-text");
                $post_name = Veepdotai_Util::replace_special_chars($cta_text);
                $post_name = strtr($post_name, ["'" => "_", " " => "_"]);
                $post_name = strtolower($post_name);

                $template = $post[$pn .'-lp-templates'];
                error_log("post name for $i: " . $post_name);

                Veepdotai_Util::log_direct("<p class='post_name'>Post_name for this generation: " . $post_name . ".</p>");
                Veepdotai_Util::log_direct("<p class='template'>Template for this generation: " . $template . ".</p>");

                $image_href = get_option($pn ."-ai-section$i-img-href");
                $image_alt = get_option($pn ."-ai-section$i-img-prompt");

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
                    'post_title' => get_option($pn ."-ai-section$i-cta-text"), // Needs wp_strip_all_tags ?
                    'post_content' => $content,
                    'post_status' => 'publish',
                    'post_type' => 'page',  // post
                    'post_name' => $post_name,
                    'page_template' => $template
                );

                $page_id = wp_insert_post($new_page);
                $r = wp_set_post_categories($page_id, array(31));
                error_log("Post $page_id has been assigned the 31 category" . $r);
        
                $page_url = get_permalink($page_id);        
            }
        }

        return $page_url;
    }

        /**
     * 
     */
    public function get_image($i) {
        $pn = $this->plugin_name;

        // Gets an already computed data, for example: 20230509-135300
        $ts = get_option($pn . '_ai_site_ts');
        if ($ts) {
            $raw = file_get_contents(WP_PLUGIN_DIR
                    . "/$pn/data/$ts-$pn-ai-section$i-result.txt");
        } else {
            $raw = "";
        }

        return json_encode($raw);
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
    public function get_image_with_pexels($ts, $prompt, $i) {
        $pn = $this->plugin_name;

        $pexels_key = get_option($pn . '_pexels_api_key');
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
    public function generate_images_from_prompts($post) {
        $this->save_configuration($post);
        $pn = $this->plugin_name;
        
        if ($this->security_check($post, $pn .'-main_admin_site')) {
            $content_titles = ["Bénéfices", "Besoins", "Solutions", "Avantages concurrentiels"];

            // Process each prompt through the content of the corresponding field
            // input through voice during the interview ?
            // Or concat everything before providing the content to AI ?
            // Last method will be cheaper and more efficient

            $date = date("Ymd-His");
            for ($i = 0; $i < 4; $i++) {
                $prefix = $pn . '-ai-section' . $i . '-';

                // Open AI
                // Results with AI image generation are disappointed
                // $open_ai = new OpenAi($pexels_ai_key); 
                // $pexels_key = get_option($this->plugin_name . '_pexels_api_key');
                //$image = $this->create_image_with_ai($open_ai, $date, $prompt, $i);
                //$res = $this->update_option($prefix . 'img-href', $image->data[0]->url);

                // Pexels
                // Images are better. A search is done with the provided information.
                $prompt = get_option($prefix . 'img-prompt');
//                $prompt = "nature";
                $image = $this->get_image_with_pexels($date, $prompt, $i);
                error_log("Image URL: " . $image->getSrc()->getLarge() . ".");
                $res = update_option($prefix . 'img-href', $image->getSrc()->getLarge()); // $this->update_option ?

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
                $veep_title = get_option("$pn-ai-section$i-title");
                $veep_text = get_option("$pn-ai-section$i-text");
                $veep_img = get_option("$pn-ai-section$i-img-href");
                $veep_cta_href = get_option("$pn-ai-section$i-cta-href");
                $veep_cta_text = get_option("$pn-ai-section$i-cta-text");

                if ($veep_cta_href == "") {
                    // Compute post_name for future reference by welcome|landing page
                    $post_name = Veepdotai_Util::replace_special_chars($veep_cta_text);
                    $post_name = strtr($post_name, ["'" => "_", " " => "_"]);
                    $post_name = strtolower($post_name);
                    $veep_cta_href = $post_name;
                }

                error_log("Processing $i");
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
        $r = wp_set_post_categories($page_id, array(31));
        error_log("Post $page_id has been assigned the 31 category" . $r);

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