<?php
$panel    = 'advanced';
$priority = 1;

Medizin_Kirki::add_section( 'advanced', array(
	'title'    => esc_html__( 'Advanced', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_section( 'light_gallery', array(
	'title'    => esc_html__( 'Light Gallery', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
