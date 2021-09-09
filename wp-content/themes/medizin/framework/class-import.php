<?php
defined( 'ABSPATH' ) || exit;

/**
 * Initial OneClick import for this theme
 */
if ( ! class_exists( 'Medizin_Import' ) ) {
	class Medizin_Import {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function initialize() {
			add_filter( 'insight_core_import_demos', array( $this, 'import_demos' ) );
			add_filter( 'insight_core_import_generate_thumb', array( $this, 'generate_thumbnail' ) );
		}

		public function import_demos() {
			$import_img_url = MEDIZIN_THEME_URI . '/assets/import';

			return array(
				'main' => array(
					'screenshot' => MEDIZIN_THEME_URI . '/screenshot.jpg',
					'name'       => esc_html__( 'Main', 'medizin' ),
					'url'        => 'https://api.thememove.com/import/medizin/medizin-insightcore-main-1.2.7.zip',
				),
			);
		}

		/**
		 * Generate thumbnail while importing
		 */
		function generate_thumbnail() {
			return false;
		}
	}

	Medizin_Import::instance()->initialize();
}
