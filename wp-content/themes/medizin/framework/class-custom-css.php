<?php
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue custom styles.
 */
if ( ! class_exists( 'Medizin_Custom_Css' ) ) {
	class Medizin_Custom_Css {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function initialize() {
			add_action( 'wp_enqueue_scripts', array( $this, 'extra_css' ) );
		}

		/**
		 * Responsive styles.
		 *
		 * @access public
		 */
		public function extra_css() {
			$extra_style = '';

			$custom_logo_width        = Medizin_Helper::get_post_meta( 'custom_logo_width', '' );
			$custom_sticky_logo_width = Medizin_Helper::get_post_meta( 'custom_sticky_logo_width', '' );

			if ( $custom_logo_width !== '' ) {
				$extra_style .= ".branding__logo img { 
                    width: {$custom_logo_width} !important; 
                }";
			}

			if ( $custom_sticky_logo_width !== '' ) {
				$extra_style .= ".headroom--not-top .branding__logo .sticky-logo { 
                    width: {$custom_sticky_logo_width} !important; 
                }";
			}

			$site_width = Medizin_Helper::get_post_meta( 'site_width', '' );
			if ( $site_width === '' ) {
				$site_width = Medizin::setting( 'site_width' );
			}

			if ( $site_width !== '' ) {
				$extra_style .= "
				.boxed
				{
	                max-width: $site_width;
	            }";
			}

			$site_top_spacing = Medizin_Helper::get_post_meta( 'site_top_spacing', '' );

			if ( $site_top_spacing !== '' ) {
				$extra_style .= "
				.boxed
				{
	                margin-top: {$site_top_spacing};
	            }";
			}

			$site_bottom_spacing = Medizin_Helper::get_post_meta( 'site_bottom_spacing', '' );

			if ( $site_bottom_spacing !== '' ) {
				$extra_style .= "
				.boxed
				{
	                margin-bottom: {$site_bottom_spacing};
	            }";
			}

			$tmp = '';

			$site_background_color = Medizin_Helper::get_post_meta( 'site_background_color', '' );
			if ( $site_background_color !== '' ) {
				$tmp .= "background-color: $site_background_color !important;";
			}

			$site_background_image = Medizin_Helper::get_post_meta( 'site_background_image', '' );
			if ( $site_background_image !== '' ) {
				$site_background_repeat = Medizin_Helper::get_post_meta( 'site_background_repeat', '' );
				$tmp                    .= "background-image: url( $site_background_image ) !important; background-repeat: $site_background_repeat !important;";
			}

			$site_background_position = Medizin_Helper::get_post_meta( 'site_background_position', '' );
			if ( $site_background_position !== '' ) {
				$tmp .= "background-position: $site_background_position !important;";
			}

			$site_background_size = Medizin_Helper::get_post_meta( 'site_background_size', '' );
			if ( $site_background_size !== '' ) {
				$tmp .= "background-size: $site_background_size !important;";
			}

			$site_background_attachment = Medizin_Helper::get_post_meta( 'site_background_attachment', '' );
			if ( $site_background_attachment !== '' ) {
				$tmp .= "background-attachment: $site_background_attachment !important;";
			}

			if ( $tmp !== '' ) {
				$extra_style .= "body { $tmp; }";
			}

			$tmp = '';

			$content_background_color = Medizin_Helper::get_post_meta( 'content_background_color', '' );
			if ( $content_background_color !== '' ) {
				$tmp .= "background-color: $content_background_color !important;";
			}

			$content_background_image = Medizin_Helper::get_post_meta( 'content_background_image', '' );
			if ( $content_background_image !== '' ) {
				$content_background_repeat = Medizin_Helper::get_post_meta( 'content_background_repeat', '' );
				$tmp                       .= "background-image: url( $content_background_image ) !important; background-repeat: $content_background_repeat !important;";
			}

			$content_background_position = Medizin_Helper::get_post_meta( 'content_background_position', '' );
			if ( $content_background_position !== '' ) {
				$tmp .= "background-position: $content_background_position !important;";
			}

			if ( $tmp !== '' ) {
				$extra_style .= ".site { $tmp; }";
			}

			$extra_style .= $this->primary_color_css();
			$extra_style .= $this->secondary_color_css();
			$extra_style .= $this->header_css();
			$extra_style .= $this->sidebar_css();
			$extra_style .= $this->title_bar_css();
			$extra_style .= $this->light_gallery_css();
			$extra_style .= $this->off_canvas_menu_css();
			$extra_style .= $this->mobile_menu_css();

			$extra_style = Medizin_Minify::css( $extra_style );

			wp_add_inline_style( 'medizin-style', html_entity_decode( $extra_style, ENT_QUOTES ) );
		}

		function header_css() {
			$header_type = Medizin_Global::instance()->get_header_type();
			$css         = '';

			$nav_bg_type = Medizin::setting( "header_style_{$header_type}_navigation_background_type" );

			if ( $nav_bg_type === 'gradient' ) {

				$gradient = Medizin::setting( "header_style_{$header_type}_navigation_background_gradient" );
				$_color_1 = $gradient['from'];
				$_color_2 = $gradient['to'];

				$css .= "
				.header-$header_type .header-bottom {
					background: {$_color_1};
                    background: -webkit-linear-gradient(-136deg, {$_color_2} 0%, {$_color_1} 100%);
                    background: linear-gradient(-136deg, {$_color_2} 0%, {$_color_1} 100%);
				}";
			}

			return $css;
		}

		function sidebar_css() {
			$css = '';

			$page_sidebar1  = Medizin_Global::instance()->get_sidebar_1();
			$page_sidebar2  = Medizin_Global::instance()->get_sidebar_2();
			$sidebar_status = Medizin_Global::instance()->get_sidebar_status();

			if ( 'none' !== $page_sidebar1 ) {

				if ( $sidebar_status === 'both' ) {
					$sidebars_breakpoint = Medizin::setting( 'both_sidebar_breakpoint' );
				} else {
					$sidebars_breakpoint = Medizin::setting( 'one_sidebar_breakpoint' );
				}

				$sidebars_below = Medizin::setting( 'sidebars_below_content_mobile' );

				if ( 'none' !== $page_sidebar2 ) {
					$sidebar_width  = Medizin::setting( 'dual_sidebar_width' );
					$sidebar_offset = Medizin::setting( 'dual_sidebar_offset' );
					$content_width  = 100 - $sidebar_width * 2;
				} else {
					$sidebar_width  = Medizin::setting( 'single_sidebar_width' );
					$sidebar_offset = Medizin::setting( 'single_sidebar_offset' );

					if ( Medizin_Woo::instance()->is_product_archive() ) {
						$new_sidebar_width  = Medizin::setting( 'product_archive_single_sidebar_width' );
						$new_sidebar_offset = Medizin::setting( 'product_archive_single_sidebar_offset' );
					} elseif ( is_singular( 'product' ) ) {
						$new_sidebar_width  = Medizin::setting( 'product_page_single_sidebar_width' );
						$new_sidebar_offset = Medizin::setting( 'product_page_single_sidebar_offset' );
					}

					if ( ! empty( $new_sidebar_width ) ) {
						$sidebar_width = $new_sidebar_width;
					}

					if ( ! empty( $new_sidebar_offset ) ) {
						$sidebar_offset = $new_sidebar_offset;
					}

					$content_width = 100 - $sidebar_width;
				}

				$css .= "
				@media (min-width: {$sidebars_breakpoint}px) {
					.page-sidebar {
						flex: 0 0 $sidebar_width%;
						max-width: $sidebar_width%;
					}
					.page-main-content {
						flex: 0 0 $content_width%;
						max-width: $content_width%;
					}
				}";

				if ( is_rtl() ) {
					$css .= "@media (min-width: 1200px) {
						.page-sidebar-left .page-sidebar-inner {
							padding-left: $sidebar_offset;
						}
						.page-sidebar-right .page-sidebar-inner {
							padding-right: $sidebar_offset;
						}
					}";
				} else {
					$css .= "@media (min-width: 1200px) {
						.page-sidebar-left .page-sidebar-inner {
							padding-right: $sidebar_offset;
						}
						.page-sidebar-right .page-sidebar-inner {
							padding-left: $sidebar_offset;
						}
					}";
				}

				$_max_width_breakpoint = $sidebars_breakpoint - 1;

				if ( $sidebars_below === '1' ) {
					$css .= "
					@media (max-width: {$_max_width_breakpoint}px) {
						.page-sidebar {
							margin-top: 100px;
						}
					
						.page-main-content {
							-webkit-order: -1;
							-moz-order: -1;
							order: -1;
						}
					}";
				}
			}

			return $css;
		}

		function title_bar_css() {
			$css = $title_bar_tmp = $overlay_tmp = '';

			$type    = Medizin_Global::instance()->get_title_bar_type();
			$bg_type = Medizin::setting( "title_bar_{$type}_background_type" );

			if ( 'gradient' === $bg_type ) {
				$gradient_color = Medizin::setting( "title_bar_{$type}_background_gradient" );
				$color1         = $gradient_color['color_1'];
				$color2         = $gradient_color['color_2'];

				$css .= "
					.page-title-bar-bg
					{
						background-color: $color1;
						background-image: linear-gradient(-180deg, {$color1} 0%, {$color2} 100%);
					}
				";
			}

			$bg_color   = Medizin_Helper::get_post_meta( 'page_title_bar_background_color', '' );
			$bg_image   = Medizin_Helper::get_post_meta( 'page_title_bar_background', '' );
			$bg_overlay = Medizin_Helper::get_post_meta( 'page_title_bar_background_overlay', '' );

			if ( $bg_color !== '' ) {
				$title_bar_tmp .= "background-color: {$bg_color}!important;";
			}

			if ( '' !== $bg_image ) {
				$title_bar_tmp .= "background-image: url({$bg_image})!important;";
			}

			if ( '' !== $bg_overlay ) {
				$overlay_tmp .= "background-color: {$bg_overlay}!important;";
			}

			if ( '' !== $title_bar_tmp ) {
				$css .= ".page-title-bar-bg{ {$title_bar_tmp} }";
			}

			if ( '' !== $overlay_tmp ) {
				$css .= ".page-title-bar-bg:before{ {$overlay_tmp} }";
			}

			$bottom_spacing = Medizin_Helper::get_post_meta( 'page_title_bar_bottom_spacing', '' );
			if ( '' !== $bottom_spacing ) {
				$css .= "#page-title-bar{ margin-bottom: {$bottom_spacing}; }";
			}

			return $css;
		}

		function primary_color_css() {
			$color_selectors = "
				mark,
                .primary-color.primary-color,
                .title-has-link a:hover,
                .growl-close:hover,
                .link-transition-02,
                .switcher-language-wrapper .wpml-ls .wpml-ls-sub-menu a:hover,
                .header-categories-nav .product-category-dropdown > li:hover > a,
                .tm-button.style-border,
                .tm-button.style-thick-border,
                .tm-button.style-text:hover .button-text,
                .tm-button.style-text .button-icon,
				.medizin-infinite-loader,
				.elementor-widget-tm-icon-box.medizin-icon-box-style-01 .medizin-icon,
				.medizin-blog .post-title a:hover,
				.medizin-blog .post-categories a:hover,
				.medizin-blog-caption-style-03 .tm-button,
				.tm-portfolio .post-categories a:hover,
				.tm-portfolio .post-title a:hover,
				.medizin-pricing .price-wrap,
				.medizin-timeline.style-01 .title,
				.medizin-timeline.style-01 .timeline-dot,
				.tm-google-map .style-signal .animated-dot,
				.medizin-list .marker,
				.medizin-pricing-style-02 .medizin-pricing .medizin-pricing-features li i,
				.tm-social-networks .link:hover,
				.tm-social-networks.style-solid-rounded-icon .link,
				.medizin-modern-carousel-style-02 .slide-button,
				.tm-slider a:hover .heading,
				.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover,
				.woosw-continue:hover,
				.tm-menu .menu-price,
				.woocommerce-widget-layered-nav-list a:hover,
				.post-share a:hover,
				.blog-nav-links h6:before,
				.page-links > a:hover, .page-links > a:focus,
				.comment-nav-links li a:hover,
				.page-pagination li a:hover,
				.page-numbers li a:hover,
				.header-search-form .search-submit,
				.widget_search .search-submit:hover,
				.widget_product_search .search-submit:hover,
				.page-sidebar .widget_pages .current-menu-item > a,
				.page-sidebar .widget_nav_menu .current-menu-item > a,
				.page-sidebar .insight-core-bmw .current-menu-item > a,
				.widget_archive li a:hover .count,
				.widget_categories li a:hover .count,
				.widget_product_categories li a:hover .count,
				.medizin-wp-widget-posts .post-widget-title a:hover,
				.comment-list .comment-actions a:hover,
				.portfolio-nav-links.style-01 .inner > a:hover,
				.portfolio-nav-links.style-02 .nav-list .hover,
				.medizin-fake-select-wrap .medizin-fake-select li.selected:before,
				.elementor-widget-tm-icon-box.medizin-icon-box-style-01 .medizin-box:hover div.tm-button.style-text,
				.elementor-widget-tm-icon-box.medizin-icon-box-style-01 a.tm-button.style-text:hover,
				.tm-image-box.medizin-box:hover div.tm-button.style-text,
				.medizin-product-categories .product-cat-wrapper:hover .product-cat-name,
				.tm-image-box a.tm-button.style-text:hover";

			$bg_color_selectors = "
				.primary-background-color,
				.link-transition-02:after,
				input[type='checkbox']:checked:before,			
				.wp-block-tag-cloud a:hover,
				.wp-block-calendar #today,
				.medizin-fake-select-wrap .medizin-fake-select li:hover,
				.medizin-link-animate-border .heading-primary a mark:after,
				.medizin-team-member-style-01 .social-networks a:hover,
                .tm-button.style-flat:before,
                .tm-button.style-border:after,
                .tm-button.style-thick-border:after,
                .medizin-tab-nav-buttons button:hover,
                .medizin-blog-caption-style-03 .tm-button.style-bottom-line .button-content-wrapper:after,
                .medizin-blog .post-overlay-categories a,
                .hint--primary:after,
                [data-fp-section-skin='dark'] #fp-nav ul li a span,
                [data-fp-section-skin='dark'] .fp-slidesNav ul li a span,
                .page-scroll-up,
                .top-bar-01 .top-bar-button,
				.tm-social-networks.style-flat-rounded-icon .link:hover,
				.tm-swiper .swiper-pagination-progressbar .swiper-pagination-progressbar-fill,
				.tm-social-networks.style-flat-rounded-icon .link,
				.tm-social-networks.style-solid-rounded-icon .link:hover,
				.portfolio-overlay-group-01.portfolio-overlay-colored-faded .post-overlay,
				.medizin-modern-carousel .slide-tag,
				.medizin-light-gallery .medizin-box .medizin-overlay,
				.medizin-accordion-style-02 .medizin-accordion .accordion-section.active .accordion-header,
				.medizin-accordion-style-02 .medizin-accordion .accordion-section:hover .accordion-header,
				.medizin-mailchimp-form-style-01 .form-submit,
				.medizin-modern-carousel-style-02 .slide-button:after,
				.tm-gradation .item:hover .count,
				.nav-links a:hover,
				.page-links .current,
				.comment-nav-links li .current,
				.page-pagination li .current,
				.page-numbers li .current,
				.page-sidebar .insight-core-bmw li:hover a,
				.page-sidebar .insight-core-bmw li.current-menu-item a,
				.single-post .entry-post-feature.post-quote,
				.entry-post-categories a,
				.post-share.style-01 .share-icon,
				.entry-portfolio-feature .gallery-item .overlay,
				.widget .tagcloud a:hover,
				.widget_calendar #today,
				.woocommerce .select2-container--default .select2-results__option--highlighted[aria-selected],
				.select2-container--default .select2-results__option[aria-selected=true],
				.select2-container--default .select2-results__option[data-selected=true]
				";

			$bg_color_important_selectors = "
				.primary-background-color-important,
				.lg-progress-bar .lg-progress
				";

			$border_color_selectors = "
				input[type='checkbox']:hover:before,			
				.wp-block-quote,
				.wp-block-quote.has-text-align-right,
				.tm-button.style-border,
				.tm-button.style-thick-border,
				.medizin-tab-nav-buttons button:hover,
				.medizin-fake-select-wrap.focused .medizin-fake-select-current,
				.medizin-fake-select-wrap .medizin-fake-select-current:hover,
				.page-search-popup .search-field,
				.tm-social-networks.style-solid-rounded-icon .link,
				.tm-popup-video.type-button .video-play,
				.widget_pages .current-menu-item, 
				.widget_nav_menu .current-menu-item,
				.insight-core-bmw .current-menu-item,
				.page-sidebar .insight-core-bmw li:hover a,
				.page-sidebar .insight-core-bmw li.current-menu-item a
			";

			$border_color_important_selectors = "
				.single-product .woo-single-gallery .medizin-thumbs-swiper .swiper-slide:hover img,
				.single-product .woo-single-gallery .medizin-thumbs-swiper .swiper-slide-thumb-active img,
				.lg-outer .lg-thumb-item.active, .lg-outer .lg-thumb-item:hover
			";

			$border_top_color_selectors = "
				.hint--primary.hint--top-left:before,
                .hint--primary.hint--top-right:before,
                .hint--primary.hint--top:before
			";

			$border_right_color_selectors = "
				.hint--primary.hint--right:before
			";

			$border_bottom_color_selectors = "
				.hint--primary.hint--bottom-left:before,
                .hint--primary.hint--bottom-right:before,
                .hint--primary.hint--bottom:before,
                .medizin-tabpanel.medizin-tabpanel-horizontal > .medizin-nav-tabs li.active a
			";

			$border_left_color_selectors = "
				.hint--primary.hint--left:before,
                .tm-popup-video.type-button .video-play-icon:before
			";

			$primary_selectors = [
				'color'                      => [ $color_selectors ],
				'background-color'           => [ $bg_color_selectors ],
				'background-color-important' => [ $bg_color_important_selectors ],
				'border-color'               => [ $border_color_selectors ],
				'border-color-important'     => [ $border_color_important_selectors ],
				'border-top-color'           => [ $border_top_color_selectors ],
				'border-right-color'         => [ $border_right_color_selectors ],
				'border-bottom-color'        => [ $border_bottom_color_selectors ],
				'border-left-color'          => [ $border_left_color_selectors ],
			];

			$primary_selectors = apply_filters( 'medizin_custom_css_primary_color_selectors', $primary_selectors );

			$color            = Medizin::setting( 'primary_color' );
			$color_alpha_80   = Medizin_Color::hex2rgba( $color, '0.8' );
			$color_alpha_70   = Medizin_Color::hex2rgba( $color, '0.7' );
			$color_alpha_10   = Medizin_Color::hex2rgba( $color, '0.1' );
			$color_lighten_90 = Medizin_Color::luminance( $color, 0.9 );

			$css = "
				::-moz-selection { color: #fff; background-color: $color }
				::selection { color: #fff; background-color: $color }
			";

			foreach ( $primary_selectors as $key => $selectors ) {
				$css_selectors = implode( ',', $selectors );

				if ( ! empty( $css_selectors ) ) {
					$attr_name   = $key;
					$attr_suffix = '';

					if ( strpos( $key, 'important' ) !== false ) {
						$attr_name   = strstr( $key, '-important', true );
						$attr_suffix = '!important';
					}

					$css .= "{$css_selectors} { {$attr_name}: {$color}$attr_suffix; }";
				}
			}

			$css .= "
				.medizin-accordion-style-01 .medizin-accordion .accordion-section.active .accordion-header,
				.medizin-accordion-style-01 .medizin-accordion .accordion-section:hover .accordion-header
				{
					background-color: {$color_alpha_70};
				}";

			$css .= "
				.portfolio-overlay-group-01 .post-overlay
				{
					background-color: {$color_alpha_80};
				}";

			$css .= "
				.switcher-language-wrapper .wpml-ls .wpml-ls-sub-menu a:hover,
				.header-categories-nav .product-category-dropdown > li:hover > a
				{
					background-color: {$color_alpha_10};
				}";

			return $css;
		}

		function secondary_color_css() {
			$color          = Medizin::setting( 'secondary_color' );
			$color_alpha_60 = Medizin_Color::hex2rgba( $color, '0.6' );

			// Color.
			$css = "
				.secondary-color,
				.entry-product-brands a:hover,
				.medizin-product-banner .price,
				.medizin-product-banner ins,
				.medizin-product-banner ins .amount,
				.woocommerce-cart .cart-collaterals .order-total .amount,
				.woocommerce-checkout .shop_table .order-total .amount,
				.wooscp-table .price 
				.medizin-blog-zigzag .post-title
				{
					color: {$color} 
				}";

			// Background Color.
			$css .= "
				.tm-button.style-flat:after,
				.hint--secondary:after,
				.medizin-product.style-grid-01 .woocommerce_loop_add_to_cart_wrap a:hover,
				.medizin-product.style-grid-02 .woocommerce_loop_add_to_cart_wrap a:hover
				{
					background-color: {$color};
				}";

			// Background Color.
			$css .= "
				.medizin-event .event-overlay-background,
				.medizin-event-carousel .event-overlay-background
				{
					background-color: {$color_alpha_60};
				}";

			// Border Top.
			$css .= "
                .hint--secondary.hint--top-left:before,
                .hint--secondary.hint--top-right:before,
                .hint--secondary.hint--top:before
                {
					border-top-color: {$color};
				}";

			// Border Right.
			$css .= "
                .hint--secondary.hint--right:before
                {
					border-right-color: {$color};
				}";

			// Border Bottom.
			$css .= "
                .hint--secondary.hint--bottom-left:before,
                .hint--secondary.hint--bottom-right:before,
                .hint--secondary.hint--bottom:before
                {
					border-bottom-color: {$color};
				}";

			// Border Left.
			$css .= "
                .hint--secondary.hint--left:before
                {
                    border-left-color: {$color};
                }";

			return $css;
		}

		function light_gallery_css() {
			$css                    = '';
			$primary_color          = Medizin::setting( 'primary_color' );
			$secondary_color        = Medizin::setting( 'secondary_color' );
			$cutom_background_color = Medizin::setting( 'light_gallery_custom_background' );
			$background             = Medizin::setting( 'light_gallery_background' );

			$tmp = '';

			if ( $background === 'primary' ) {
				$tmp .= "background-color: {$primary_color} !important;";
			} elseif ( $background === 'secondary' ) {
				$tmp .= "background-color: {$secondary_color} !important;";
			} else {
				$tmp .= "background-color: {$cutom_background_color} !important;";
			}

			$css .= ".lg-backdrop { $tmp }";

			return $css;
		}

		function off_canvas_menu_css() {
			$css  = '';
			$type = Medizin::setting( 'navigation_minimal_01_background_type' );
			if ( $type === 'gradient' ) {
				$gradient = Medizin::setting( 'navigation_minimal_01_background_gradient_color' );

				$css .= ".popup-canvas-menu {
				    background-color: {$gradient['color_1']};
					background-image: linear-gradient(138deg, {$gradient['color_1']} 0%, {$gradient['color_2']} 100%);
				}";
			}

			return $css;
		}

		function mobile_menu_css() {
			$css  = '';
			$type = Medizin::setting( 'mobile_menu_background_type' );
			if ( $type === 'gradient' ) {
				$gradient = Medizin::setting( 'mobile_menu_background_gradient_color' );

				$css .= ".page-mobile-main-menu > .inner {
				    background-color: {$gradient['color_1']};
					background-image: linear-gradient(138deg, {$gradient['color_1']} 0%, {$gradient['color_2']} 100%);
				}";
			}

			return $css;
		}
	}

	Medizin_Custom_Css::instance()->initialize();
}
