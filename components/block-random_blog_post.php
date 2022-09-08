<section class="block random-post position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="heading-container text-center py-5">
                    <h5 class="sub-heading">Our Latest</h5> 
                    <h2 class="heading">News</h2>
                </div>
                
                <?php
                if( get_sub_field('display_post') == '1' ) {
                    
                    $args = array( 
                        'orderby' => 'rand',
                        'ignore_sticky_posts' => true,   
                        'posts_per_page' => '1', 
                    );
                    
                    $the_query = new WP_Query( $args ); ?>
                
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <div class="card shadow mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <?php the_post_thumbnail('full', array('class' => 'card-img-top' )); ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body p-5">
                                        <h5 class="card-title mb-4"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                                        <div class="card-text">
                                            <?php the_excerpt(__('(more…)')); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php 
                    endwhile;wp_reset_postdata(); 
                } ?>
            </div>
        </div>
    </div>
</section>



