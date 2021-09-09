<?php
/**
 * The template for displaying all single portfolio posts.
 *
 * @package Medizin
 * @since   1.0
 */
$style = Medizin_Helper::get_post_meta( 'portfolio_layout_style', '' );
if ( '' === $style ) {
	$style = Medizin::setting( 'single_portfolio_style' );
}

if ( 'blank' === $style ) {
	get_template_part( 'template-parts/portfolio/content-single', 'blank' );
} else {
	get_template_part( 'template-parts/portfolio/content-single' );
}
