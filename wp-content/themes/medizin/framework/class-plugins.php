<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
if ( ! class_exists( 'Medizin_Register_Plugins' ) ) {
	class Medizin_Register_Plugins {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		function initialize() {
			add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
		}

		public function register_required_plugins( $plugins ) {
			/*
			 * Array of plugin arrays. Required keys are name and slug.
			 * If the source is NOT from the .org repo, then source is also required.
			 */
			$new_plugins = array(
				array(
					'name'     => esc_html__( 'Insight Core', 'medizin' ),
					'slug'     => 'insight-core',
					'source'   => $this->get_plugin_source_url( 'insight-core-2.2.1-MgA4cpZFCV.zip' ),
					'version'  => '2.2.1',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Elementor', 'medizin' ),
					'slug'     => 'elementor',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Elementor Pro', 'medizin' ),
					'slug'     => 'elementor-pro',
					'source'   => $this->get_plugin_source_url( 'elementor-pro-3.2.2-AXgjpzyGvn.zip' ),
					'version'  => '3.2.2',
					'required' => true,
				),
				array(
					'name'    => esc_html__( 'Revolution Slider', 'medizin' ),
					'slug'    => 'revslider',
					'source'  => $this->get_plugin_source_url( 'revslider-6.4.11-mJl1BiurFh.zip' ),
					'version' => '6.4.11',
				),
				array(
					'name' => esc_html__( 'Contact Form 7', 'medizin' ),
					'slug' => 'contact-form-7',
				),
				array(
					'name' => esc_html__( 'MailChimp for WordPress', 'medizin' ),
					'slug' => 'mailchimp-for-wp',
				),
				array(
					'name' => esc_html__( 'WooCommerce', 'medizin' ),
					'slug' => 'woocommerce',
				),
				array(
					'name'    => esc_html__( 'Insight Swatches', 'medizin' ),
					'slug'    => 'insight-swatches',
					'source'  => $this->get_plugin_source_url( 'insight-swatches-1.2.0-iHpasQeaMC.zip' ),
					'version' => '1.2.0',
				),
				array(
					'name'    => esc_html__( 'WooCommerce Brands Pro', 'medizin' ),
					'slug'    => 'woo-brand',
					'source'  => 'https://api.thememove.com/download/woo-brand-4.4.7-VvkVLwvYmP.zip',
					'version' => '4.4.7',
				),
				array(
					'name' => esc_html__( 'WPC Smart Compare for WooCommerce', 'medizin' ),
					'slug' => 'woo-smart-compare',
				),
				array(
					'name' => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'medizin' ),
					'slug' => 'woo-smart-wishlist',
				),
				array(
					'name' => esc_html__( 'WP-PostViews', 'medizin' ),
					'slug' => 'wp-postviews',
				),
				array(
					'name'    => esc_html__( 'Instagram Feed', 'medizin' ),
					'slug'    => 'elfsight-instagram-feed-cc',
					'source'  => $this->get_plugin_source_url( 'elfsight-instagram-feed-cc-4.0.2-dYYYZeP8Zo.zip' ),
					'version' => '4.0.2',
				),
			);

			$plugins = array_merge( $plugins, $new_plugins );

			return $plugins;
		}

		public function get_plugin_source_url( $file_name ) {
			return 'https://api.thememove.com/download/' . $file_name;
		}
	}

	Medizin_Register_Plugins::instance()->initialize();
}
