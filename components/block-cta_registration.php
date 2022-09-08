<?php
/**
 * Registration CTA
 * 
 * @package hackathon
 */
?>

<section class="block-cta-register bg-dark">
    <div class="container-fluid p-0">
        <div class="row mb-5 m-0">
            <div class="col-12 col-md-6 p-0">
                <?php
                    $image = get_sub_field('cta_image');

                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="cta-image" />

                    <?php endif; 
                 ?>
            </div>

            <?php 
            if( have_rows('cta_registration_group') ):
                while( have_rows('cta_registration_group') ): the_row(); 
                
                    $subHeading = get_sub_field('sub_heading'); 
                    $heading = get_sub_field('title');
                    $btntext = get_sub_field('button_text'); 
                    $btnlink = get_sub_field('button_url'); 
                    $text_content = get_sub_field('text_content'); 
                ?>

                    <div class="col-12 col-md-6 text-left text-capitalize text-white" style="padding: 5em;">
                        <h5 class="sub-heading"><?php echo esc_attr($subHeading); ?></h5> 
                        <h2 class="heading text-white"><?php echo esc_attr($heading); ?></h2>

                        <div class="content pb-4 pt-4">
                            <?php echo $text_content; ?>
                        </div>

                        <?php if( !empty( $$btnlink ) ): ?>
                            <div  class="pb-4">
                                <a href="<?php echo esc_url($btnlink); ?>" class="btn-custom"><?php echo esc_attr($btntext); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php endwhile; 
            endif; ?>

        </div>
    </div>
</section>