<?php
$section  = 'top_bar';
$priority = 1;
$prefix   = 'top_bar_';

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'global_top_bar',
	'label'    => esc_html__( 'Default Top Bar', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '01',
	'choices'  => Medizin_Top_Bar::instance()->get_list(),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'top_bar_hide_on_mobile',
	'label'    => esc_html__( 'Hide On Mobile', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '1',
	'choices'  => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );
