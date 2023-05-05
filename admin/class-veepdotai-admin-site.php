<?php

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

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
                $this->update_option_if_set($post, $pn, 'ai-section' . $i . '-img');
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
                $veep_image = get_option("$pn-ai-section$i-img");
                $veep_cta_href = get_option("$pn-ai-section$i-cta-href");
                $veep_cta_text = get_option("$pn-ai-section$i-cta-text");

                error_log("Processing $i");
                try {
                    /**
                     * Syntax NOK :
                     *   $dom->find(".veep_section[$i] .veep_title")[0]->firstChild()->setText($veep_title);
                     */ 
                    $section = $dom->find('.veep_section')[$i];
                    $this->set_section_data($section, '.veep_title', $veep_title);
                    $this->set_section_data($section, '.veep_text', $veep_text);
                    //set_section_data($section, '.veep_img', $veep_img);
                    $this->set_section_ahref($section, '.veep_cta a', $veep_cta_href, $veep_cta_text);
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