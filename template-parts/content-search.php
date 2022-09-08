<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hackathon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 shadow'); ?>>
	<header class="entry-header">
		<?php /* if ( 'post' === get_post_type() ) : ?>
			
			<div class="entry-meta">
			<?php
			hackathon_posted_on();
			hackathon_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; */  ?>
	</header><!-- .entry-header -->

	<?php hackathon_post_thumbnail(); ?>

	<div class="entry-content" style="padding: 3em;">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>

	<?php /*
	<footer class="entry-footer">
		<?php hackathon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/?>
</article><!-- #post-<?php the_ID(); ?> -->
