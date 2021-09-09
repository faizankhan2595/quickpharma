<?php
$section  = 'performance';
$priority = 1;
$prefix   = 'performance_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'disable_emoji',
	'label'       => esc_html__( 'Disable Emojis', 'medizin' ),
	'description' => esc_html__( 'Remove Wordpress Emojis functionality.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 1,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'disable_embeds',
	'label'       => esc_html__( 'Disable Embeds', 'medizin' ),
	'description' => esc_html__( 'Remove Wordpress Embeds functionality.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 1,
) );
