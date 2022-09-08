<?php
/**
 * TWO COLUMN WISIWIG TEMPLATE with Headings
 * 
 * @package hackathon
 */
?>
<?php $customClass = get_sub_field('custom_class'); ?>
<section class="block-two-columns position-relative <?php echo $customClass; ?>">
    <div class="container position-relative">
        <div class="row">
            <?php if( have_rows('content_group') ): ?>
				<?php while( have_rows('content_group') ): the_row(); ?>
					
                <?php if( have_rows('column_one') ): ?>
                <?php while( have_rows('column_one') ): the_row(); 

                    $subHeading = get_sub_field('sub_heading'); 
                    $heading = get_sub_field('title');
                    $content = get_sub_field('content');
                    ?>
                    <div class="col-12 col-sm-6 col-md-6 pe-4 column-1">
                        <h5 class="sub-heading">
                            <?php echo esc_attr($subHeading); ?>
                        </h5> 
                        <h2 class="heading">
                            <?php echo esc_attr($heading); ?>
                        </h2>

                        <div class="content pb-4 pt-4">
                           <?php echo $content; ?>
                        </div>
                    </div>
                   
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('column_two') ): ?>
                <?php while( have_rows('column_two') ): the_row(); 

                    $subHeading2 = get_sub_field('sub_heading2'); 
                    $heading2 = get_sub_field('heading2');
                    $content = get_sub_field('content');
                    ?>
                    <div class="col-12 col-sm-6 col-md-6 column-2">
                        <h5 class="sub-heading">
                            <?php echo esc_attr($subHeading2); ?>
                        </h5> 
                        <h2 class="heading">
                            <?php echo esc_attr($heading2); ?>
                        </h2>

                        <div class="content pb-4 pt-4">
                           <?php echo $content; ?>
                        </div>
                    </div>
                   
                <?php endwhile; ?>
            <?php endif; ?>



				<?php endwhile; ?>
			<?php endif; ?>



           

    	</div>
   </div>
</section>

