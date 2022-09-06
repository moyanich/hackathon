<?php
/**
 * Template Name: Contact Page Template
 *
 * @package hackathon
 *
 */

get_header(); ?>

    <main id="primary" class="site-main">   
        <div class="container">

        <h1>Hello, world!</h1>

        
        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			
		endwhile; // End of the loop.
		?>


        </div>

		




	</main><!-- #main -->


<?php get_footer(); 