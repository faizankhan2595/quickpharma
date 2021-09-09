<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Medizin
 * @since   1.0
 */

get_header( 'blank' );

$image = Medizin::setting( 'error404_page_image' );
$title = Medizin::setting( 'error404_page_title' );
$text  = Medizin::setting( 'error404_page_text' );
?>
	<div class="page-404-content">
		<div class="container">
			<div class="row row-xs-center full-height">
				<div class="branding__logo">
					<?php
					$logo_dark = Medizin::setting( 'logo_dark' );

					if ( isset( $logo_dark['id'] ) ) {
						$logo_width    = Medizin::setting( 'logo_width' );
						$logo_dark_url = Medizin_Image::get_attachment_url_by_id( array(
							'id'   => $logo_dark['id'],
							'size' => "{$logo_width}x9999",
							'crop' => false,
						) );
					} else {
						$logo_dark_url = $logo_dark['url'];
					}

					$alt = get_bloginfo( 'name', 'display' );
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo esc_url( $logo_dark_url ); ?>" alt="<?php echo esc_attr( $alt ); ?>"
						     class="dark-logo">
					</a>
				</div>

				<div class="col-md-12">
					<?php if ( $image !== '' ): ?>
						<div class="error-image">
							<img src="<?php echo esc_url( $image ); ?>"
							     alt="<?php esc_attr_e( 'Not Found Image', 'medizin' ); ?>"/>
						</div>
					<?php endif; ?>

					<?php if ( $title !== '' ): ?>
						<h3 class="error-404-title">
							<?php echo wp_kses( $title, 'medizin-default' ); ?>
						</h3>
					<?php endif; ?>

					<?php if ( $text !== '' ): ?>
						<div class="error-404-text">
							<?php echo wp_kses( $text, 'medizin-default' ); ?>
						</div>
					<?php endif; ?>

					<?php if ( Medizin::setting( 'error404_page_search_enable' ) ): ?>
						<div class="error-search-form">
							<?php get_search_form(); ?>
						</div>
					<?php endif; ?>

					<?php if ( '1' === Medizin::setting( 'error404_page_buttons_enable' ) ): ?>
						<div class="error-buttons">
							<?php
							Medizin_Templates::render_button( [
								'text' => esc_html__( 'Go back', 'medizin' ),
								'link' => [
									'url' => 'javascript:void(0)',
								],
								'icon' => 'far fa-history',
								'id'   => 'btn-go-back',
							] );

							Medizin_Templates::render_button( [
								'text' => esc_html__( 'Homepage', 'medizin' ),
								'link' => [
									'url' => esc_url( home_url( '/' ) ),
								],
								'icon' => 'far fa-home',
								'id'   => 'btn-return-home',
							] );
							?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer( 'blank' );
