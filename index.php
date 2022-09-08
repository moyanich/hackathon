<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hackathon
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="blog-page">
			<div class="container">
				<div class="row mb-5">

					<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif; 

							echo '<div class="col-12 col-md-8 col-lg-8 content-area">';

								/* Start the Loop */
								while ( have_posts() ) :
									the_post(); ?>

										<article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
											<div class="card card-blog">
												<?php the_post_thumbnail('large', array('class' => 'card-img-top' )); ?>
												
												<div class="card-body" style="padding: 3em;">
													<?php
														the_title( '<h5 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
													?>

													<div class="post-content">
														<div class="entry-content">
															<?php the_excerpt(); ?>
																<div class="post-footer readmore-btn-area"><a class="readmore" href="<?php esc_url( get_permalink() ); ?>">Read More <i class="bi bi-arrow-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</article><!-- #post-<?php the_ID(); ?> -->

									<?php
									endwhile;
								echo '<div class="mt-5">';
									the_posts_navigation();
								echo '</div>';

							echo '</div>';
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>

					<div class="col-12 col-md-4 col-lg-4">
						<?php
							get_sidebar();
						?>
					</div>
				
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
