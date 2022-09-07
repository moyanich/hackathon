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

        <section class="team">
            <div class="container-md">
                <div class="row">
                    <?php
                    $args = array( 'post_type' => 'team', 'posts_per_page' => 6 );
                    $query_team= new WP_Query( $args ); 
                    while ( $query_team->have_posts() ) : $query_team->the_post(); ?>

                        <div class="col-12 col-md-4 mb-4">
                            <div class="card card-team">
                                <a href="<?php the_permalink();?>" class="">
                                    <?php if ( has_post_thumbnail() ) {
                                        echo the_post_thumbnail('full', array('class' => 'card-img-top')); 
                                    } ?>
                                </a>

                                <div class="card-body team-body">
                                    <h4 class="card-title team-title"><?php the_title(); ?></h4>
                                    <?php 
                                    $position = get_field('position' ); 
                                    
                                    if ($position) {
                                        echo '<p class="team-position">' . $position  . '</p>';
                                    } 
                                    ?>
                                    
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>

                    <?php 
                    endwhile;  wp_reset_postdata(); ?>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); 

//https://coolors.co/palette/003049-d62828-f77f00-fcbf49-eae2b7
//https://coolors.co/palette/000814-001d3d-003566-ffc300-ffd60a