<?php
$panel    = 'header';
$priority = 1;

Medizin_Kirki::add_section( 'header', array(
	'title'       => esc_html__( 'General', 'medizin' ),
	'description' => '<div class="desc">
			<strong class="insight-label insight-label-info">' . esc_html__( 'IMPORTANT NOTE: ', 'medizin' ) . '</strong>
			<p>' . esc_html__( 'These settings can be overridden by settings from Page Options Box in separator page.', 'medizin' ) . '</p>
			<p><img src="' . esc_url( MEDIZIN_THEME_IMAGE_URI . '/customize/header-settings.jpg' ) . '" alt="' . esc_attr__( 'header-settings', 'medizin' ) . '"/></p>
			<strong class="insight-label insight-label-info">' . esc_html__( 'Powerful header control: ', 'medizin' ) . '</strong>
			<p>' . esc_html__( 'These header settings for whole website. If you want use different header style for different post or page. then please go to specific section.', 'medizin' ) . '</p>
		</div>',
	'panel'       => $panel,
	'priority'    => $priority++,
) );

Medizin_Kirki::add_section( 'header_sticky', array(
	'title'    => esc_html__( 'Header Sticky', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

Medizin_Kirki::add_section( 'header_more_options', array(
	'title'    => esc_html__( 'Header More Options', 'medizin' ),
	'panel'    => $panel,
	'priority' => $priority++,
) );

$header_types = Medizin_Header::instance()->get_type();

foreach ( $header_types as $key => $name ) {
	$section_id = 'header_style_' . $key;

	Medizin_Kirki::add_section( $section_id, array(
		'title'    => $name,
		'panel'    => $panel,
		'priority' => $priority++,
	) );
}
