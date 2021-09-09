<?php
$section  = 'blog_archive';
$priority = 1;
$prefix   = 'blog_archive_';

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
	'settings'    => 'blog_archive_header_type',
	'label'       => esc_html__( 'Header Style', 'medizin' ),
	'description' => esc_html__( 'Select header style that displays on blog archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Medizin_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'medizin' ) ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_header_overlay',
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
	'settings' => 'blog_archive_header_skin',
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
	'settings'    => 'blog_archive_title_bar_layout',
	'label'       => esc_html__( 'Title Bar Style', 'medizin' ),
	'description' => esc_html__( 'Select default Title Bar that displays on archive blog pages.', 'medizin' ),
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
	'settings'    => 'blog_archive_page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on blog archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'blog_sidebar',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on blog archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_page_sidebar_position',
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
	'type'     => 'preset',
	'settings' => 'blog_archive_preset',
	'label'    => esc_html__( 'Blog Layout Preset', 'medizin' ),
	'section'  => $section,
	'default'  => '-1',
	'priority' => $priority++,
	'multiple' => 0,
	'choices'  => array(
		'-1'                      => array(
			'label'    => esc_html__( 'None', 'medizin' ),
			'settings' => array(),
		),
		'grid-left-sidebar'       => array(
			'label'    => esc_html__( 'Blog Grid - Left Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid',
				'blog_archive_page_sidebar_position' => 'left',
			),
		),
		'grid-no-sidebar'         => array(
			'label'    => esc_html__( 'Blog Grid - No Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'          => 'grid',
				'blog_archive_page_sidebar_1' => 'none',
			),
		),
		'grid-right-sidebar'      => array(
			'label'    => esc_html__( 'Blog Grid - Right Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid',
				'blog_archive_page_sidebar_position' => 'right',
			),
		),
		'grid-02-left-sidebar'    => array(
			'label'    => esc_html__( 'Blog Grid 02 - Left Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid',
				'blog_archive_caption_style'         => '02',
				'blog_archive_page_sidebar_position' => 'left',
			),
		),
		'grid-02-no-sidebar'      => array(
			'label'    => esc_html__( 'Blog Grid 02 - No Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'          => 'grid',
				'blog_archive_caption_style'  => '02',
				'blog_archive_page_sidebar_1' => 'none',
			),
		),
		'grid-02-right-sidebar'   => array(
			'label'    => esc_html__( 'Blog Grid 02 - Right Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid',
				'blog_archive_caption_style'         => '02',
				'blog_archive_page_sidebar_position' => 'right',
			),
		),
		'grid-wide-left-sidebar'  => array(
			'label'    => esc_html__( 'Blog Grid Wide - Left Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid-wide',
				'blog_archive_page_sidebar_position' => 'left',
			),
		),
		'grid-wide-no-sidebar'    => array(
			'label'    => esc_html__( 'Blog Grid Wide - No Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'          => 'grid-wide',
				'blog_archive_page_sidebar_1' => 'none',
			),
		),
		'grid-wide-right-sidebar' => array(
			'label'    => esc_html__( 'Blog Grid Wide - Right Sidebar', 'medizin' ),
			'settings' => array(
				'blog_archive_style'                 => 'grid-wide',
				'blog_archive_page_sidebar_position' => 'right',
			),
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_style',
	'label'       => esc_html__( 'Blog Style', 'medizin' ),
	'description' => esc_html__( 'Select blog style that display for archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'grid',
	'choices'     => array(
		'grid-wide' => esc_attr__( 'Grid Wide', 'medizin' ),
		'grid'      => esc_attr__( 'Grid', 'medizin' ),
		/*'list'      => esc_attr__( 'List', 'medizin' ),
		'classic'   => esc_attr__( 'Classic', 'medizin' ),*/
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'blog_archive_masonry',
	'label'    => esc_html__( 'Masonry', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '1',
	'choices'  => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'blog_archive_caption_style',
	'label'       => esc_html__( 'Blog Caption Style', 'medizin' ),
	'description' => esc_html__( 'Select blog caption style that display for archive pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '02',
	'choices'     => array(
		'01' => '01',
		'02' => '02',
	),
) );
