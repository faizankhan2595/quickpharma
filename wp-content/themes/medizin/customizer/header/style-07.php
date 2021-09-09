<?php
$section  = 'header_style_07';
$priority = 1;
$prefix   = 'header_style_07_';

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header Style', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'padding_top',
	'label'     => esc_html__( 'Padding Top', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 13,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 0,
		'max'  => 500,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.header-07 .page-header-inner',
			'property' => 'padding-top',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'padding_bottom',
	'label'     => esc_html__( 'Padding Bottom', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 13,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 20,
		'max'  => 500,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.header-07 .page-header-inner',
			'property' => 'padding-bottom',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => $prefix . 'border_width',
	'label'     => esc_html__( 'Border Bottom Width', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 0,
		'max'  => 500,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => '.header-07 .page-header-inner',
			'property' => 'border-bottom-width',
			'units'    => 'px',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header Components', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'search_enable',
	'label'    => esc_html__( 'Search', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
	'choices'  => array(
		'0'      => esc_html__( 'Hide', 'medizin' ),
		'inline' => esc_html__( 'Inline Form', 'medizin' ),
		'popup'  => esc_html__( 'Popup Search', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'login_enable',
	'label'    => esc_html__( 'Login', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
	'choices'  => array(
		'0' => esc_html__( 'Hide', 'medizin' ),
		'1' => esc_html__( 'Show', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'wishlist_enable',
	'label'    => esc_html__( 'Wishlist', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
	'choices'  => array(
		'0' => esc_html__( 'Hide', 'medizin' ),
		'1' => esc_html__( 'Show', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'cart_enable',
	'label'    => esc_html__( 'Mini Cart', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
	'choices'  => array(
		'0'             => esc_html__( 'Hide', 'medizin' ),
		'1'             => esc_html__( 'Show', 'medizin' ),
		'hide_on_empty' => esc_html__( 'Hide On Empty', 'medizin' ),
	),
) );

Medizin_Customize::instance()->field_social_networks_enable( array(
	'settings' => $prefix . 'social_networks_enable',
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
) );

Medizin_Customize::instance()->field_language_switcher_enable( array(
	'settings' => $prefix . 'language_switcher_enable',
	'section'  => $section,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Button', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'text',
	'settings' => $prefix . 'button_text',
	'label'    => esc_html__( 'Button Text', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => esc_html__( 'Purchase $59', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'text',
	'settings' => $prefix . 'button_link',
	'label'    => esc_html__( 'Button Link', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'https://themeforest.net/item/medizin-medical-woocommerce-theme/26538545',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'text',
	'settings' => $prefix . 'button_link_rel',
	'label'    => esc_html__( 'Button Link Relationship (XFN)', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'button_link_target',
	'label'    => esc_html__( 'Open link in a new tab.', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '0',
	'choices'  => array(
		'0' => esc_html__( 'No', 'medizin' ),
		'1' => esc_html__( 'Yes', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'select',
	'settings' => $prefix . 'button_style',
	'label'    => esc_html__( 'Button Style', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'flat',
	'choices'  => Medizin_Header::instance()->get_button_style(),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'button_box_shadow',
	'label'       => esc_html__( 'Button Box Shadow', 'medizin' ),
	'description' => esc_html__( 'Input box shadow for header button. For e.g: 0 0 5px #ccc', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'output'      => array(
		array(
			'element'  => '.header-07 .page-header-inner .header-button',
			'property' => 'box-shadow',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header Navigation (Level 1)', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'kirki_typography',
	'settings'    => $prefix . 'navigation_typography',
	'label'       => esc_html__( 'Typography', 'medizin' ),
	'description' => esc_html__( 'These settings control the typography for menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => Medizin::PRIMARY_FONT,
		'variant'        => '500',
		'font-size'      => '16px',
		'line-height'    => '1.4',
		'letter-spacing' => '',
		'text-transform' => '',
	),
	'output'      => array(
		array(
			'element' => '.header-07 .menu--primary a .menu-item-title',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'spacing',
	'settings'  => $prefix . 'navigation_item_padding',
	'label'     => esc_html__( 'Item Padding', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => array(
		'top'    => '29px',
		'bottom' => '29px',
		'left'   => '18px',
		'right'  => '18px',
	),
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => array(
				'.desktop-menu .header-07 .menu--primary .menu__container > li > a',
			),
			'property' => 'padding',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header Dark Skin', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Style', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'background',
	'settings' => $prefix . 'dark_background',
	'label'    => esc_html__( 'Background', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => array(
		'background-color'      => 'rgba(255,255,255,0)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
		'background-position'   => 'center center',
	),
	'output'   => array(
		array(
			'element' => '.header-07.header-dark .page-header-inner',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'dark_border_color',
	'label'       => esc_html__( 'Border Color', 'medizin' ),
	'description' => esc_html__( 'Controls the border color of header.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => '#eee',
	'output'      => array(
		array(
			'element'  => '.header-07.header-dark .page-header-inner',
			'property' => 'border-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'dark_box_shadow',
	'label'       => esc_html__( 'Box Shadow', 'medizin' ),
	'description' => esc_html__( 'Input box shadow for header. For e.g: 0 0 5px #ccc', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'output'      => array(
		array(
			'element'  => '.header-07.header-dark .page-header-inner',
			'property' => 'box-shadow',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Icon', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'dark_header_icon_color',
	'label'       => esc_html__( 'Icon Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of icons on header.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => Medizin::HEADING_COLOR,
		'hover'  => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '
			.header-07.header-dark .header-icon,
			.header-07.header-dark .wpml-ls-item-toggle',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-dark .header-icon:hover',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-dark .wpml-ls-slot-shortcode_actions:hover > .js-wpml-ls-item-toggle',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Cart Badge', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'dark_cart_badge_color',
	'label'       => esc_html__( 'Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of cart badge.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
	),
	'default'     => array(
		'color'      => '#fff',
		'background' => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => '.header-07.header-dark .mini-cart .mini-cart-icon:after',
			'property' => 'color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.header-07.header-dark .mini-cart .mini-cart-icon:after',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Navigation', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'dark_navigation_link_color',
	'label'       => esc_html__( 'Link Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color for main menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => Medizin::TEXT_COLOR,
		'hover'  => Medizin::PRIMARY_COLOR,
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-dark .menu--primary > ul > li > a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '
			.header-07.header-dark .menu--primary > ul > li:hover > a,
            .header-07.header-dark .menu--primary > ul > li > a:hover,
            .header-07.header-dark .menu--primary > ul > li > a:focus,
            .header-07.header-dark .menu--primary > ul > .current-menu-ancestor > a,
            .header-07.header-dark .menu--primary > ul > .current-menu-item > a',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Search Form', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'dark_search_form_color',
	'label'           => esc_html__( 'Normal', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#696969',
		'background' => '#f5f5f5',
		'border'     => '#f5f5f5',
	),
	'output'          => Medizin_Header::instance()->get_search_form_kirki_output( '07', 'dark', false ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'search_enable',
			'operator' => '==',
			'value'    => 'inline',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'dark_search_form_focus_color',
	'label'           => esc_html__( 'Hover', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#333',
		'background' => '#fff',
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_search_form_kirki_output( '07', 'dark', true ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'search_enable',
			'operator' => '==',
			'value'    => 'inline',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Social Networks', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => $prefix . 'dark_social_networks_color',
	'label'     => esc_html__( 'Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'choices'   => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'   => array(
		'normal' => Medizin::HEADING_COLOR,
		'hover'  => Medizin::PRIMARY_COLOR,
	),
	'output'    => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-dark .header-social-networks a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-dark .header-social-networks a:hover',
			'property' => 'color',
		),
	),
) );

/* Header Button Dark */
Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Button Color', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'dark_button_color',
	'label'    => esc_html__( 'Button Color', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'custom',
	'choices'  => array(
		''         => esc_html__( 'Default', 'medizin' ),
		'custom'   => esc_html__( 'Custom', 'medizin' ),
		'gradient' => esc_html__( 'Gradient', 'medizin' ),
	),
) );

/* Button custom */
Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'dark_button_custom_color',
	'label'           => esc_html__( 'Button Color', 'medizin' ),
	'description'     => esc_html__( 'Controls the color of button.', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#fff',
		'background' => Medizin::PRIMARY_COLOR,
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_button_kirki_output( '07', 'dark', false ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'dark_button_color',
			'operator' => '==',
			'value'    => 'custom',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'dark_button_hover_custom_color',
	'label'           => esc_html__( 'Button Hover Color', 'medizin' ),
	'description'     => esc_html__( 'Controls the color of button when hover.', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#fff',
		'background' => Medizin::SECONDARY_COLOR,
		'border'     => Medizin::SECONDARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_button_kirki_output( '07', 'dark', true ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'dark_button_color',
			'operator' => '==',
			'value'    => 'custom',
		),
	),
) );

/* Button gradient */
Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'dark_button_gradient_color',
	'label'           => esc_html__( 'Color', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'         => array(
		'normal' => Medizin::HEADING_COLOR,
		'hover'  => Medizin::PRIMARY_COLOR,
	),
	'output'          => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-dark .header-button',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-dark .header-button:hover',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'dark_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'text',
	'settings'        => $prefix . 'dark_button_gradient_bg_color',
	'label'           => esc_html__( 'Button Gradient Background', 'medizin' ),
	'description'     => esc_html__( 'Input gradient color for header button. For e.g:  linear-gradient(248deg, #fe5b34 109%, #fe378c -14%)', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'linear-gradient(-135deg, #fe5b34 , #fe378c)',
	'output'          => array(
		array(
			'element'  => '.header-07.header-dark .header-button, .header-07.header-dark .header-button:before',
			'property' => 'background-image',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'dark_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'text',
	'settings'        => $prefix . 'dark_button_gradient_hover_bg_color',
	'label'           => esc_html__( 'Button Gradient Hover Background', 'medizin' ),
	'description'     => esc_html__( 'Input gradient color for header button. For e.g:  linear-gradient(248deg, #fe5b34 109%, #fe378c -14%)', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'linear-gradient(-135deg, #fe5b34 , #fe378c)',
	'output'          => array(
		array(
			'element'  => '.header-07.header-dark .header-button:hover, .header-07.header-dark .header-button:after',
			'property' => 'background-image',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'dark_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="big_title">' . esc_html__( 'Header Light Skin', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Style', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'color-alpha',
	'settings'    => $prefix . 'light_border_color',
	'label'       => esc_html__( 'Border Color', 'medizin' ),
	'description' => esc_html__( 'Controls the border color of header.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => 'rgba(255, 255, 255, 0.2)',
	'output'      => array(
		array(
			'element'  => '.header-07.header-light .page-header-inner',
			'property' => 'border-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'light_box_shadow',
	'label'       => esc_html__( 'Box Shadow', 'medizin' ),
	'description' => esc_html__( 'Input box shadow for header. For e.g: 0 0 5px #ccc', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'output'      => array(
		array(
			'element'  => '.header-07.header-light .page-header-inner',
			'property' => 'box-shadow',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Icon', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'light_header_icon_color',
	'label'       => esc_html__( 'Icon Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of icons on header.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#fff',
		'hover'  => '#fff',
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '
			.header-07.header-light .header-icon,
			.header-07.header-light .wpml-ls-item-toggle',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-light .header-icon:hover',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-light .wpml-ls-slot-shortcode_actions:hover > .js-wpml-ls-item-toggle',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Cart Badge', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'light_cart_badge_color',
	'label'       => esc_html__( 'Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color of cart badge.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
	),
	'default'     => array(
		'color'      => Medizin::PRIMARY_COLOR,
		'background' => '#fff',
	),
	'output'      => array(
		array(
			'choice'   => 'color',
			'element'  => '.header-07.header-light .mini-cart .mini-cart-icon:after',
			'property' => 'color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.header-07.header-light .mini-cart .mini-cart-icon:after',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Navigation', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'multicolor',
	'settings'    => $prefix . 'light_navigation_link_color',
	'label'       => esc_html__( 'Navigation Link Color', 'medizin' ),
	'description' => esc_html__( 'Controls the color for main menu items.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'choices'     => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'     => array(
		'normal' => '#fff',
		'hover'  => '#fff',
	),
	'output'      => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-light .menu--primary > ul > li > a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '
            .header-07.header-light .menu--primary > ul > li:hover > a,
            .header-07.header-light .menu--primary > ul > li > a:hover,
            .header-07.header-light .menu--primary > ul > li > a:focus,
            .header-07.header-light .menu--primary > ul > .current-menu-ancestor > a,
            .header-07.header-light .menu--primary > ul > .current-menu-item > a',
			'property' => 'color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Search Form', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'light_search_form_color',
	'label'           => esc_html__( 'Normal', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#696969',
		'background' => '#fff',
		'border'     => '#fff',
	),
	'output'          => Medizin_Header::instance()->get_search_form_kirki_output( '07', 'light', false ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'search_enable',
			'operator' => '==',
			'value'    => 'inline',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'light_search_form_focus_color',
	'label'           => esc_html__( 'Hover', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#333',
		'background' => '#fff',
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_search_form_kirki_output( '07', 'light', true ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'search_enable',
			'operator' => '==',
			'value'    => 'inline',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Social Networks', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => $prefix . 'light_social_networks_color',
	'label'     => esc_html__( 'Normal Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'choices'   => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'   => array(
		'normal' => '#fff',
		'hover'  => '#fff',
	),
	'output'    => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-light .header-social-networks a',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-light .header-social-networks a:hover',
			'property' => 'color',
		),
	),
) );


/* Header Button Light */
Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Header Button Color', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => $prefix . 'light_button_color',
	'label'    => esc_html__( 'Button Color', 'medizin' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'gradient',
	'choices'  => array(
		''         => esc_html__( 'Default', 'medizin' ),
		'custom'   => esc_html__( 'Custom', 'medizin' ),
		'gradient' => esc_html__( 'Gradient', 'medizin' ),
	),
) );

/* Button custom */
Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'light_button_custom_color',
	'label'           => esc_html__( 'Button Color', 'medizin' ),
	'description'     => esc_html__( 'Controls the color of button.', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#fff',
		'background' => Medizin::PRIMARY_COLOR,
		'border'     => Medizin::PRIMARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_button_kirki_output( '07', 'light', false ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'light_button_color',
			'operator' => '==',
			'value'    => 'custom',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'light_button_hover_custom_color',
	'label'           => esc_html__( 'Button Hover Color', 'medizin' ),
	'description'     => esc_html__( 'Controls the color of button when hover.', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
		'border'     => esc_attr__( 'Border', 'medizin' ),
	),
	'default'         => array(
		'color'      => '#fff',
		'background' => Medizin::SECONDARY_COLOR,
		'border'     => Medizin::SECONDARY_COLOR,
	),
	'output'          => Medizin_Header::instance()->get_button_kirki_output( '07', 'light', true ),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'light_button_color',
			'operator' => '==',
			'value'    => 'custom',
		),
	),
) );

/* Button gradient */
Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'multicolor',
	'settings'        => $prefix . 'light_button_gradient_color',
	'label'           => esc_html__( 'Color', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'transport'       => 'auto',
	'choices'         => array(
		'normal' => esc_attr__( 'Normal', 'medizin' ),
		'hover'  => esc_attr__( 'Hover', 'medizin' ),
	),
	'default'         => array(
		'normal' => Medizin::HEADING_COLOR,
		'hover'  => '#ffffff',
	),
	'output'          => array(
		array(
			'choice'   => 'normal',
			'element'  => '.header-07.header-light .header-button',
			'property' => 'color',
		),
		array(
			'choice'   => 'hover',
			'element'  => '.header-07.header-light .header-button:hover',
			'property' => 'color',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'light_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'text',
	'settings'        => $prefix . 'light_button_gradient_bg_color',
	'label'           => esc_html__( 'Button Gradient Background', 'medizin' ),
	'description'     => esc_html__( 'Input gradient color for header button. For e.g:  linear-gradient(248deg, #fe5b34 109%, #fe378c -14%)', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'linear-gradient(114deg,#fff4ce -75%,#ffc221 107%)',
	'output'          => array(
		array(
			'element'  => '.header-07.header-light .header-button, .header-07.header-light .header-button:before',
			'property' => 'background-image',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'light_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'            => 'text',
	'settings'        => $prefix . 'light_button_gradient_hover_bg_color',
	'label'           => esc_html__( 'Button Gradient Hover Background', 'medizin' ),
	'description'     => esc_html__( 'Input gradient color for header button. For e.g:  linear-gradient(248deg, #fe5b34 109%, #fe378c -14%)', 'medizin' ),
	'section'         => $section,
	'priority'        => $priority ++,
	'default'         => 'linear-gradient(-135deg,#fe5b34,#fe378c)',
	'output'          => array(
		array(
			'element'  => '.header-07.header-light .header-button:hover, .header-07.header-light .header-button:after',
			'property' => 'background-image',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => $prefix . 'light_button_color',
			'operator' => '==',
			'value'    => 'gradient',
		),
	),
) );
