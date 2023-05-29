<?php
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

        $post = $_POST;
        $veep_post = array_intersect_key($post, array_flip(preg_grep('/^'. $this->plugin_name .'/', array_keys($post))));

		$this->load_dependencies();
	}

	private function load_dependencies() {
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-veep-loader.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-configuration.php';
		//require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-menu.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-interview.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-prompts.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-site.php';
		require plugin_dir_path( __FILE__ ) . './class-veepdotai-admin-about.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'css/veepdotai-admin.css',
            array(),
            $this->version,
            'all'
        );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'js/veepdotai-admin.js',
            array( 'jquery' ),
            $this->version,
            false
        );
	}

    /**
     * Add the main admin menus
     *
     * @since  1.0.0
     */
    public function main_admin_menu() {
        add_menu_page(
            'Veepdotai Admin',
            'Veepdotai',
            'veepdotai',
            $this->plugin_name,
            array($this, 'main_admin_menu_callback'),
            plugin_dir_url( __FILE__ ) .'images/veep.ai-white-bg-icon.png'
        );

        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name ),
            __( 'Configuration', $this->plugin_name ),
            'veepdotai_configure',
            $this->plugin_name.'-veepdotai-configuration-site',
            array($this, 'main_admin_submenu_configuration_callback')
        );

        /*
        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name  ),
            __( 'Menu', $this->plugin_name  ),
            'veepdotai_menu',
            $this->plugin_name.'-veepdotai-menu-logo',
            array($this, 'main_admin_submenu_menu_callback')
        );
        */

        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name  ),
            __( 'Interview', $this->plugin_name  ),
            'veepdotai_interview',
            $this->plugin_name.'-veepdotai-menu-interview',
            array($this, 'main_admin_submenu_interview_callback')
        );

        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name  ),
            __( 'Prompts', $this->plugin_name  ),
            'veepdotai_prompt',
            $this->plugin_name.'-veepdotai-menu-prompts',
            array($this, 'main_admin_submenu_prompts_callback')
        );

        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name ),
            __( 'Site', $this->plugin_name ),
            'veepdotai_generate',
            $this->plugin_name.'-veepdotai-menu-site',
            array($this, 'main_admin_submenu_site_callback')
        );

        add_submenu_page(
            $this->plugin_name,
            __( 'Veepdotai', $this->plugin_name ),
            __( 'About', $this->plugin_name ),
            'veepdotai',
            $this->plugin_name.'-veepdotai-menu-about',
            array($this, 'main_admin_submenu_about_callback')
        );

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
    public function main_admin_submenu_configuration_callback() {
        (new Veepdotai_Admin_Configuration( $this->plugin_name, $this->version ))->manage_action();
    }

    /**
     * Render the main admin menu and save data to the db
     *
     * @since  1.0.0
     */
    public function main_admin_submenu_interview_callback() {
        (new Veepdotai_Admin_Interview( $this->plugin_name, $this->version ))->manage_action();
    }

	/**
     * Render the main admin menu and save data to the db
     *
     * @since  1.0.0
     */
    public function main_admin_submenu_menu_callback() {
        (new Veepdotai_Admin_Menu( $this->plugin_name, $this->version ))->manage_action();
    }

    /**
     * Render the main prompts form and save data to the db
     *
     * @since  1.0.0
     */
	public function main_admin_submenu_prompts_callback() {
        (new Veepdotai_Admin_Prompts( $this->plugin_name, $this->version ))->manage_action();
    }

	/**
     * Render the main admin site and save data to the db
     *
     * @since  1.0.0
     */
	public function main_admin_submenu_site_callback() {
        (new Veepdotai_Admin_Site( $this->plugin_name, $this->version ))->manage_action();
    }

    /**
     * Render the main admin site and save data to the db
     *
     * @since  1.0.0
     */
	public function main_admin_submenu_about_callback() {
        (new Veepdotai_Admin_About( $this->plugin_name, $this->version ))->manage_action();
    }

	public function var_error_log( $object=null ){
		ob_start();                    // start buffer capture
		var_dump( $object );           // dump the values
		$contents = ob_get_contents(); // put the buffer into a variable
		ob_end_clean();                // end capture
		error_log( $contents );        // log contents of the result of var_dump( $object )
	}
	 
}
