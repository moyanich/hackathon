<?php
/**
 * TWO COLUMN WISIWIG TEMPLATE
 * 
 * @package hackathon
 */

?>
<?php $customClass = get_sub_field('custom_class'); ?>

<section class="block block-two-columns-2 <?php echo $customClass; ?>">
    <div class="container">
        <div class="row">
			<?php if( have_rows('content_layout') ): ?>
				<?php while( have_rows('content_layout') ): the_row(); ?>
					<div class="col-12 col-sm-6 col-md-6 column-1">
						<?php the_sub_field('column_one'); ?>
					</div>
					<div class="col-12 col-sm-6 col-md-6 column-2">
						<?php the_sub_field('column_two'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
    	</div>
   </div>
</section>

