<?php
$section  = 'single_portfolio';
$priority = 1;
$prefix   = 'single_portfolio_';

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
	'settings'    => 'portfolio_single_header_type',
	'label'       => esc_html__( 'Header Style', 'medizin' ),
	'description' => esc_html__( 'Select default header style that displays on all single portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Medizin_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'medizin' ) ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_single_header_overlay',
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
	'settings' => 'portfolio_single_header_skin',
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
	'settings'    => 'portfolio_single_title_bar_layout',
	'label'       => esc_html__( 'Page Title Bar', 'medizin' ),
	'description' => esc_html__( 'Select default Title Bar that displays on all single portfolio pages.', 'medizin' ),
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
	'settings'    => 'portfolio_page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on single portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'portfolio_page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on single portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'portfolio_page_sidebar_position',
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
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_sticky_detail_enable',
	'label'       => esc_html__( 'Sticky Detail Column', 'medizin' ),
	'description' => esc_html__( 'Turn on to enable sticky of detail column.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_portfolio_site_skin',
	'label'       => esc_html__( 'Site Skin', 'medizin' ),
	'description' => esc_html__( 'Select skin of all single portfolio post pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'light',
	'choices'     => array(
		'dark'  => esc_html__( 'Dark', 'medizin' ),
		'light' => esc_html__( 'Light', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_portfolio_style',
	'label'       => esc_html__( 'Single Portfolio Style', 'medizin' ),
	'description' => esc_html__( 'Select style of all single portfolio post pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'image-list',
	'choices'     => array(
		'blank'           => esc_html__( 'Blank (Build with Elementor)', 'medizin' ),
		'image-list'      => esc_html__( 'Image List', 'medizin' ),
		'image-list-wide' => esc_html__( 'Image List - Wide', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_portfolio_video_enable',
	'label'       => esc_html__( 'Video', 'medizin' ),
	'description' => esc_html__( 'Controls the video visibility on portfolio post pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => array(
		'none'  => esc_html__( 'Hide', 'medizin' ),
		'above' => esc_html__( 'Show Above Feature Image', 'medizin' ),
		'below' => esc_html__( 'Show Below Feature Image', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_feature_caption',
	'label'       => esc_html__( 'Image Caption', 'medizin' ),
	'description' => esc_html__( 'Turn on to display comments on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Hide', 'medizin' ),
		'1' => esc_html__( 'Show', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_comment_enable',
	'label'       => esc_html__( 'Comments', 'medizin' ),
	'description' => esc_html__( 'Turn on to display comments on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '0',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_categories_enable',
	'label'       => esc_html__( 'Categories', 'medizin' ),
	'description' => esc_html__( 'Turn on to display categories on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_tags_enable',
	'label'       => esc_html__( 'Tags', 'medizin' ),
	'description' => esc_html__( 'Turn on to display tags on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_share_enable',
	'label'       => esc_html__( 'Share', 'medizin' ),
	'description' => esc_html__( 'Turn on to display Share list on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_portfolio_related_enable',
	'label'       => esc_html__( 'Related Portfolio', 'medizin' ),
	'description' => esc_html__( 'Turn on this option to display related portfolio section.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '0',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'text',
	'settings'        => 'portfolio_related_title',
	'label'           => esc_html__( 'Related Title Section', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => esc_html__( 'Related Projects', 'medizin' ),
	'active_callback' => array(
		array(
			'setting'  => 'single_portfolio_related_enable',
			'operator' => '==',
			'value'    => '1',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicheck',
	'settings'        => 'portfolio_related_by',
	'label'           => esc_attr__( 'Related By', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => array( 'portfolio_category' ),
	'choices'         => array(
		'portfolio_category' => esc_html__( 'Portfolio Category', 'medizin' ),
		'portfolio_tags'     => esc_html__( 'Portfolio Tags', 'medizin' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'single_portfolio_related_enable',
			'operator' => '==',
			'value'    => '1',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'number',
	'settings'        => 'portfolio_related_number',
	'label'           => esc_html__( 'Number related portfolio', 'medizin' ),
	'description'     => esc_html__( 'Controls the number of related portfolio', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => 5,
	'choices'         => array(
		'min'  => 3,
		'max'  => 30,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'single_portfolio_related_enable',
			'operator' => '==',
			'value'    => '1',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_portfolio_pagination',
	'label'       => esc_html__( 'Previous/Next Pagination', 'medizin' ),
	'description' => esc_html__( 'Select type of previous/next portfolio pagination on single portfolio posts.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '01',
	'choices'     => array(
		'none' => esc_html__( 'None', 'medizin' ),
		'01'   => esc_html__( 'Style 01', 'medizin' ),
		'02'   => esc_html__( 'Style 02', 'medizin' ),
		'03'   => esc_html__( 'Style 03', 'medizin' ),
	),
) );
