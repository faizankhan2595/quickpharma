<?php
defined( 'ABSPATH' ) || exit;

/**
 * Theme Hook Alliance hook stub list.
 */

if ( ! class_exists( 'Medizin_THA' ) ) {

	class Medizin_THA {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		function head_top() {
			do_action( 'medizin/head-top' );
		}

		function head_bottom() {
			do_action( 'medizin/head-bottom' );
		}

		function header_wrap_top() {
			do_action( 'medizin/header-wrap-top' );
		}

		function header_wrap_bottom() {
			do_action( 'medizin/header-wrap-bottom' );
		}

		function header_right_top() {
			do_action( 'medizin/header-right-top' );
		}

		function header_right_bottom() {
			do_action( 'medizin/header-right-bottom' );
		}

		function footer_before() {
			do_action( 'medizin/footer-before' );
		}

		function footer_after() {
			do_action( 'medizin/footer-after' );
		}

		function title_bar_heading_before() {
			do_action( 'medizin/title-bar-heading-before' );
		}

		function title_bar_heading_after() {
			do_action( 'medizin/title-bar-heading-after' );
		}

		function title_bar_meta() {
			do_action( 'medizin/title-bar-meta' );
		}
	}

}
