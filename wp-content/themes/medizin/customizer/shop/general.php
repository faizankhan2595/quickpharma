<?php
$section  = 'shop_general';
$priority = 1;
$prefix   = 'shop_general_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'shop_badge_new',
	'label'       => esc_html__( 'New Badge (Days)', 'medizin' ),
	'description' => esc_html__( 'If the product was published within the newness time frame display the new badge.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '30',
	'choices'     => array(
		'0'  => esc_html__( 'None', 'medizin' ),
		'1'  => esc_html__( '1 day', 'medizin' ),
		'2'  => esc_html__( '2 days', 'medizin' ),
		'3'  => esc_html__( '3 days', 'medizin' ),
		'4'  => esc_html__( '4 days', 'medizin' ),
		'5'  => esc_html__( '5 days', 'medizin' ),
		'6'  => esc_html__( '6 days', 'medizin' ),
		'7'  => esc_html__( '7 days', 'medizin' ),
		'8'  => esc_html__( '8 days', 'medizin' ),
		'9'  => esc_html__( '9 days', 'medizin' ),
		'10' => esc_html__( '10 days', 'medizin' ),
		'15' => esc_html__( '15 days', 'medizin' ),
		'20' => esc_html__( '20 days', 'medizin' ),
		'25' => esc_html__( '25 days', 'medizin' ),
		'30' => esc_html__( '30 days', 'medizin' ),
		'60' => esc_html__( '60 days', 'medizin' ),
		'90' => esc_html__( '90 days', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'shop_badge_hot',
	'label'    => esc_html__( 'Hot Badge', 'medizin' ),
	'tooltip'  => esc_html__( 'Show a "hot" label when product set featured.', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '1',
	'choices'  => array(
		'0' => esc_html__( 'Hide', 'medizin' ),
		'1' => esc_html__( 'Show', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'radio-buttonset',
	'settings' => 'shop_badge_sale',
	'label'    => esc_html__( 'Sale Badge', 'medizin' ),
	'tooltip'  => esc_html__( 'Show a "sale" or "sale percent" label when product on sale.', 'medizin' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '1',
	'choices'  => array(
		'0' => esc_html__( 'Hide', 'medizin' ),
		'1' => esc_html__( 'Show', 'medizin' ),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Colors', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => 'shop_badge_new_color',
	'label'     => esc_html__( 'New Badge Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'choices'   => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
	),
	'default'   => array(
		'color'      => '#fff',
		'background' => '#50D7E9',
	),
	'output'    => array(
		array(
			'choice'   => 'color',
			'element'  => '.woocommerce .product .product-badges .new',
			'property' => 'color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.woocommerce .product .product-badges .new',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => 'shop_badge_hot_color',
	'label'     => esc_html__( 'Hot Badge Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'choices'   => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
	),
	'default'   => array(
		'color'      => '#fff',
		'background' => '#F6B500',
	),
	'output'    => array(
		array(
			'choice'   => 'color',
			'element'  => '.woocommerce .product .product-badges .hot',
			'property' => 'color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.woocommerce .product .product-badges .hot',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => 'shop_badge_sale_color',
	'label'     => esc_html__( 'Sale Badge Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'choices'   => array(
		'color'      => esc_attr__( 'Color', 'medizin' ),
		'background' => esc_attr__( 'Background', 'medizin' ),
	),
	'default'   => array(
		'color'      => '#fff',
		'background' => '#E4573D',
	),
	'output'    => array(
		array(
			'choice'   => 'color',
			'element'  => '.woocommerce .product .product-badges .onsale',
			'property' => 'color',
		),
		array(
			'choice'   => 'background',
			'element'  => '.woocommerce .product .product-badges .onsale',
			'property' => 'background-color',
		),
	),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'      => 'multicolor',
	'settings'  => 'shop_price_color',
	'label'     => esc_html__( 'Price Color', 'medizin' ),
	'section'   => $section,
	'priority'  => $priority++,
	'transport' => 'auto',
	'choices'   => array(
		'regular' => esc_attr__( 'Regular Price', 'medizin' ),
		'old'     => esc_attr__( 'Old Price', 'medizin' ),
		'sale'    => esc_attr__( 'Sale Price', 'medizin' ),
		'onsale'  => esc_attr__( 'On Sale', 'medizin' ),
	),
	'default'   => array(
		'regular' => Medizin::PRIMARY_COLOR,
		'old'     => '#ccc',
		'sale'    => Medizin::PRIMARY_COLOR,
		'onsale'  => Medizin::SECONDARY_COLOR,
	),
	'output'    => array(
		array(
			'choice'   => 'regular',
			'element'  => '
			.price,
			.amount,
			.tr-price,
			.woosw-content-item--price
			',
			'property' => 'color',
		),
		array(
			'choice'   => 'old',
			'element'  => '
			.price del,
			del .amount,
			.tr-price del,
			.woosw-content-item--price del
			',
			'property' => 'color',
		),
		array(
			'choice'   => 'sale',
			'element'  => 'ins .amount',
			'property' => 'color',
		),
		array(
			'choice'   => 'onsale',
			'element'  => '
			.product.sale ins, .product.sale ins .amount,
			.single-product .product.sale .entry-summary > .price ins .amount
			',
			'property' => 'color',
		),
	),
) );
