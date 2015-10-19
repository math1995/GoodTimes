<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @since 1.0.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php // Conditional for RTL languages ?>
	    <div class="entry-content description">
		    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'national') ); ?>
	    </div><!-- .entry-content -->

	    <?php get_template_part( 'content', 'footer' ); ?>
	</article>