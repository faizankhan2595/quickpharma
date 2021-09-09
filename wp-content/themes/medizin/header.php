<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section
 *
 * @link     https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package  Medizin
 * @since    1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php html_class(); ?>>
<head>
	<?php Medizin_THA::instance()->head_top(); ?>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset', 'display' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url', 'display' ) ); ?>">
	<?php endif; ?>
	<?php Medizin_THA::instance()->head_bottom(); ?>
	<?php wp_head(); ?>
	<style>
		tr.row-clear-variations {
			display: none;
		}
		h2.woocommerce-loop-product__title a {
			display: -webkit-box!important;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: normal;
		}
		.term-description.brand-description {
			display: none;
		}

		.header-01 .header-right {
			width: 15%;
		}
		.header-01 .branding {
			width: 15%;
		}
		h2.woocommerce-loop-product__title a {
			display: -webkit-box!important;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: normal;
			line-height: 1.65em;
			height: 3.3em;
		}
		.woosc-popup.woosc-search {
			display: none;
		}

		.woosc-popup.woosc-settings {
			display: none;
		}

		div#woosc-area {
			display: none;
		}
		@media (max-width: 767px) {
			.page-open-components {
				display: none !important;
			}

			.header-right-inner {
				position: relative;
				top: 0px !important;
				left: -10px;
				right: 15px !important;
				z-index: 1;
				padding: none !important;
				box-shadow: none;
				border-radius: 5px;
				visibility: visible;
				opacity: 100;
				-webkit-transform: none !important;
				-ms-transform: none !important;
				transform: none !important;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
			}
			img.dark-logo {
				width: 120px !important;
			}
		}

	</style>
	<script type="text/javascript">

		setTimeout(() => {
			var keyboardEvent = document.createEvent('KeyboardEvent');
			var initMethod = typeof keyboardEvent.initKeyboardEvent !== 'undefined' ? 'initKeyboardEvent' : 'initKeyEvent';
			keyboardEvent[initMethod]('keydown',true,true,window,false,false,false, false,65,0);
			document.dispatchEvent(keyboardEvent);
			console.log(keyboardEvent);
			console.log("yessss");
		}, 12000);
				 
	</script>
</head>

<body <?php body_class(); ?> <?php Medizin::body_attributes(); ?>>

<?php wp_body_open(); ?>

<?php Medizin_Templates::pre_loader(); ?>

<div id="page" class="site">
	<div class="content-wrapper">
		<?php Medizin_Templates::slider( 'above' ); ?>
		<?php Medizin_Top_Bar::instance()->render(); ?>

		<?php get_template_part( 'template-parts/header/entry' ); ?>

		<?php Medizin_Templates::slider( 'below' ); ?>
		<?php Medizin_Title_Bar::instance()->render(); ?>
