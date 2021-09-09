<?php
$panel    = 'shop';
$priority = 1;

Medizin_Kirki::add_section( 'shop_general', array(
	'title'    => esc_html__( 'General', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'shop_archive', array(
	'title'    => esc_html__( 'Shop Archive', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'shop_single', array(
	'title'    => esc_html__( 'Shop Single', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'shopping_cart', array(
	'title'    => esc_html__( 'Shopping Cart', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );
