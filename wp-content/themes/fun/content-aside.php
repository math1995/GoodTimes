<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @since 1.0.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3 class="post-format"><?php printf( __( '%s Aside', 'national' ), '<i class="fa fa-asterisk"></i>' ); ?></h3>

	    <div class="entry-content description clearfix">
		    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'national') ); ?>
	    </div><!-- .entry-content -->

	    <?php get_template_part( 'content', 'footer' ); ?>
	</article>