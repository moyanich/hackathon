
<section class="team">
    <div class="container-md">
        <div class="row mb-5">
            <div class="col-12 text-center text-capitalize">
                <h5 class="sub-heading"><?php the_sub_field('sub_heading'); ?></h5> 
                <h2 class="heading"><?php the_sub_field('title'); ?></h2>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array( 'post_type' => 'team', 'posts_per_page' => 6 );
            $query_team= new WP_Query( $args ); 
            while ( $query_team->have_posts() ) : $query_team->the_post(); ?>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card card-team">
                        <div class="card-top position-relative">
                            <a href="<?php the_permalink();?>" class="">
                                <?php if ( has_post_thumbnail() ) {
                                    echo the_post_thumbnail('full', array('class' => 'card-img-top')); 
                                } ?>
                            </a>

                            <?php
                                // Check value exists.
                                if( have_rows('social_media') ):
                                    echo '<ul class="social-media-links">';
                                        while ( have_rows('social_media') ) : the_row();

                                            $social_site = get_sub_field('social_site');

                                            $social_link = get_sub_field('site_url');

                                            if( $social_site) {
                                                if ($social_site == "Facebook") {
                                                    echo '<li><a class="fb_url" href="' . esc_html($social_link) . '" target="_blank"><i class="bi bi-facebook"></i></a></li>';
                                                }
                                                if ($social_site == "Twitter") {
                                                    echo '<li><a class="fb_url" href="' . esc_html($social_link) . '" target="_blank"><i class="bi bi-twitter"></i></a></li>';
                                                }
                                                if ($social_site == "Instagram") {
                                                    echo '<li><a class="fb_url" href="' . esc_html($social_link) . '" target="_blank"><i class="bi bi-instagram"></i></a></li>';
                                                }
                                                if ($social_site == "LinkedIn") {
                                                    echo '<li><a class="fb_url" href="' . esc_html($social_link) . '" target="_blank"><i class="bi bi-linkedin"></i></a></li>';
                                                }
                                                if ($social_site == "Youtube") {
                                                    echo '<li><a class="fb_url" href="' . esc_html($social_link) . '" target="_blank"><i class="bi bi-youtube"></i></a></li>';
                                                }
                                            }
                                        endwhile;
                                    echo '</ul>';
                                else :
                                    // Do something...
                            endif; ?>
                        </div>
                        <div class="card-body team-body">
                            <h4 class="card-title team-title"><?php the_title(); ?></h4>
                            <?php 
                            $position = get_field('position' ); 
                            
                            if ($position) {
                                echo '<p class="team-position">' . $position  . '</p>';
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;  wp_reset_postdata(); ?>
        </div>
    </div>
</section>

