<?php
$section  = 'archive_portfolio';
$priority = 1;
$prefix   = 'archive_portfolio_';

$sidebar_positions   = Medizin_Helper::get_list_sidebar_positions();
$registered_sidebars = Medizin_Helper::get_registered_sidebars();

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'portfolio_archive_header_type',
	'label'       => esc_html__( 'Header Style', 'medizin' ),
	'description' => esc_html__( 'Select default header style that displays on archive portfolio page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Medizin_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'medizin' ) ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_archive_header_overlay',
	'label'    => esc_html__( 'Header Overlay', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '',
	'choices'  => array(
		''  => esc_html__( 'Use Global', 'medizin' ),
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_archive_header_skin',
	'label'    => esc_html__( 'Header Skin', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '',
	'choices'  => array(
		''      => esc_html__( 'Use Global', 'medizin' ),
		'dark'  => esc_html__( 'Dark', 'medizin' ),
		'light' => esc_html__( 'Light', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Page Title Bar', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'portfolio_archive_title_bar_layout',
	'label'       => esc_html__( 'Title Bar Style', 'medizin' ),
	'description' => esc_html__( 'Select default Title Bar that displays on all archive portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => Medizin_Title_Bar::instance()->get_list( true, esc_html__( 'Use Global Title Bar', 'medizin' ) ),
	'default'     => 'none',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Sidebar', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'portfolio_archive_page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on portfolio archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'portfolio_archive_page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on portfolio archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_archive_page_sidebar_position',
	'label'    => esc_html__( 'Sidebar Position', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'right',
	'choices'  => $sidebar_positions,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Others', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'number',
	'settings'    => 'archive_portfolio_posts_per_page',
	'label'       => esc_html__( 'Number posts', 'medizin' ),
	'description' => esc_html__( 'Controls the number of portfolios per page', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 12,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => $prefix . 'external_url',
	'label'       => esc_html__( 'External Url', 'medizin' ),
	'description' => esc_html__( 'Go to external url instead of go to single portfolio pages from archive portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '0',
	'choices'     => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );
