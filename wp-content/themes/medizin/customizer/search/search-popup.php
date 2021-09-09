<?php
$section  = 'search_popup';
$priority = 1;
$prefix   = 'search_popup_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'close_button_color',
	'label'       => esc_html__( 'Close Button Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of close button.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.page-search-popup .popup-close-button',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '
			.page-search-popup .popup-close-button .burger-icon-top:after,
			.page-search-popup .popup-close-button .burger-icon-bottom:after
			',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'bg_color',
	'label'       => esc_html__( 'Color', 'medizin' ),
	'description' => esc_html__( 'Controls the background color of the search popup content.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => '#fff',
	'output'      => array(
		array(
			'element'  => '.page-search-popup',
			'property' => 'background',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'text_color',
	'label'       => esc_html__( 'Text Color', 'medizin' ),
	'description' => esc_html__( 'Controls the text color search field.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => Medizin::HEADING_COLOR,
	'output'      => array(
		array(
			'element'  => '
			.page-search-popup .search-form,
			.page-search-popup .search-field:focus
			',
			'property' => 'color',
		),
		array(
			'element'  => '.page-search-popup .search-field:-webkit-autofill',
			'property' => '-webkit-text-fill-color',
			'suffix'   => '!important',
		),
	),
) );
