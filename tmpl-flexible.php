<?php
/**
 * Template Name: Flexible Page Template
 *
 * @package hackathon
 *
 */

get_header(); 
?>

    <main id="primary" class="site-main">   
        <?php
            acf_display_pb_blocks();
        ?>
    </main>

<?php get_footer(); 
