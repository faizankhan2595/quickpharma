<?php
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Medizin_WP_Widget_Posts' ) ) {
	class Medizin_WP_Widget_Posts extends Medizin_Widget {

		public function __construct() {
			$cat_options = array(
				'recent_posts' => esc_html__( 'Recent Posts', 'medizin' ),
				'sticky_posts' => esc_html__( 'Sticky Posts', 'medizin' ),
			);
			$categories  = get_categories( 'hide_empty=0' );
			if ( $categories ) {
				foreach ( $categories as $category ) {
					$cat_options[ $category->term_id ] = esc_html__( 'Category: ', 'medizin' ) . $category->name;
				}
			}

			$this->widget_id          = 'medizin-wp-widget-posts';
			$this->widget_cssclass    = 'medizin-wp-widget-posts';
			$this->widget_name        = esc_html__( '[Medizin] Posts', 'medizin' );
			$this->widget_description = esc_html__( 'Get list blog post.', 'medizin' );
			$this->settings           = array(
				'title'           => array(
					'type'  => 'text',
					'std'   => '',
					'label' => esc_html__( 'Title', 'medizin' ),
				),
				'cat'             => array(
					'type'    => 'select',
					'std'     => 'recent_posts',
					'label'   => esc_html__( 'Category', 'medizin' ),
					'options' => $cat_options,
				),
				'show_thumbnail'  => array(
					'type'  => 'checkbox',
					'std'   => 1,
					'label' => esc_html__( 'Show Thumbnail', 'medizin' ),
				),
				'show_categories' => array(
					'type'  => 'checkbox',
					'std'   => 1,
					'label' => esc_html__( 'Show Categories', 'medizin' ),
				),
				'show_date'       => array(
					'type'  => 'checkbox',
					'std'   => 0,
					'label' => esc_html__( 'Show Date', 'medizin' ),
				),
				'num'             => array(
					'type'  => 'number',
					'step'  => 1,
					'min'   => 1,
					'max'   => 40,
					'std'   => 5,
					'label' => esc_html__( 'Number Posts', 'medizin' ),
				),
			);

			parent::__construct();
		}

		public function widget( $args, $instance ) {
			$cat             = isset( $instance['cat'] ) ? $instance['cat'] : $this->settings['cat']['std'];
			$num             = isset( $instance['num'] ) ? $instance['num'] : $this->settings['num']['std'];
			$show_thumbnail  = isset( $instance['show_thumbnail'] ) && $instance['show_thumbnail'] === 1 ? 'true' : 'false';
			$show_categories = isset( $instance['show_categories'] ) && $instance['show_categories'] === 1 ? 'true' : 'false';
			$show_date       = isset( $instance['show_date'] ) && $instance['show_date'] === 1 ? 'true' : 'false';

			$this->widget_start( $args, $instance );

			if ( $cat === 'recent_posts' ) {
				$query_args = array(
					'post_type'           => 'post',
					'ignore_sticky_posts' => 1,
					'posts_per_page'      => $num,
					'orderby'             => 'date',
					'order'               => 'DESC',
					'no_found_rows'       => true,
				);
			} elseif ( $cat === 'sticky_posts' ) {
				$sticky     = get_option( 'sticky_posts' );
				$query_args = array(
					'post_type'      => 'post',
					'post__in'       => $sticky,
					'posts_per_page' => $num,
					'no_found_rows'  => true,
				);
			} else {
				$query_args = array(
					'post_type'           => 'post',
					'cat'                 => $cat,
					'ignore_sticky_posts' => 1,
					'posts_per_page'      => $num,
					'no_found_rows'       => true,
				);
			}

			$medizin_query = new WP_Query( $query_args );
			if ( $medizin_query->have_posts() ) {
				$count = $medizin_query->post_count;
				$i     = 0;
				?>
				<div class="post-list medizin-animation-zoom-in">
					<?php
					while ( $medizin_query->have_posts() ) {
						$medizin_query->the_post();
						$i++;
						$classes = array( 'post-item medizin-box' );
						if ( $i === 1 ) {
							$classes[] = 'first-post';
						} elseif ( $i === $count ) {
							$classes[] = 'last-post';
						}
						?>
						<div <?php post_class( implode( ' ', $classes ) ); ?> >
							<?php if ( $show_thumbnail === 'true' ) : ?>
								<div class="post-widget-thumbnail medizin-image">
									<a href="<?php the_permalink(); ?>">
										<?php if ( has_post_thumbnail() ) { ?>
											<?php Medizin_Image::the_post_thumbnail( array( 'size' => '100x80' ) ); ?>
											<?php
										} else {
											Medizin_Templates::image_placeholder( 100, 80 );
										}
										?>
									</a>
								</div>
							<?php endif; ?>
							<div class="post-widget-info">
								<?php if ( $show_categories === 'true' ) : ?>
									<div class="post-widget-categories">
										<?php the_category( ', ' ); ?>
									</div>
								<?php endif; ?>
								<h5 class="post-widget-title title-has-link">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
								<?php if ( $show_date === 'true' ) : ?>
									<span class="post-date style-1"><?php echo get_the_date( 'F d, Y' ); ?></span>
								<?php endif; ?>
							</div>
						</div>
						<?php
					} ?>
				</div>
				<?php
			}
			wp_reset_postdata();

			$this->widget_end( $args );
		}
	}
}
