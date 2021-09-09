<?php
$section  = 'pages';
$priority = 1;
$prefix   = 'pages_';

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
	'settings'    => 'page_header_type',
	'label'       => esc_html__( 'Header Style', 'medizin' ),
	'description' => esc_html__( 'Select default header style that displays on all single pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Medizin_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'medizin' ) ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'page_header_overlay',
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
	'settings' => 'page_header_skin',
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
	'settings'    => 'page_title_bar_layout',
	'label'       => esc_html__( 'Title Bar Style', 'medizin' ),
	'description' => esc_html__( 'Select default Title Bar that displays on all single pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => Medizin_Title_Bar::instance()->get_list( true, esc_html__( 'Use Global Title Bar', 'medizin' ) ),
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
	'settings'    => 'page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on all pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on all pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'page_sidebar_position',
	'label'    => esc_html__( 'Sidebar Position', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'right',
	'choices'  => $sidebar_positions,
) );
