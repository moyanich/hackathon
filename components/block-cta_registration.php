<?php
/**
 * Registration CTA
 * 
 * 
 * @package hackathon
 */


?>

<section class="cta-register">
    <div class="container-fluid p-0">
        <div class="row mb-5">

            <div class="col-12 col-md-6 text-center text-capitalize">
            <?php
                $image = get_sub_field('cta_image');

                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>


            <?php 
            
            if( have_rows('cta_registration_group') ):
                while( have_rows('cta_registration_group') ): the_row(); ?>

                    <div class="col-12 col-md-6 text-center text-capitalize">
                        <h5 class="sub-heading"><?php the_sub_field('sub_heading'); ?></h5> 
                        <h2 class="heading"><?php the_sub_field('title'); ?></h2>
                    </div>

                <?php endwhile; 
            endif; ?>

           
        </div>
    </div>
</section>