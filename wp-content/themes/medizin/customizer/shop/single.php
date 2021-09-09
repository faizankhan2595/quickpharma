<?php
$section  = 'shop_single';
$priority = 1;
$prefix   = 'single_product_';

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
	'settings'    => 'product_single_header_type',
	'label'       => esc_html__( 'Header Style', 'medizin' ),
	'description' => esc_html__( 'Select default header style that displays on all single product pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '',
	'choices'     => Medizin_Header::instance()->get_list( true, esc_html__( 'Use Global Header Style', 'medizin' ) ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'product_single_header_overlay',
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
	'settings' => 'product_single_header_skin',
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
	'settings'    => 'product_single_title_bar_layout',
	'label'       => esc_html__( 'Title Bar Style', 'medizin' ),
	'description' => esc_html__( 'Select default Title Bar that displays on all single product pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => Medizin_Title_Bar::instance()->get_list( true, esc_html__( 'Use Global Title Bar', 'medizin' ) ),
	'default'     => '04',
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
	'settings'    => 'product_page_sidebar_1',
	'label'       => esc_html__( 'Sidebar 1', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 1 that will display on single product pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'single_shop_sidebar',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'product_page_sidebar_2',
	'label'       => esc_html__( 'Sidebar 2', 'medizin' ),
	'description' => esc_html__( 'Select sidebar 2 that will display on single product pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'none',
	'choices'     => $registered_sidebars,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'product_page_sidebar_position',
	'label'    => esc_html__( 'Sidebar Position', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'left',
	'choices'  => $sidebar_positions,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'number',
	'settings'    => 'product_page_single_sidebar_width',
	'label'       => esc_html__( 'Single Sidebar Width', 'medizin' ),
	'description' => esc_html__( 'Controls the width of the sidebar when only one sidebar is present. Input value as % unit. For e.g: 33.33333. Leave blank to use global setting.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '25',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'dimension',
	'settings'    => 'product_page_single_sidebar_offset',
	'label'       => esc_html__( 'Single Sidebar Offset', 'medizin' ),
	'description' => esc_html__( 'Controls the offset of the sidebar when only one sidebar is present. Enter value including any valid CSS unit. For e.g: 70px. Leave blank to use global setting.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '0',
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
	'settings' => 'shop_single_preset',
	'label'    => esc_html__( 'Single Layout Preset', 'medizin' ),
	'section'  => $section,
	'default'  => '-1',
	'priority' => $priority++,
	'multiple' => 0,
	'choices'  => array(
		'-1'                 => array(
			'label'    => esc_html__( 'None', 'medizin' ),
			'settings' => array(),
		),
		'list-left-sidebar'  => array(
			'label'    => esc_html__( 'List Layout - Left Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'        => 'single_shop_sidebar',
				'product_page_sidebar_position' => 'left',
				'single_product_tabs_style'     => 'list',
			),
		),
		'list-right-sidebar' => array(
			'label'    => esc_html__( 'List Layout - Right Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'        => 'single_shop_sidebar',
				'product_page_sidebar_position' => 'right',
				'single_product_tabs_style'     => 'list',
			),
		),
		'list-no-sidebar'    => array(
			'label'    => esc_html__( 'List Layout - No Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'    => 'none',
				'single_product_tabs_style' => 'list',
			),
		),
		'tabs-left-sidebar'  => array(
			'label'    => esc_html__( 'Tabs Layout - Left Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'        => 'single_shop_sidebar',
				'product_page_sidebar_position' => 'left',
				'single_product_tabs_style'     => 'tabs',
			),
		),
		'tabs-right-sidebar' => array(
			'label'    => esc_html__( 'Tabs Layout - Left Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'        => 'single_shop_sidebar',
				'product_page_sidebar_position' => 'right',
				'single_product_tabs_style'     => 'tabs',
			),
		),
		'tabs-no-sidebar'    => array(
			'label'    => esc_html__( 'Tabs Layout - No Sidebar', 'medizin' ),
			'settings' => array(
				'product_page_sidebar_1'    => 'none',
				'single_product_tabs_style' => 'tabs',
			),
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'single_product_layout_style',
	'label'    => esc_html__( 'Layout Style', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'slider',
	'choices'  => array(
		'list'   => esc_html__( 'List', 'medizin' ),
		'slider' => esc_html__( 'Slider', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_product_sticky_enable',
	'label'       => esc_html__( 'Sticky Feature/Details Columns', 'medizin' ),
	'description' => esc_html__( 'Turn on to enable sticky of product feature & details columns.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'single_product_tabs_style',
	'label'    => esc_html__( 'Tabs Style', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => 'list',
	'choices'  => array(
		'list' => esc_html__( 'List', 'medizin' ),
		'tabs' => esc_html__( 'Tabs', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'single_product_categories_enable',
	'label'       => esc_html__( 'Categories', 'medizin' ),
	'description' => esc_html__( 'Turn on to display the categories.', 'medizin' ),
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
	'settings'    => 'single_product_tags_enable',
	'label'       => esc_html__( 'Tags', 'medizin' ),
	'description' => esc_html__( 'Turn on to display the tags.', 'medizin' ),
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
	'settings'    => 'single_product_sharing_enable',
	'label'       => esc_html__( 'Sharing', 'medizin' ),
	'description' => esc_html__( 'Turn on to display the sharing.', 'medizin' ),
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
	'settings'    => 'single_product_up_sells_enable',
	'label'       => esc_html__( 'Up-sells products', 'medizin' ),
	'description' => esc_html__( 'Turn on to display the up-sells products section.', 'medizin' ),
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
	'settings'    => 'single_product_related_enable',
	'label'       => esc_html__( 'Related products', 'medizin' ),
	'description' => esc_html__( 'Turn on to display the related products section.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '1',
	'choices'     => array(
		'0' => esc_html__( 'Off', 'medizin' ),
		'1' => esc_html__( 'On', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'number',
	'settings'        => 'product_related_number',
	'label'           => esc_html__( 'Number related products', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority++,
	'default'         => 10,
	'choices'         => array(
		'min'  => 3,
		'max'  => 30,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'single_product_related_enable',
			'operator' => '==',
			'value'    => '1',
		),
	),
) );
