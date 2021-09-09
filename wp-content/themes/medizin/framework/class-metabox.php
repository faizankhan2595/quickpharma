<?php
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Medizin_Metabox' ) ) {
	class Medizin_Metabox {

		protected static $instance = null;

		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function initialize() {
			add_filter( 'insight_core_meta_boxes', array( $this, 'register_meta_boxes' ) );
		}

		/**
		 * Register Metabox
		 *
		 * @param $meta_boxes
		 *
		 * @return array
		 */
		public function register_meta_boxes( $meta_boxes ) {
			$page_registered_sidebars = Medizin_Helper::get_registered_sidebars( true );

			$general_options = array(
				array(
					'title'  => esc_attr__( 'Layout', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'site_layout',
							'type'    => 'select',
							'title'   => esc_html__( 'Layout', 'medizin' ),
							'desc'    => esc_html__( 'Controls the layout of this page.', 'medizin' ),
							'options' => array(
								''      => esc_attr__( 'Default', 'medizin' ),
								'boxed' => esc_attr__( 'Boxed', 'medizin' ),
								'wide'  => esc_attr__( 'Wide', 'medizin' ),
							),
							'default' => '',
						),
						array(
							'id'    => 'site_width',
							'type'  => 'text',
							'title' => esc_html__( 'Site Width', 'medizin' ),
							'desc'  => esc_html__( 'Controls the site width for this page. Enter value including any valid CSS unit. For e.g: 1200px. Leave blank to use global setting.', 'medizin' ),
						),
						array(
							'id'    => 'site_top_spacing',
							'type'  => 'text',
							'title' => esc_html__( 'Site Top Spacing', 'medizin' ),
							'desc'  => esc_html__( 'Controls the top spacing of this page. Enter value including any valid CSS unit. For e.g: 50px. Leave blank to use global setting.', 'medizin' ),
						),
						array(
							'id'    => 'site_bottom_spacing',
							'type'  => 'text',
							'title' => esc_html__( 'Site Bottom Spacing', 'medizin' ),
							'desc'  => esc_html__( 'Controls the bottom spacing of this page. Enter value including any valid CSS unit. For e.g: 50px. Leave blank to use global setting.', 'medizin' ),
						),
						array(
							'id'    => 'site_class',
							'type'  => 'text',
							'title' => esc_html__( 'Body Class', 'medizin' ),
							'desc'  => esc_html__( 'Add a class name to body then refer to it in custom CSS.', 'medizin' ),
						),
					),
				),
				array(
					'title'  => esc_attr__( 'Background', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'site_background_message',
							'type'    => 'message',
							'title'   => esc_html__( 'Info', 'medizin' ),
							'message' => esc_html__( 'These options controls the background on boxed mode.', 'medizin' ),
						),
						array(
							'id'    => 'site_background_color',
							'type'  => 'color',
							'title' => esc_html__( 'Background Color', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background color of the outer background area in boxed mode of this page.', 'medizin' ),
						),
						array(
							'id'    => 'site_background_image',
							'type'  => 'media',
							'title' => esc_html__( 'Background Image', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background image of the outer background area in boxed mode of this page.', 'medizin' ),
						),
						array(
							'id'      => 'site_background_repeat',
							'type'    => 'select',
							'title'   => esc_html__( 'Background Repeat', 'medizin' ),
							'desc'    => esc_html__( 'Controls the background repeat of the outer background area in boxed mode of this page.', 'medizin' ),
							'options' => array(
								'no-repeat' => esc_attr__( 'No repeat', 'medizin' ),
								'repeat'    => esc_attr__( 'Repeat', 'medizin' ),
								'repeat-x'  => esc_attr__( 'Repeat X', 'medizin' ),
								'repeat-y'  => esc_attr__( 'Repeat Y', 'medizin' ),
							),
						),
						array(
							'id'      => 'site_background_attachment',
							'type'    => 'select',
							'title'   => esc_html__( 'Background Attachment', 'medizin' ),
							'desc'    => esc_html__( 'Controls the background attachment of the outer background area in boxed mode of this page.', 'medizin' ),
							'options' => array(
								''       => esc_attr__( 'Default', 'medizin' ),
								'fixed'  => esc_attr__( 'Fixed', 'medizin' ),
								'scroll' => esc_attr__( 'Scroll', 'medizin' ),
							),
						),
						array(
							'id'    => 'site_background_position',
							'type'  => 'text',
							'title' => esc_html__( 'Background Position', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background position of the outer background area in boxed mode of this page.', 'medizin' ),
						),
						array(
							'id'    => 'site_background_size',
							'type'  => 'text',
							'title' => esc_html__( 'Background Size', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background size of the outer background area in boxed mode of this page.', 'medizin' ),
						),
						array(
							'id'      => 'content_background_message',
							'type'    => 'message',
							'title'   => esc_html__( 'Info', 'medizin' ),
							'message' => esc_html__( 'These options controls the background of main content on this page.', 'medizin' ),
						),
						array(
							'id'    => 'content_background_color',
							'type'  => 'color',
							'title' => esc_html__( 'Background Color', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background color of main content on this page.', 'medizin' ),
						),
						array(
							'id'    => 'content_background_image',
							'type'  => 'media',
							'title' => esc_html__( 'Background Image', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background image of main content on this page.', 'medizin' ),
						),
						array(
							'id'      => 'content_background_repeat',
							'type'    => 'select',
							'title'   => esc_html__( 'Background Repeat', 'medizin' ),
							'desc'    => esc_html__( 'Controls the background repeat of main content on this page.', 'medizin' ),
							'options' => array(
								'no-repeat' => esc_attr__( 'No repeat', 'medizin' ),
								'repeat'    => esc_attr__( 'Repeat', 'medizin' ),
								'repeat-x'  => esc_attr__( 'Repeat X', 'medizin' ),
								'repeat-y'  => esc_attr__( 'Repeat Y', 'medizin' ),
							),
						),
						array(
							'id'    => 'content_background_position',
							'type'  => 'text',
							'title' => esc_html__( 'Background Position', 'medizin' ),
							'desc'  => esc_html__( 'Controls the background position of main content on this page.', 'medizin' ),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Header', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'top_bar_type',
							'type'    => 'select',
							'title'   => esc_html__( 'Top Bar Type', 'medizin' ),
							'desc'    => esc_html__( 'Select top bar type that displays on this page.', 'medizin' ),
							'default' => '',
							'options' => Medizin_Top_Bar::instance()->get_list( true ),
						),
						array(
							'id'      => 'header_type',
							'type'    => 'select',
							'title'   => esc_attr__( 'Header Type', 'medizin' ),
							'desc'    => wp_kses(
								sprintf(
									__( 'Select header type that displays on this page. When you choose Default, the value in %s will be used.', 'medizin' ),
									'<a href="' . admin_url( '/customize.php?autofocus[section]=header' ) . '">Customize</a>'
								), 'medizin-a' ),
							'default' => '',
							'options' => Medizin_Header::instance()->get_list( true ),
						),
						array(
							'id'      => 'header_overlay',
							'type'    => 'select',
							'title'   => esc_attr__( 'Header Overlay', 'medizin' ),
							'default' => '',
							'options' => array(
								''  => esc_html__( 'Default', 'medizin' ),
								'0' => esc_html__( 'No', 'medizin' ),
								'1' => esc_html__( 'Yes', 'medizin' ),
							),
						),
						array(
							'id'      => 'header_skin',
							'type'    => 'select',
							'title'   => esc_attr__( 'Header Skin', 'medizin' ),
							'default' => '',
							'options' => array(
								''      => esc_html__( 'Default', 'medizin' ),
								'dark'  => esc_html__( 'Dark', 'medizin' ),
								'light' => esc_html__( 'Light', 'medizin' ),
							),
						),
						array(
							'id'      => 'menu_display',
							'type'    => 'select',
							'title'   => esc_html__( 'Primary menu', 'medizin' ),
							'desc'    => esc_html__( 'Select which menu displays on this page.', 'medizin' ),
							'default' => '',
							'options' => Medizin_Nav_Menu::get_all_menus(),
						),
						array(
							'id'      => 'menu_one_page',
							'type'    => 'switch',
							'title'   => esc_attr__( 'One Page Menu', 'medizin' ),
							'default' => '0',
							'options' => array(
								'0' => esc_attr__( 'Disable', 'medizin' ),
								'1' => esc_attr__( 'Enable', 'medizin' ),
							),
						),
						array(
							'id'      => 'custom_dark_logo',
							'type'    => 'media',
							'title'   => esc_html__( 'Custom Dark Logo', 'medizin' ),
							'desc'    => esc_html__( 'Select custom dark logo for this page.', 'medizin' ),
							'default' => '',
						),
						array(
							'id'      => 'custom_light_logo',
							'type'    => 'media',
							'title'   => esc_html__( 'Custom Light Logo', 'medizin' ),
							'desc'    => esc_html__( 'Select custom light logo for this page.', 'medizin' ),
							'default' => '',
						),
						array(
							'id'      => 'custom_logo_width',
							'type'    => 'text',
							'title'   => esc_html__( 'Custom Logo Width', 'medizin' ),
							'desc'    => esc_html__( 'Controls the width of logo. For e.g: 150px', 'medizin' ),
							'default' => '',
						),
						array(
							'id'      => 'custom_sticky_logo_width',
							'type'    => 'text',
							'title'   => esc_html__( 'Custom Sticky Logo Width', 'medizin' ),
							'desc'    => esc_html__( 'Controls the width of sticky logo. For e.g: 150px', 'medizin' ),
							'default' => '',
						),
					),
				),
				array(
					'title'  => esc_html__( 'Page Title Bar', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'page_title_bar_layout',
							'type'    => 'select',
							'title'   => esc_html__( 'Layout', 'medizin' ),
							'default' => '',
							'options' => Medizin_Title_Bar::instance()->get_list( true ),
						),
						array(
							'id'    => 'page_title_bar_bottom_spacing',
							'type'  => 'text',
							'title' => esc_html__( 'Spacing', 'medizin' ),
							'desc'  => esc_html__( 'Controls the bottom spacing of title bar of this page. Enter value including any valid CSS unit. For e.g: 50px. Leave blank to use global setting.', 'medizin' ),
						),
						array(
							'id'      => 'page_title_bar_background_color',
							'type'    => 'color',
							'title'   => esc_html__( 'Background Color', 'medizin' ),
							'default' => '',
						),
						array(
							'id'      => 'page_title_bar_background',
							'type'    => 'media',
							'title'   => esc_html__( 'Background Image', 'medizin' ),
							'default' => '',
						),
						array(
							'id'      => 'page_title_bar_background_overlay',
							'type'    => 'color',
							'title'   => esc_html__( 'Background Overlay', 'medizin' ),
							'default' => '',
						),
						array(
							'id'    => 'page_title_bar_custom_heading',
							'type'  => 'text',
							'title' => esc_html__( 'Custom Heading Text', 'medizin' ),
							'desc'  => esc_html__( 'Insert custom heading for the page title bar. Leave blank to use default.', 'medizin' ),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Sidebars', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'page_sidebar_1',
							'type'    => 'select',
							'title'   => esc_html__( 'Sidebar 1', 'medizin' ),
							'desc'    => esc_html__( 'Select sidebar 1 that will display on this page.', 'medizin' ),
							'default' => 'default',
							'options' => $page_registered_sidebars,
						),
						array(
							'id'      => 'page_sidebar_2',
							'type'    => 'select',
							'title'   => esc_html__( 'Sidebar 2', 'medizin' ),
							'desc'    => esc_html__( 'Select sidebar 2 that will display on this page.', 'medizin' ),
							'default' => 'default',
							'options' => $page_registered_sidebars,
						),
						array(
							'id'      => 'page_sidebar_position',
							'type'    => 'switch',
							'title'   => esc_html__( 'Sidebar Position', 'medizin' ),
							'desc'    => wp_kses(
								sprintf(
									__( 'Select position of Sidebar 1 for this page. If sidebar 2 is selected, it will display on the opposite side. If you set as "Default" then the value in %s will be used.', 'medizin' ),
									'<a href="' . admin_url( '/customize.php?autofocus[section]=sidebars' ) . '">Customize -> Sidebar</a>'
								), 'medizin-a' ),
							'default' => 'default',
							'options' => Medizin_Helper::get_list_sidebar_positions( true ),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Sliders', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'revolution_slider',
							'type'    => 'select',
							'title'   => esc_html__( 'Revolution Slider', 'medizin' ),
							'desc'    => esc_html__( 'Select the unique name of the slider.', 'medizin' ),
							'options' => Medizin_Helper::get_list_revslider(),
						),
						array(
							'id'      => 'slider_position',
							'type'    => 'select',
							'title'   => esc_html__( 'Slider Position', 'medizin' ),
							'default' => 'below',
							'options' => array(
								'above' => esc_attr__( 'Above Header', 'medizin' ),
								'below' => esc_attr__( 'Below Header', 'medizin' ),
							),
						),
					),
				),
				array(
					'title'  => esc_html__( 'Footer', 'medizin' ),
					'fields' => array(
						array(
							'id'      => 'footer_enable',
							'type'    => 'select',
							'title'   => esc_html__( 'Footer Enable', 'medizin' ),
							'default' => '',
							'options' => array(
								''     => esc_html__( 'Yes', 'medizin' ),
								'none' => esc_html__( 'No', 'medizin' ),
							),
						),
					),
				),
			);

			// Page
			$meta_boxes[] = array(
				'id'         => 'insight_page_options',
				'title'      => esc_html__( 'Page Options', 'medizin' ),
				'post_types' => array( 'page' ),
				'context'    => 'normal',
				'priority'   => 'high',
				'fields'     => array(
					array(
						'type'  => 'tabpanel',
						'items' => $general_options,
					),
				),
			);

			// Post
			$meta_boxes[] = array(
				'id'         => 'insight_post_options',
				'title'      => esc_html__( 'Page Options', 'medizin' ),
				'post_types' => array( 'post' ),
				'context'    => 'normal',
				'priority'   => 'high',
				'fields'     => array(
					array(
						'type'  => 'tabpanel',
						'items' => array_merge( array(
							array(
								'title'  => esc_html__( 'Post', 'medizin' ),
								'fields' => array(
									array(
										'id'    => 'post_gallery',
										'type'  => 'gallery',
										'title' => esc_html__( 'Gallery Format', 'medizin' ),
									),
									array(
										'id'    => 'post_video',
										'type'  => 'text',
										'title' => esc_html__( 'Video URL', 'medizin' ),
										'desc'  => esc_html__( 'Input the url of video vimeo or youtube. For e.g: https://www.youtube.com/watch?v=9No-FiEInLA', 'medizin' ),
									),
									array(
										'id'    => 'post_audio',
										'type'  => 'textarea',
										'title' => esc_html__( 'Audio Format', 'medizin' ),
									),
									array(
										'id'    => 'post_quote_text',
										'type'  => 'text',
										'title' => esc_html__( 'Quote Format - Source Text', 'medizin' ),
									),
									array(
										'id'    => 'post_quote_name',
										'type'  => 'text',
										'title' => esc_html__( 'Quote Format - Source Name', 'medizin' ),
									),
									array(
										'id'    => 'post_quote_url',
										'type'  => 'text',
										'title' => esc_html__( 'Quote Format - Source Url', 'medizin' ),
									),
									array(
										'id'    => 'post_link',
										'type'  => 'text',
										'title' => esc_html__( 'Link Format', 'medizin' ),
									),
								),
							),
						), $general_options ),
					),
				),
			);

			// Product
			$meta_boxes[] = array(
				'id'         => 'insight_product_options',
				'title'      => esc_html__( 'Page Options', 'medizin' ),
				'post_types' => array( 'product' ),
				'context'    => 'normal',
				'priority'   => 'high',
				'fields'     => array(
					array(
						'type'  => 'tabpanel',
						'items' => array_merge( array(
							array(
								'title'  => esc_html__( 'Product', 'medizin' ),
								'fields' => array(
									array(
										'id'      => 'single_product_layout_style',
										'type'    => 'select',
										'title'   => esc_html__( 'Single Product Style', 'medizin' ),
										'desc'    => esc_html__( 'Select style of this single product page.', 'medizin' ),
										'default' => '',
										'options' => array(
											''       => esc_html__( 'Default', 'medizin' ),
											'list'   => esc_html__( 'List', 'medizin' ),
											'slider' => esc_html__( 'Slider', 'medizin' ),
										),
									),
								),
							),
						), $general_options ),
					),
				),
			);

			// Portfolio
			$meta_boxes[] = array(
				'id'         => 'insight_portfolio_options',
				'title'      => esc_html__( 'Page Options', 'medizin' ),
				'post_types' => array( 'portfolio' ),
				'context'    => 'normal',
				'priority'   => 'high',
				'fields'     => array(
					array(
						'type'  => 'tabpanel',
						'items' => array_merge( array(
							array(
								'title'  => esc_html__( 'Portfolio', 'medizin' ),
								'fields' => array(
									array(
										'id'      => 'portfolio_site_skin',
										'type'    => 'select',
										'title'   => esc_html__( 'Site Skin', 'medizin' ),
										'desc'    => esc_html__( 'Select skin of this single portfolio page.', 'medizin' ),
										'default' => '',
										'options' => array(
											''      => esc_html__( 'Default', 'medizin' ),
											'dark'  => esc_html__( 'Dark', 'medizin' ),
											'light' => esc_html__( 'Light', 'medizin' ),
										),
									),
									array(
										'id'      => 'portfolio_layout_style',
										'type'    => 'select',
										'title'   => esc_html__( 'Single Portfolio Style', 'medizin' ),
										'desc'    => esc_html__( 'Select style of this single portfolio page.', 'medizin' ),
										'default' => '',
										'options' => array(
											''                => esc_html__( 'Default', 'medizin' ),
											'blank'           => esc_html__( 'Blank (Build with Elementor)', 'medizin' ),
											'image-list'      => esc_html__( 'Image List', 'medizin' ),
											'image-list-wide' => esc_html__( 'Image List - Wide', 'medizin' ),
										),
									),
									array(
										'id'      => 'portfolio_pagination_style',
										'type'    => 'select',
										'title'   => esc_html__( 'Pagination Style', 'medizin' ),
										'desc'    => esc_html__( 'Select style of pagination for this single portfolio page.', 'medizin' ),
										'default' => '',
										'options' => array(
											''     => esc_html__( 'Default', 'medizin' ),
											'none' => esc_html__( 'None', 'medizin' ),
											'01'   => esc_html__( '01', 'medizin' ),
											'02'   => esc_html__( '02', 'medizin' ),
											'03'   => esc_html__( '03', 'medizin' ),
										),
									),
									array(
										'id'    => 'portfolio_gallery',
										'type'  => 'gallery',
										'title' => esc_html__( 'Gallery', 'medizin' ),
									),
									array(
										'id'    => 'portfolio_video_url',
										'type'  => 'text',
										'title' => esc_html__( 'Video URL', 'medizin' ),
										'desc'  => esc_html__( 'Input the url of video vimeo or youtube. For e.g: https://www.youtube.com/watch?v=9No-FiEInLA', 'medizin' ),
									),
									array(
										'id'    => 'portfolio_client',
										'type'  => 'text',
										'title' => esc_html__( 'Client', 'medizin' ),
									),
									array(
										'id'    => 'portfolio_date',
										'type'  => 'text',
										'title' => esc_html__( 'Date', 'medizin' ),
									),
									array(
										'id'    => 'portfolio_url',
										'type'  => 'text',
										'title' => esc_html__( 'Url', 'medizin' ),
									),
									array(
										'id'      => 'portfolio_overlay_colored_faded_message',
										'type'    => 'message',
										'title'   => esc_html__( 'Info', 'medizin' ),
										'message' => esc_html__( 'These settings for Overlay Colored Faded Style.', 'medizin' ),
									),
									array(
										'id'    => 'portfolio_overlay_colored_faded_background',
										'type'  => 'color',
										'title' => esc_html__( 'Background Color', 'medizin' ),
										'desc'  => esc_html__( 'Controls the background color of overlay colored faded style.', 'medizin' ),
									),
									array(
										'id'      => 'portfolio_overlay_colored_faded_text_skin',
										'type'    => 'select',
										'title'   => esc_html__( 'Text Skin', 'medizin' ),
										'desc'    => esc_html__( 'Controls the text skin of overlay colored faded style.', 'medizin' ),
										'default' => 'light',
										'options' => array(
											'dark'  => esc_html__( 'Dark', 'medizin' ),
											'light' => esc_html__( 'Light', 'medizin' ),
										),
									),
								),
							),
						), $general_options ),
					),
				),
			);

			return $meta_boxes;
		}

	}

	Medizin_Metabox::instance()->initialize();
}
