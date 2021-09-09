<?php
$section  = 'navigation';
$priority = 1;
$prefix   = 'navigation_';

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Main Menu Dropdown', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'kirki_typography',
	'settings'    => $prefix . 'dropdown_link_typography',
	'label'       => esc_html__( 'Typography', 'medizin' ),
	'description' => esc_html__( 'Controls the typography for all dropdown menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => '',
		'variant'        => '400',
		'line-height'    => '1.38',
		'letter-spacing' => '0em',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element' => '
			.sm-simple .children > li > a,
			.sm-simple .children > li > a .menu-item-title
			',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => $prefix . 'dropdown_link_font_size',
	'label'       => esc_html__( 'Font Size', 'medizin' ),
	'description' => esc_html__( 'Controls the font size for dropdown menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 16,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => '.sm-simple .children > li > a',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

/*--------------------------------------------------------------
# Styling
--------------------------------------------------------------*/

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'dropdown_bg_color',
	'label'       => esc_html__( 'Background', 'medizin' ),
	'description' => esc_html__( 'Controls the background color for dropdown menu', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => '#fff',
	'output'      => array(
		array(
			'element'  => array(
				'.sm-simple .children',
				'.primary-menu-sub-visual',
			),
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'dropdown_box_shadow',
	'label'       => esc_html__( 'Box Shadow', 'medizin' ),
	'description' => esc_html__( 'Input valid box-shadow for dropdown menu. For e.g: "0 0 37px rgba(0, 0, 0, .07)"', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '0 -3px 23px rgba(0, 0, 0, 0.06)',
	'output'      => array(
		array(
			'element'  => array(
				'.sm-simple .children',
				'.primary-menu-sub-visual',
			),
			'property' => 'box-shadow',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'dropdown_link_color',
	'label'       => esc_html__( 'Link Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color for dropdown menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#777',
		'hover'  => Medizin::HEADING_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.sm-simple .children > li > a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '
				.sm-simple .children > li:hover > a,
				.sm-simple .children > li:hover > a:after,
				.sm-simple .children > li.current-menu-item > a,
				.sm-simple .children > li.current-menu-ancestor > a
			',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'dropdown_link_hover_bg_color',
	'label'       => esc_html__( 'Hover Background', 'medizin' ),
	'description' => esc_html__( 'Controls the background color when hover for dropdown menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => 'rgba(255, 255, 255, 0)',
	'output'      => array(
		array(
			'element'  => array(
				'.sm-simple .children > li:hover > a',
				'.sm-simple .children > li.current-menu-item > a',
				'.sm-simple .children > li.current-menu-ancestor > a',
			),
			'property' => 'background-color',
		),
	),
) );
