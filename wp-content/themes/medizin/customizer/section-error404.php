<?php
$section  = 'error404_page';
$priority = 1;
$prefix   = 'error404_page_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'background',
	'settings'    => 'error404_page_background_body',
	'label'       => esc_html__( 'Background', 'medizin' ),
	'description' => esc_html__( 'Controls outer background area in boxed mode.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'background-color'      => '#fff',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
		'background-position'   => 'center center',
	),
	'output'      => array(
		array(
			'element' => '.error404',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'image',
	'settings' => 'error404_page_image',
	'label'    => esc_html__( 'Image', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => MEDIZIN_THEME_IMAGE_URI . '/page-404-image.jpg',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => 'error404_page_title',
	'label'       => esc_html__( 'Title', 'medizin' ),
	'description' => esc_html__( 'Controls the title that display on error 404 page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Oops! That page can’t be found.', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'textarea',
	'settings'    => 'error404_page_text',
	'label'       => esc_html__( 'Text', 'medizin' ),
	'description' => esc_html__( 'Controls the text that display below title', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'error404_page_search_enable',
	'label'    => esc_html__( 'Show Search Form', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '1',
	'choices'  => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'error404_page_buttons_enable',
	'label'    => esc_html__( 'Show Buttons', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '0',
	'choices'  => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );
