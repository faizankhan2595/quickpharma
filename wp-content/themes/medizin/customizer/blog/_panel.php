<?php
$panel    = 'blog';
$priority = 1;

Medizin_Kirki::add_section( 'blog_archive', array(
	'title'    => esc_html__( 'Blog Archive', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'blog_single', array(
	'title'    => esc_html__( 'Blog Single Post', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );
