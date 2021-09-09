<?php
$section  = 'social_sharing';
$priority = 1;
$prefix   = 'social_sharing_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicheck',
	'settings'    => $prefix . 'item_enable',
	'label'       => esc_attr__( 'Sharing Links', 'medizin' ),
	'description' => esc_html__( 'Check to the box to enable social share links.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array( 'facebook', 'twitter', 'linkedin', 'tumblr', 'email' ),
	'choices'     => array(
		'facebook' => esc_attr__( 'Facebook', 'medizin' ),
		'twitter'  => esc_attr__( 'Twitter', 'medizin' ),
		'linkedin' => esc_attr__( 'Linkedin', 'medizin' ),
		'tumblr'   => esc_attr__( 'Tumblr', 'medizin' ),
		'email'    => esc_attr__( 'Email', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'sortable',
	'settings'    => $prefix . 'order',
	'label'       => esc_attr__( 'Order', 'medizin' ),
	'description' => esc_html__( 'Controls the order of social share links.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => array(
		'facebook',
		'twitter',
		'linkedin',
		'tumblr',
		'email',
	),
	'choices'     => array(
		'facebook' => esc_attr__( 'Facebook', 'medizin' ),
		'twitter'  => esc_attr__( 'Twitter', 'medizin' ),
		'linkedin' => esc_attr__( 'Linkedin', 'medizin' ),
		'tumblr'   => esc_attr__( 'Tumblr', 'medizin' ),
		'email'    => esc_attr__( 'Email', 'medizin' ),
	),
) );
