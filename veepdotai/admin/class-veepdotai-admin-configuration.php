<?php

Class Veepdotai_Admin_Configuration {

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
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $post;

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

    /**
     * Checks parameters are correct from a security point of view
     *
     * @since  1.0.0
     */
    public function security_check($parameters, $var_name) {
		return true;
	}

    public function manageAction() {

        $self = $this;
        $pn = $this->plugin_name;
        $vp = $this->post;

        if (isset($vp[$pn .'-ai-save-api-key'])) {
            $self->saveConfiguration($vp);
        }

        //generate the form
        ob_start();
        include( 'partials/main-admin-configuration.php' );
        $page_html = ob_get_contents();
        ob_end_clean();
        echo $page_html;
    }

    /**
     * 
     */
    public function saveConfiguration($post) {

        $pn = $this->plugin_name;
        $vp = $this->post;

        if($this->security_check($vp, $pn .'-main_admin_menu')) {
            update_option($pn .'_ai_api_key', sanitize_text_field($vp[$pn.'-ai-api_key']));
        }

    }

}