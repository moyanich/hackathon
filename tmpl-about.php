<?php
/**
 * Template Name: About Page Template
 *
 * @package hackathon
 *
 */

get_header(); 
?>

    <main id="primary" class="site-main">   


		<section style="background-image: url(<?php echo $pageBackground; ?>)">
			<div class="container py-5">

            </div>
        </section>


        <?php
            acf_display_pb_blocks();
        ?>




        



    </main>

<?php get_footer(); 

//https://coolors.co/palette/003049-d62828-f77f00-fcbf49-eae2b7
//https://coolors.co/palette/000814-001d3d-003566-ffc300-ffd60a