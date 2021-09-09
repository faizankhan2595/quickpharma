<?php
$panel    = 'search';
$priority = 1;

Medizin_Kirki::add_section( 'search_page', array(
	'title'    => esc_html__( 'Search Page', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_section( 'search_popup', array(
	'title'    => esc_html__( 'Search Popup', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );
