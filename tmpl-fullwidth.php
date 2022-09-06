<?php
/**
 * Template Name: Full Width Template
 *
 * @package hackathon
 *
 */

get_header(); 

$pageBackground = get_field( 'page_background');

?>

    <main id="primary" class="site-main">   
		<section style="background-image: url(<?php echo $pageBackground; ?>)">
			<div class="container py-5">

				<div class="row">
					
					<?php if( have_rows('flexible_layouts') ): ?>
						<?php while( have_rows('flexible_layouts') ): the_row(); ?>
							<?php if( get_row_layout() == 'two_column_layout' ): ?>
								<div class="col-12 col-md-8 contact-inner-1">
									<?php the_sub_field('column_one'); ?>
								</div>

								<div class="col-12 col-md-4 contact-inner-2">
									<?php the_sub_field('column_two'); ?>
								</div>
								
							<?php elseif( get_row_layout() == 'image' ): 
								$image = get_sub_field('image');
								?>
								<figure>
									<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
									<figcaption><?php echo $image['caption']; ?></figcaption>
								</figure>
							<?php endif; ?>
						<?php endwhile;
						
							else : 
							while ( have_posts() ) :
								the_post(); ?>
								<article >
									<div class="entry-content">
										<?php
										the_content();
										?>
									</div>
								</article>	

							<?php	
							endwhile; // End of the loop.
						endif; ?>



						

						<?php /* if( have_rows('group_two_columns') ): ?>
							<?php while( have_rows('group_two_columns') ): the_row(); 

								// Get sub field values.
								$image = get_sub_field('image');
								$link = get_sub_field('link');

								?>
								<div id="group_two_columns">
									
									<div class="content">
										<?php the_sub_field('column_one'); ?>
									</div>
								</div>
								<style type="text/css">
									#group_two_columns {
										background-color: <?php the_sub_field('color'); ?>;
									}
								</style>

								<div id="group_two_columns">
									<div class="content">
										<?php the_sub_field('column_two'); ?>
									</div>
								</div>
								<style type="text/css">
									#group_two_columns {
										background-color: <?php the_sub_field('color'); ?>;
									}
								</style>


							<?php endwhile; ?>
						<?php else : 
								while ( have_posts() ) :
									the_post(); ?>
									<article >
										<div class="entry-content">
											<?php
											the_content();
											?>
										</div>
									</article>	

								<?php	
								endwhile; // End of the loop.
							
					
						endif; */?>



					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php get_footer(); 

//https://demo.xpeedstudio.com/evenex/multi-event/contact-us/