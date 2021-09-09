<?php
$section  = 'top_bar_style_04';
$priority = 1;
$prefix   = 'top_bar_style_04_';

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'multicheck',
	'settings' => $prefix . 'left_components',
	'label'    => esc_html__( 'Left Components', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => [ 'text' ],
	'choices'  => Medizin_Top_Bar::instance()->get_support_components(),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'multicheck',
	'settings' => $prefix . 'right_components',
	'label'    => esc_html__( 'Right Components', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => [ 'language_switcher', 'info_list' ],
	'choices'  => Medizin_Top_Bar::instance()->get_support_components(),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'textarea',
	'settings' => $prefix . 'text',
	'label'    => esc_html__( 'Text', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'         => 'repeater',
	'settings'     => $prefix . 'info_list',
	'label'        => esc_html__( 'Info List', 'medizin' ),
	'section'      => $section,
	'priority'     => $priority++,
	'button_label' => esc_html__( 'Add new info', 'medizin' ),
	'row_label'    => array(
		'type'  => 'field',
		'field' => 'text',
	),
	'fields'       => array(
		'text'       => array(
			'type'    => 'textarea',
			'label'   => esc_html__( 'Title', 'medizin' ),
			'default' => '',
		),
		'url'        => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Link', 'medizin' ),
			'default' => '',
		),
		'icon_class' => array(
			'type'    => 'text',
			'label'   => esc_html__( 'Icon Class', 'medizin' ),
			'default' => '',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'padding_top',
	'label'     => esc_html__( 'Padding top', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 0,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'padding-top',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'padding_bottom',
	'label'     => esc_html__( 'Padding bottom', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 0,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'padding-bottom',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'bg_color',
	'label'       => esc_html__( 'Background', 'medizin' ),
	'description' => esc_html__( 'Controls the background color of top bar.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => '#fff',
	'output'      => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'border_width',
	'label'     => esc_html__( 'Border Bottom Width', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'default'   => 1,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'border-bottom-width',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'border_color',
	'label'       => esc_html__( 'Border Bottom Color', 'medizin' ),
	'description' => esc_html__( 'Controls the border bottom color of top bar.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => '#eee',
	'output'      => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'border-bottom-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'kirki_typography',
	'settings'    => $prefix . 'text_typography',
	'label'       => esc_html__( 'Text Typography', 'medizin' ),
	'description' => esc_html__( 'These settings control the typography of text', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => Medizin::SECONDARY_FONT,
		'variant'        => '400',
		'line-height'    => '1.78',
		'letter-spacing' => '',
		'font-size'      => '14px',
	),
	'output'      => array(
		array(
			'element' => '.top-bar-04',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color',
	'settings'    => $prefix . 'text_color',
	'label'       => esc_html__( 'Text', 'medizin' ),
	'description' => esc_html__( 'Controls the color of text on top bar.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => '#696969',
	'output'      => array(
		array(
			'element'  => '.top-bar-04',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'kirki_typography',
	'settings'    => $prefix . 'link_typography',
	'label'       => esc_html__( 'Link Typography', 'medizin' ),
	'description' => esc_html__( 'These settings control the typography of link', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => Medizin::SECONDARY_FONT,
		'variant'        => '500',
		'line-height'    => '1.78',
		'letter-spacing' => '',
		'font-size'      => '14px',
	),
	'output'      => array(
		array(
			'element' => '.top-bar-04 a',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'link_color',
	'label'       => esc_html__( 'Link Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of links on top bar.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => Medizin::TEXT_LIGHTEN_COLOR,
		'hover'  => Medizin::HEADING_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.top-bar-04 a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.top-bar-04 a:hover, .top-bar-04 a:focus',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'tag_color',
	'label'       => esc_html__( 'Tag Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of text tags.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#fff',
		'hover'  => '#fff',
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.top-bar-04 .top-bar-tag',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.top-bar-04 .top-bar-tag:hover',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'tag_bg_color',
	'label'       => esc_html__( 'Tag Background Color', 'medizin' ),
	'description' => esc_html__( 'Controls the background color of text tags.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#3751EE',
		'hover'  => Medizin::SECONDARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.top-bar-04 .top-bar-tag',
			'property' => 'background-color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.top-bar-04 .top-bar-tag:hover',
			'property' => 'background-color',
		),
	),
) );

