<?php
/**
 * Theme Customizer
 *
 * @package Medizin
 * @since   1.0
 */

/**
 * Setup configuration
 */
Medizin_Kirki::add_config( 'theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Add sections
 */
$priority = 1;

Medizin_Kirki::add_section( 'layout', array(
	'title'    => esc_html__( 'Site Layout & Background', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'color_', array(
	'title'    => esc_html__( 'Colors', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'typography', array(
	'title'    => esc_html__( 'Typography', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'top_bar', array(
	'title'    => esc_html__( 'Top bar', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'header', array(
	'title'    => esc_html__( 'Header', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'logo', array(
	'title'       => esc_html__( 'Logo', 'medizin' ),
	'description' => '<div class="desc">
			<strong class="insight-label insight-label-info">' . esc_html__( 'IMPORTANT NOTE: ', 'medizin' ) . '</strong>
			<p>' . esc_html__( 'These settings can be overridden by settings from Page Options Box in separator page.', 'medizin' ) . '</p>
			<p><img src="' . esc_url( MEDIZIN_THEME_IMAGE_URI . '/customize/logo-settings.jpg' ) . '" alt="' . esc_attr__( 'logo-settings', 'medizin' ) . '"/></p>
		</div>',
	'priority'    => $priority++,
) );

Medizin_Kirki::add_panel( 'navigation', array(
	'title'    => esc_html__( 'Navigation', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'title_bar', array(
	'title'    => esc_html__( 'Page Title Bar & Breadcrumb', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'sidebars', array(
	'title'    => esc_html__( 'Sidebars', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'footer', array(
	'title'    => esc_html__( 'Footer', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'pages', array(
	'title'    => esc_html__( 'Pages', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'blog', array(
	'title'    => esc_html__( 'Blog', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'portfolio', array(
	'title'    => esc_html__( 'Portfolio', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'shop', array(
	'title'    => esc_html__( 'Shop', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'socials', array(
	'title'    => esc_html__( 'Social Networks', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'social_sharing', array(
	'title'    => esc_html__( 'Social Sharing', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'search', array(
	'title'    => esc_html__( 'Search & Popup Search', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'error404_page', array(
	'title'    => esc_html__( 'Error 404 Page', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'shortcode', array(
	'title'    => esc_html__( 'Shortcodes', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'pre_loader', array(
	'title'    => esc_html__( 'Pre Loader', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_panel( 'advanced', array(
	'title'    => esc_html__( 'Advanced', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'notices', array(
	'title'    => esc_html__( 'Notices', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'settings_preset', array(
	'title'    => esc_html__( 'Preset', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'performance', array(
	'title'    => esc_html__( 'Performance', 'medizin' ),
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'custom_js', array(
	'title'    => esc_html__( 'Additional JS', 'medizin' ),
	'priority' => 200,
) );

/**
 * Load panel & section files
 */
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-color.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/general.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/style-01.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/style-02.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/style-03.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/top-bar/style-04.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/header/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/general.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/sticky.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/more-options.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-01.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-02.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-03.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-04.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-05.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-06.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/header/style-07.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/navigation/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/navigation/desktop-menu.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/navigation/off-canvas-menu.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/navigation/mobile-menu.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/general.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/style-01.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/style-02.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/style-03.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/title-bar/style-04.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-footer.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/advanced/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/advanced/advanced.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/advanced/light-gallery.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-notices.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-pre-loader.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-custom-js.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-error404.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-layout.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-logo.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-pages.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/blog/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/blog/archive.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/blog/single.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/portfolio/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/portfolio/archive.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/portfolio/single.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/shop/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/shop/general.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/shop/archive.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/shop/single.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/shop/cart.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/search/_panel.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/search/search-page.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/search/search-popup.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-preset.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-sharing.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-sidebars.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-socials.php';
require_once MEDIZIN_CUSTOMIZER_DIR . '/section-typography.php';

require_once MEDIZIN_CUSTOMIZER_DIR . '/section-performance.php';
