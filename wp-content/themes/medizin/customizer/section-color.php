<?php
$section  = 'color_';
$priority = 1;
$prefix   = 'color_';

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'color',
	'settings'  => 'primary_color',
	'label'     => esc_html__( 'Primary Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'default'   => Medizin::PRIMARY_COLOR,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'color',
	'settings'  => 'secondary_color',
	'label'     => esc_html__( 'Secondary Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'default'   => Medizin::SECONDARY_COLOR,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color',
	'settings'    => 'body_color',
	'label'       => esc_html__( 'Text Color', 'medizin' ),
	'description' => esc_html__( 'Controls the default color of all text.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => Medizin::TEXT_COLOR,
	'output'      => array(
		array(
			'element'  => 'body, .gmap-marker-wrap',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => 'link_color',
	'label'       => esc_html__( 'Link Color', 'medizin' ),
	'description' => esc_html__( 'Controls the default color of all links.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#696969',
		'hover'  => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => 'a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '
			a:hover,
			a:focus,
			.medizin-map-overlay-info a:hover,
			.widget_rss li a:hover,
			.widget_recent_entries li a:hover,
			.widget_recent_entries li a:after
			',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color',
	'settings'    => 'heading_color',
	'label'       => esc_html__( 'Heading Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of heading.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'default'     => Medizin::HEADING_COLOR,
	'output'      => array(
		array(
			'element'  => '
			h1,h2,h3,h4,h5,h6,caption,th,blockquote,
			.heading,
			.heading-color,
			.tm-button.style-text .button-text,
			.entry-post-tags a:hover,
			.entry-author .author-social-networks a:hover,
			.widget_rss li a,
			.medizin-grid-wrapper.filter-style-01 .btn-filter.current,
			.medizin-grid-wrapper.filter-style-01 .btn-filter:hover,
			.elementor-accordion .elementor-tab-title,
			.tm-table.style-01 td,
			.tm-table caption,
			.comment-reply-title,
			.page-links,
			.comment-nav-links li,
			.page-pagination li,
			.comment-nav-links li,
			.woocommerce nav.woocommerce-pagination ul li,
			.woocommerce-checkout .shop_table .product-name,
            .single-product form.cart .label > label,
            .single-product form.cart .quantity-button-wrapper > label,
            .single-product form.cart .wccpf_label > label
			',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Button Color', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => 'button_color',
	'label'       => esc_html__( 'Button Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of buttons.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'     => array(
		'color'      => '#fff',
		'background' => Medizin::PRIMARY_COLOR,
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => Medizin_Helper::get_button_css_selector(),
			'property' => 'color',
		),
		array(
			'choice'   => 'border',
			'element'  => Medizin_Helper::get_button_css_selector(),
			'property' => 'border-color',
		),
		array(
			'choice'   => 'background',
			'element'  => Medizin_Helper::get_button_css_selector(),
			'property' => 'background-color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.wp-block-button.is-style-outline',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => 'button_hover_color',
	'label'       => esc_html__( 'Button Hover Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of buttons when hover.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'     => array(
		'color'      => '#fff',
		'background' => Medizin::SECONDARY_COLOR,
		'border'     => Medizin::SECONDARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => Medizin_Helper::get_button_hover_css_selector(),
			'property' => 'color',
		),
		array(
			'choice'   => 'border',
			'element'  => Medizin_Helper::get_button_hover_css_selector(),
			'property' => 'border-color',
		),
		array(
			'choice'   => 'background',
			'element'  => Medizin_Helper::get_button_hover_css_selector(),
			'property' => 'background-color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.wp-block-button.is-style-outline .wp-block-button__link:hover',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Form Color', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => 'form_input_color',
	'label'       => esc_html__( 'Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of form inputs.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'     => array(
		'color'      => '#ababab',
		'background' => '#f8f8f8',
		'border'     => '#f8f8f8',
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => Medizin_Helper::get_form_input_css_selector(),
			'property' => 'color',
		),
		array(
			'choice'   => 'border',
			'element'  => Medizin_Helper::get_form_input_css_selector(),
			'property' => 'border-color',
		),
		array(
			'choice'   => 'background',
			'element'  => Medizin_Helper::get_form_input_css_selector(),
			'property' => 'background-color',
		),
		/**
		 * Style for radio.
		 */
		array(
			'choice'   => 'border',
			'element'  => "
				input[type='radio']:before
			",
			'property' => 'border-color',
		),
		array(
			'choice'   => 'background',
			'element'  => "
				input[type='radio']:before
			",
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => 'form_input_focus_color',
	'label'       => esc_html__( 'Focus Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of form inputs when focus.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'     => array(
		'color'      => Medizin::HEADING_COLOR,
		'background' => '#fff',
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => Medizin_Helper::get_form_input_focus_css_selector(),
			'property' => 'color',
		),
		array(
			'choice'   => 'border',
			'element'  => Medizin_Helper::get_form_input_focus_css_selector(),
			'property' => 'border-color',
		),
		array(
			'choice'   => 'background',
			'element'  => Medizin_Helper::get_form_input_focus_css_selector(),
			'property' => 'background-color',
		),
		/**
		 * Style for radio.
		 */
		array(
			'choice'   => 'border',
			'element'  => "
				input[type='radio']:checked:before,
				input[type='radio']:hover:before
			",
			'property' => 'border-color',
		),
		array(
			'choice'   => 'border',
			'element'  => "
				input[type='radio']:after
			",
			'property' => 'background-color',
		),
		array(
			'choice'   => 'background',
			'element'  => "
				input[type='radio']:checked:before
			",
			'property' => 'background-color',
		),
	),
) );
