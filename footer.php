<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hackathon
 */

?>
	<footer id="colophon" class="site-footer pt-8 pb-5">
		<div class="container">
		    <div class="row">
	            <div class="col-12 col-md-4">
					<?php if(is_active_sidebar('footer-1')) : ?>
						<?php dynamic_sidebar('footer-1') ?>
					<?php endif ?>
	            </div>

	            <div class="col-12 col-md-4">
					<?php if(is_active_sidebar('footer-2')) : ?>
						<?php dynamic_sidebar('footer-2') ?>
					<?php endif ?>
	            </div>

	            <div class="col-12 col-md-4">
					<?php if(is_active_sidebar('footer-3')) : ?>
						<?php dynamic_sidebar('footer-3') ?>
					<?php endif ?>
	            </div>
	        </div>
		</div>
	</footer>
	
	<!-- #colophon -->
	<section class="site-info">
		<div class="container">
		    <div class="row">
				<div class="col-12 py-4 text-center">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'hackathon' ), 'hackathon', '<a href="http://underscores.me/">Amoy Nicholson</a>.  All Rights Reserved' ); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
