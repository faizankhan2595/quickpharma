<?php
$panel    = 'navigation';
$priority = 1;

Medizin_Kirki::add_section( 'navigation', array(
	'title'    => esc_html__( 'Desktop Menu', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_section( 'navigation_minimal_01', array(
	'title'    => esc_html__( 'Off Canvas Menu', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_section( 'navigation_mobile', array(
	'title'    => esc_html__( 'Mobile Menu', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
