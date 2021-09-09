<?php
$section  = 'advanced';
$priority = 1;
$prefix   = 'advanced_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'smooth_scroll_enable',
	'label'       => esc_html__( 'Smooth Scroll', 'medizin' ),
	'description' => esc_html__( 'Smooth scrolling experience for websites.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 0,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'scroll_top_enable',
	'label'       => esc_html__( 'Go To Top Button', 'medizin' ),
	'description' => esc_html__( 'Turn on to show go to top button.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 1,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'retina_display_enable',
	'label'       => esc_html__( 'Retina Display?', 'medizin' ),
	'description' => esc_html__( 'Turn on to make images retina on high screen revolution.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 0,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => 'google_api_key',
	'label'       => esc_html__( 'Google Api Key', 'medizin' ),
	'description' => sprintf( wp_kses( __( 'Follow <a href="%s" target="_blank">this link</a> and click <strong>GET A KEY</strong> button.', 'medizin' ), array(
		'a'      => array(
			'href'   => array(),
			'target' => array(),
		),
		'strong' => array(),
	) ), esc_url( 'https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key' ) ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'AIzaSyCWKTDAs65xUb7bZnFGCVxxIxuJDw4XOwo',
	'transport'   => 'postMessage',
) );
