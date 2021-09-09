<?php
$panel    = 'title_bar';
$priority = 1;

Medizin_Kirki::add_section( 'title_bar', array(
	'title'    => esc_html__( 'General', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'title_bar_01', array(
	'title'    => esc_html__( 'Style 01', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'title_bar_02', array(
	'title'    => esc_html__( 'Style 02', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'title_bar_03', array(
	'title'    => esc_html__( 'Style 03', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

