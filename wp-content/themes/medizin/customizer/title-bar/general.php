<?php
$section  = 'title_bar';
$priority = 1;
$prefix   = 'title_bar_';

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => $prefix . 'layout',
	'label'       => esc_html__( 'Global Title Bar', 'medizin' ),
	'description' => esc_html__( 'Select default title bar that displays on all pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => '01',
	'choices'     => Medizin_Title_Bar::instance()->get_list(),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => $prefix . 'group_title_' . $priority++,
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '<div class="big_title">' . esc_html__( 'Heading', 'medizin' ) . '</div>',
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'search_title',
	'label'       => esc_html__( 'Search Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on search results page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Search results for: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'home_title',
	'label'       => esc_html__( 'Home Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text that displays on front latest posts page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Blog', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_category_title',
	'label'       => esc_html__( 'Archive Category Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive category page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Category: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_tag_title',
	'label'       => esc_html__( 'Archive Tag Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive tag page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Tag: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_author_title',
	'label'       => esc_html__( 'Archive Author Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive author page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Author: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_year_title',
	'label'       => esc_html__( 'Archive Year Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive year page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Year: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_month_title',
	'label'       => esc_html__( 'Archive Month Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive month page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Month: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_day_title',
	'label'       => esc_html__( 'Archive Day Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text prefix that displays on archive day page.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Day: ', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'single_blog_title',
	'label'       => esc_html__( 'Single Blog Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text that displays on single blog posts. Leave blank to use post title.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Blog', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'archive_portfolio_title',
	'label'       => esc_html__( 'Archive Portfolio Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text that displays on archive portfolio pages.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Portfolios', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'single_portfolio_title',
	'label'       => esc_html__( 'Single Portfolio Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text that displays on single portfolio pages. Leave blank to use portfolio title.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Portfolio', 'medizin' ),
) );

Medizin_Kirki::add_field( 'theme', array(
	'type'        => 'text',
	'settings'    => $prefix . 'single_product_title',
	'label'       => esc_html__( 'Single Product Heading', 'medizin' ),
	'description' => esc_html__( 'Enter text that displays on single product pages. Leave blank to use product title.', 'medizin' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => esc_html__( 'Our Shop', 'medizin' ),
) );
