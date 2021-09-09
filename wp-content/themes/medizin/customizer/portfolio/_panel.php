<?php
$panel    = 'portfolio';
$priority = 1;

Medizin_Kirki::add_section( 'archive_portfolio', array(
	'title'    => esc_html__( 'Archive', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'single_portfolio', array(
	'title'    => esc_html__( 'Single', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );
