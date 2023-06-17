<?php

require_once  VEEPDOTAI_PLUGIN_DIR . '/admin/class-veepdotai-util.php';

/**
 * Fired during plugin activation
 *
 * @link       https://www.veep.ai
 * @since      1.0.0
 *
 * @package    Veepdotai
 * @subpackage Veepdotai/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Veepdotai
 * @subpackage Veepdotai/includes
 * @author     Jean-Christophe Kermagoret <jc@kermagoret.net>
 */
class Veepdotai_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		Veepdotai_Util::log('Activating Veepdotai plugin.');

		Veepdotai_Util::log('Prepare to configure roles and caps.');
		Veepdotai_Activator::create_roles_and_caps();
		Veepdotai_Activator::initialize_categories();
		//register_activation_hook( __FILE__, 'Veepdotai_Activator::create_roles_and_caps');
		//add_action('init', 'Veepdotai_Activator::create_roles_and_caps');
	}

	public static function create_roles_and_caps() {
		Veepdotai_Util::log('Configuring roles and caps 3.');

		Veepdotai_Util::log('Configuring Veepdotai_role_admin.');
		add_role(
			'veepdotai_role_admin',
			'Veepdotai Admin Role',
			array(
				'read'  => true,
				'veepdotai'  => true,
				'veepdotai_generate'  => true,
				'veepdotai_configure' => true,
				'veepdotai_interview' => true,
				'veepdotai_prompt'    => true,
			),
		);

		Veepdotai_Util::log('Configuring Veepdotai_role_user.');
		add_role(
			'veepdotai_role_user',
			'Veepdotai User Role',
			array(
				'read'  => true,
				'veepdotai'  => true,
				'veepdotai_generate'  => true,
				'veepdotai_interview' => true,
			),
		);

		Veepdotai_Util::log('Configuring Veepdotai_role_advanced.');
		add_role(
			'veepdotai_role_advanced',
			'Veepdotai Advanced Role',
			array(
				'read'  => true,
				'veepdotai'  => true,
				'veepdotai_generate'  => true,
				'veepdotai_interview' => true,
				'veepdotai_prompt'    => true,
			),
		);

		Veepdotai_Util::log('Configuring Veepdotai_role_agency.');
		add_role(
			'veepdotai_role_agency',
			'Veepdotai Agency Role',
			array(
				'read'  => true,
				'veepdotai'  => true,
				'veepdotai_generate'  => true,
				'veepdotai_configure' => true,
				'veepdotai_interview' => true,
				'veepdotai_prompt'    => true,
			),
		);
	}

	public static function initialize_categories() {
		$site_cat = category_exists('site');
		if ( ! $site_cat ) {
			$cat_defaults = array(
				'cat_ID'               => 0,
				'taxonomy'             => 'category',
				'cat_name'             => 'site',
				'category_description' => 'Web site',
				'category_nicename'    => 'Site',
				'category_parent'      => '0',
			);
			$site_cat = wp_insert_category($cat_defaults);
		}

		$blog_cat = category_exists('blog');
		if ( ! $blog_cat ) {
			$cat_defaults = array(
				'cat_ID'               => 0,
				'taxonomy'             => 'category',
				'cat_name'             => 'blog',
				'category_description' => 'Blog articles',
				'category_nicename'    => 'Blog',
				'category_parent'      => '0',
			);
			$blog_cat = wp_insert_category($cat_defaults);
		}

		$faq_cat = category_exists('faq');
		if ( ! $faq_cat ) {
			$cat_defaults = array(
				'cat_ID'               => 0,
				'taxonomy'             => 'category',
				'cat_name'             => 'faq',
				'category_description' => 'Frequently Asked Questions',
				'category_nicename'    => 'FAQ',
				'category_parent'      => $site_cat,
			);
			$faq_cat = wp_insert_category($cat_defaults);
		}

		$reviews_cat = category_exists('reviews');
		if ( ! $reviews_cat ) {
			$cat_defaults = array(
				'cat_ID'               => 0,
				'taxonomy'             => 'category',
				'cat_name'             => 'reviews',
				'category_description' => 'Customer reviews',
				'category_nicename'    => 'Customers reviews',
				'category_parent'      => $blog_cat,
			);
			$reviews_cat = wp_insert_category($cat_defaults);
		}

		$customers_cat = category_exists('customers');
		if ( ! $customers_cat ) {
			$cat_defaults = array(
				'cat_ID'               => 0,
				'taxonomy'             => 'category',
				'cat_name'             => 'stories',
				'category_description' => 'Customers stories',
				'category_nicename'    => 'Customers stories',
				'category_parent'      => $blog_cat,
			);
			$customers_cat = wp_insert_category($cat_defaults);
		}

	}

}
