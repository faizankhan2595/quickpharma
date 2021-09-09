<?php
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Medizin_Header' ) ) {

	class Medizin_Header {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function initialize() {

		}

		/**
		 * @return array List header types include id & name.
		 */
		public function get_type() {
			return array(
				'01' => esc_html__( 'Center Nav', 'medizin' ),
				'02' => esc_html__( 'Center Nav - No Shadow', 'medizin' ),
				'03' => esc_html__( 'Below Nav - Colored', 'medizin' ),
				'04' => esc_html__( 'Left Nav - No Shadow', 'medizin' ),
				'05' => esc_html__( 'Minimal', 'medizin' ),
				'06' => esc_html__( 'The Medical Kit', 'medizin' ),
				'07' => esc_html__( 'Right Nav', 'medizin' ),
			);
		}

		/**
		 * @param bool   $default_option Show or hide default select option.
		 * @param string $default_text   Custom text for default option.
		 *
		 * @return array A list of options for select field.
		 */
		public function get_list( $default_option = false, $default_text = '' ) {
			$headers = array(
				'none' => esc_html__( 'Hide', 'medizin' ),
			);

			$headers += $this->get_type();

			if ( $default_option === true ) {
				if ( $default_text === '' ) {
					$default_text = esc_html__( 'Default', 'medizin' );
				}

				$headers = array( '' => $default_text ) + $headers;
			}

			return $headers;
		}

		/**
		 * Get list of button style option for customizer.
		 *
		 * @return array
		 */
		public function get_button_style() {
			return array(
				'flat'         => esc_attr__( 'Flat', 'medizin' ),
				'border'       => esc_attr__( 'Border', 'medizin' ),
				'thick-border' => esc_attr__( 'Thick Border', 'medizin' ),
			);
		}

		public function get_button_kirki_output( $header_style, $header_skin, $hover = false ) {
			$prefix_selector = ".header-{$header_style}.header-{$header_skin} ";

			if ( $hover ) {
				$button_selector    = $prefix_selector . ".header-button:hover";
				$button_bg_selector = $prefix_selector . ".header-button:after";
			} else {
				$button_selector    = $prefix_selector . ".header-button";
				$button_bg_selector = $prefix_selector . ".header-button:before";
			}

			return array(
				array(
					'choice'   => 'color',
					'property' => 'color',
					'element'  => $button_selector,
				),
				array(
					'choice'   => 'border',
					'property' => 'border-color',
					'element'  => $button_selector,
				),
				array(
					'choice'   => 'background',
					'property' => 'background',
					'element'  => $button_bg_selector,
				),
			);
		}

		public function get_search_form_kirki_output( $header_style, $header_skin, $hover = false, $imporant = false ) {
			$prefix_selector = ".header-{$header_style}.header-{$header_skin} ";

			if ( $hover ) {
				$form_selector = $prefix_selector . '.search-field:focus';
			} else {
				$form_selector = $prefix_selector . '.search-field';
			}

			$default_args = [
				'element' => $form_selector,
			];

			if ( ! empty( $imporant ) ) {
				$default_args['suffix'] = '!important';
			}

			return array(
				array_merge( [
					'choice'   => 'color',
					'property' => 'color',
				], $default_args ),
				array_merge( [
					'choice'   => 'border',
					'property' => 'border-color',
				], $default_args ),
				array_merge( [
					'choice'   => 'background',
					'property' => 'background',
				], $default_args ),
			);
		}

		/**
		 * Add classes to the header.
		 *
		 * @var string $class Custom class.
		 */
		public function get_wrapper_class( $class = '' ) {
			$classes = array( 'page-header' );

			$header_type    = Medizin_Global::instance()->get_header_type();
			$header_overlay = Medizin_Global::instance()->get_header_overlay();
			$header_skin    = Medizin_Global::instance()->get_header_skin();

			$classes[] = "header-{$header_type}";

			if ( $header_overlay === '1' ) {
				$classes[] = 'header-layout-fixed';
			}

			if ( ! in_array( $header_type, array( '04' ), true ) ) {
				$classes[] = ' nav-links-hover-style-01';
			}

			$classes[] = "header-{$header_skin}";

			$_sticky_logo = Medizin::setting( "header_sticky_logo" );
			$classes[]    = " header-sticky-$_sticky_logo-logo";

			if ( ! empty( $class ) ) {
				if ( ! is_array( $class ) ) {
					$class = preg_split( '#\s+#', $class );
				}
				$classes = array_merge( $classes, $class );
			} else {
				// Ensure that we always coerce class to being an array.
				$class = array();
			}

			$classes = apply_filters( 'medizin_header_class', $classes, $class );

			echo 'class="' . esc_attr( join( ' ', $classes ) ) . '"';
		}

		/**
		 * Print WPML switcher html template.
		 *
		 * @var string $class Custom class.
		 */
		public function print_language_switcher() {
			$header_type = Medizin_Global::instance()->get_header_type();
			$enabled     = Medizin::setting( "header_style_{$header_type}_language_switcher_enable" );

			do_action( 'medizin_before_add_language_selector_header', $header_type, $enabled );

			if ( $enabled !== '1' || ! defined( 'ICL_SITEPRESS_VERSION' ) ) {
				return;
			}
			?>
			<div id="switcher-language-wrapper" class="switcher-language-wrapper">
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
			<?php
		}

		public function print_social_networks( $args = array() ) {
			$header_type   = Medizin_Global::instance()->get_header_type();
			$social_enable = Medizin::setting( "header_style_{$header_type}_social_networks_enable" );

			if ( '1' !== $social_enable ) {
				return;
			}

			$defaults = array(
				'style' => 'icons',
			);

			$args       = wp_parse_args( $args, $defaults );
			$el_classes = 'header-social-networks';

			if ( ! empty( $args['style'] ) ) {
				$el_classes .= " style-{$args['style']}";
			}
			?>
			<div class="<?php echo esc_attr( $el_classes ); ?>">
				<div class="inner">
					<?php
					$defaults = array(
						'tooltip_position' => 'bottom-left',
					);

					if ( 'light' === Medizin_Global::instance()->get_header_skin() ) {
						$defaults['tooltip_skin'] = 'white';
					}

					$args = wp_parse_args( $args, $defaults );

					Medizin_Templates::social_icons( $args );
					?>
				</div>
			</div>
			<?php
		}

		public function print_widgets() {
			$header_type = Medizin_Global::instance()->get_header_type();

			$enabled = Medizin::setting( "header_style_{$header_type}_widgets_enable" );
			if ( '1' === $enabled ) {
				?>
				<div class="header-widgets">
					<?php Medizin_Templates::generated_sidebar( 'header_widgets' ); ?>
				</div>
				<?php
			}
		}

		public function get_search_form() {
			$header_type     = Medizin_Global::instance()->get_header_type();
			$content_type    = Medizin::setting( 'search_page_filter' );
			$with_categories = Medizin::setting( "header_style_{$header_type}_search_categories_enable" );

			$form_class = 'search-form';

			if ( 'product' === $content_type ) {
				$form_class .= ' woocommerce-product-search';
			}

			if ( '1' === $with_categories ) {
				$form_class .= ' search-form-categories';
			}

			if ( 'product' === $content_type ) {
				$place_holder = _x( 'Search for items&hellip;', 'placeholder', 'medizin' );
			} else {
				$place_holder = esc_html__( 'Search&hellip;', 'medizin' );
			}
			?>
			<div class="header-search-form">
				<form role="search" method="get" class="<?php echo esc_attr( $form_class ); ?>"
				      action="<?php echo esc_url( home_url( '/' ) ); ?>">

					<?php
					if ( '1' === $with_categories ) {
						$args = array(
							'show_option_all' => esc_html__( 'Categories', 'medizin' ),
							'hierarchical'    => 1,
							'class'           => 'search-select',
							'echo'            => 1,
							'value_field'     => 'slug',
							'selected'        => 1,
						);

						$search_child_cats = apply_filters( 'medizin_header_form_search_child_cats', true );
						if ( ! $search_child_cats ) {
							$args['parent'] = 0;
						}

						$cat_query_var = 'category';

						if ( 'product' === $content_type ) {
							$args['taxonomy'] = 'product_cat';
							$args['name']     = 'product_cat';
							$cat_query_var    = 'product_cat';
						}

						$cat_query = get_query_var( $cat_query_var );
						$cat_query = esc_attr( $cat_query );

						if ( ! empty( $cat_query ) ) {
							$args['selected'] = $cat_query;
						}

						wp_dropdown_categories( $args );
					}
					?>
					<span
						class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'medizin' ); ?></span>
					<input type="search" class="search-field"
					       placeholder="<?php echo esc_attr( $place_holder ); ?>"
					       value="<?php echo get_search_query() ?>" name="s"
					       title="<?php echo esc_attr_x( 'Search for:', 'label', 'medizin' ); ?>"/>
					<button type="submit" class="search-submit">
						<span class="search-btn-icon far fa-search"></span>
						<span class="search-btn-text">
								<?php echo _x( 'Search', 'submit button', 'medizin' ); ?>
							</span>
					</button>
				</form>
			</div>
			<?php
		}

		public function print_search() {
			$header_type = Medizin_Global::instance()->get_header_type();
			$search      = Medizin::setting( "header_style_{$header_type}_search_enable" );

			if ( 'inline' === $search ) {
				$this->get_search_form();
			} elseif ( 'popup' === $search ) {
				?>
				<div id="page-open-popup-search" class="header-component header-icon page-open-popup-search">
					<i class="far fa-search"></i>
				</div>
				<?php
			}
		}

		public function print_login_button( $args = array() ) {
			$header_type  = Medizin_Global::instance()->get_header_type();
			$login_enable = Medizin::setting( "header_style_{$header_type}_login_enable" );

			// Do nothing if user option disabled.
			if ( '1' !== $login_enable ) {
				return;
			}

			// Do nothing if Woocommerce not active to show my account link.
			if ( is_user_logged_in() && ! Medizin_Woo::instance()->is_activated() ) {
				return;
			}

			// Default WP login.
			$login_url = wp_login_url();

			// Use Woocommerce login page.
			if ( Medizin_Woo::instance()->is_activated() ) {
				$login_url = wc_get_page_permalink( 'myaccount' );
			}

			$defaults = [
				'style' => 'normal',
			];

			$args = wp_parse_args( $args, $defaults );

			$link_classes = 'header-component header-icon header-login-link';
			$link_classes .= ' style-' . $args['style'];
			?>
			<a href="<?php echo esc_url( $login_url ) ?>"
			   class="<?php echo esc_attr( $link_classes ); ?>">
				<?php if ( 'svg' === $args['style'] ): ?>
					<?php echo \Medizin_Helper::get_file_contents( MEDIZIN_THEME_DIR . '/assets/svg/login.svg' ); ?>
				<?php else: ?>
					<i class="far fa-user"></i>
				<?php endif; ?>
			</a>
			<?php
		}

		public function print_wishlist_button( $args = array() ) {
			$default = [
				'style' => 'normal',
			];

			$args = wp_parse_args( $args, $default );

			$link_classes = 'header-component header-icon header-wishlist-link';

			$link_classes .= ' style-' . $args['style'];

			$header_type     = Medizin_Global::instance()->get_header_type();
			$wishlist_enable = Medizin::setting( "header_style_{$header_type}_wishlist_enable" );
			if ( '1' === $wishlist_enable && class_exists( 'WPCleverWoosw' ) ) {
				$wishlist_url = WPCleverWoosw::get_url();
				?>
				<a href="<?php echo esc_url( $wishlist_url ) ?>"
				   class="<?php echo esc_attr( $link_classes ); ?>">
					<?php if ( 'svg' === $args['style'] ): ?>
						<?php echo \Medizin_Helper::get_file_contents( MEDIZIN_THEME_DIR . '/assets/svg/heart.svg' ); ?>
					<?php else: ?>
						<i class="far fa-heart"></i>
					<?php endif; ?>
				</a>
				<?php
			}
		}

		public function print_button( $args = array() ) {
			$header_type = Medizin_Global::instance()->get_header_type();

			$button_style        = Medizin::setting( "header_style_{$header_type}_button_style" );
			$button_text         = Medizin::setting( "header_style_{$header_type}_button_text" );
			$button_link         = Medizin::setting( "header_style_{$header_type}_button_link" );
			$button_link_target  = Medizin::setting( "header_style_{$header_type}_button_link_target" );
			$button_link_rel     = Medizin::setting( "header_style_{$header_type}_button_link_rel" );
			$button_classes      = 'tm-button';
			$sticky_button_style = Medizin::setting( "header_sticky_button_style" );

			$icon_class = Medizin::setting( "header_style_{$header_type}_button_icon" );
			$icon_align = 'right';

			if ( $icon_class !== '' ) {
				$button_classes .= ' has-icon icon-right';
			}

			$defaults = array(
				'extra_class' => '',
				'style'       => '',
				'size'        => 'nm',
			);

			$args = wp_parse_args( $args, $defaults );

			if ( $args['extra_class'] !== '' ) {
				$button_classes .= " {$args['extra_class']}";
			}

			$header_button_classes = $button_classes . " tm-button-{$args['size']} header-button";
			$sticky_button_classes = $button_classes . ' tm-button-xs header-sticky-button';

			$header_button_classes .= " style-{$button_style}";
			$sticky_button_classes .= " style-{$sticky_button_style}";
			?>
			<?php if ( $button_link !== '' && $button_text !== '' ) : ?>

				<?php ob_start(); ?>

				<?php if ( $icon_class !== '' && $icon_align === 'right' ) { ?>
					<span class="button-icon">
						<i class="<?php echo esc_attr( $icon_class ); ?>"></i>
					</span>
				<?php } ?>

				<span class="button-text">
					<?php echo esc_html( $button_text ); ?>
				</span>

				<?php if ( $icon_class !== '' && $icon_align === 'right' ) { ?>
					<span class="button-icon">
						<i class="<?php echo esc_attr( $icon_class ); ?>"></i>
					</span>
				<?php } ?>

				<?php $button_content_html = ob_get_clean(); ?>

				<div class="header-buttons">
					<a class="<?php echo esc_attr( $header_button_classes ); ?>"
					   href="<?php echo esc_url( $button_link ); ?>"

						<?php if ( '1' === $button_link_target ) : ?>
							target="_blank"
						<?php endif; ?>

						<?php if ( ! empty ( $button_link_rel ) ) : ?>
							rel="<?php echo esc_attr( $button_link_rel ); ?>"
						<?php endif; ?>
					>
						<?php echo '' . $button_content_html; ?>
					</a>
					<a class="<?php echo esc_attr( $sticky_button_classes ); ?>"
					   href="<?php echo esc_url( $button_link ); ?>"

						<?php if ( '1' === $button_link_target ) : ?>
							target="_blank"
						<?php endif; ?>

						<?php if ( ! empty ( $button_link_rel ) ) : ?>
							rel="<?php echo esc_attr( $button_link_rel ); ?>"
						<?php endif; ?>
					>
						<?php echo '' . $button_content_html; ?>
					</a>
				</div>
			<?php endif;
		}

		public function print_open_mobile_menu_button( $args = array() ) {
			$defaults = [
				'style' => '01',
			];

			$args = wp_parse_args( $args, $defaults );

			$class = 'header-icon page-open-mobile-menu';
			$class .= ' style-' . $args['style'];
			?>
			<div id="page-open-mobile-menu" class="<?php echo esc_attr( $class ); ?>">
				<?php if ( '02' === $args['style'] ): ?>
					<div class="burger-icon">
						<span class="burger-icon-top"></span>
						<span class="burger-icon-middle"></span>
						<span class="burger-icon-bottom"></span>
					</div>
				<?php else: ?>
					<div class="burger-icon">
						<span class="burger-icon-top"></span>
						<span class="burger-icon-bottom"></span>
					</div>
				<?php endif; ?>
			</div>
			<?php
		}

		public function print_open_off_sidebar() {
			$enable = Medizin_Global::instance()->get_off_sidebar();

			if ( ! $enable ) {
				return;
			}
			?>
			<div id="page-open-off-sidebar" class="header-icon page-open-off-sidebar">
				<div class="inner">
					<div class="icon"><i></i></div>
				</div>
			</div>
			<?php
		}

		public function print_more_tools_button() {
			?>
			<div id="page-open-components" class="header-icon page-open-components">
				<div class="inner">
					<div class="circle circle-one"></div>
					<div class="circle circle-two"></div>
					<div class="circle circle-three"></div>
				</div>
			</div>
			<?php
		}

		public function print_open_canvas_menu_button( $args = array() ) {
			$defaults = array(
				'extra_class' => '',
				'style'       => '01',
			);
			$args     = wp_parse_args( $args, $defaults );

			$classes = "header-icon page-open-main-menu style-{$args['style']}";

			if ( ! empty( $args['extra_class'] ) ) {
				$classes .= " {$args['extra_class']}";
			}

			$title = Medizin::setting( 'navigation_minimal_01_menu_title' );
			?>
			<div id="page-open-main-menu" class="<?php echo esc_attr( $classes ); ?>">
				<div class="burger-icon">
					<span class="burger-icon-top"></span>
					<span class="burger-icon-bottom"></span>
				</div>

				<?php if ( ! empty( $title ) ) : ?>
					<div class="burger-title"><?php echo esc_html( $title ); ?></div>
				<?php endif; ?>
			</div>
			<?php
		}

		public function print_category_dropdown( $args = array() ) {
			$menu_class = 'product-category-dropdown menu__container sm sm-simple sm-vertical';

			if ( MEDIZIN_IS_RTL ) {
				$menu_class .= ' sm-rtl';
			}

			$defaults = array(
				'theme_location' => 'category-dropdown',
				'container'      => 'ul',
				'menu_class'     => $menu_class,
				'extra_class'    => '',
			);

			$args = wp_parse_args( $args, $defaults );

			if ( ! empty( $args['extra_class'] ) ) {
				$args['menu_class'] .= ' ' . $args['extra_class'];
			}

			if ( has_nav_menu( 'category-dropdown' ) && class_exists( 'Medizin_Walker_Nav_Menu' ) ) {
				$args['walker'] = new Medizin_Walker_Nav_Menu;
			}

			$toggle_text = esc_html__( 'Browse Categories', 'medizin' );
			?>
			<div class="header-categories-nav">
				<a href="#" class="nav-toggle-btn" id="nav-toggle-btn">
					<span class="nav-toggle-bars far fa-bars"></span>
					<?php echo esc_html( $toggle_text ); ?>
					<span class="nav-toggle-icon"></span>
				</a>
				<nav class="category-menu">
					<?php wp_nav_menu( $args ); ?>
				</nav>
			</div>

			<?php
		}

		public function print_phone_number() {
			$header_type       = Medizin_Global::instance()->get_header_type();
			$phone_number_text = Medizin::setting( "header_style_{$header_type}_phone_number_text" );
			$phone_number_link = Medizin::setting( "header_style_{$header_type}_phone_number_link" );
			?>
			<?php if ( ! empty( $phone_number_text ) && ! empty( $phone_number_link ) ): ?>
				<div class="header-phone-number">
					<span class="icon primary-color fas fa-phone"></span>
					<span class="label"><?php esc_html_e( 'Hotline:', 'medizin' ); ?></span>
					<a href="<?php echo esc_url( $phone_number_link ); ?>"
					   class="text"><?php echo esc_html( $phone_number_text ); ?></a>
				</div>
			<?php endif; ?>

			<?php
		}
	}

	Medizin_Header::instance()->initialize();
}
