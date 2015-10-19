<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();
?>

<div class="container">
	<div class="row">
		<div id="primary" <?php bavotasan_primary_attr(); ?>>
			<?php
			while ( have_posts() ) : the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
					// Display a thumbnail if one exists and not on single post
					if( has_post_thumbnail() ) {
						?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'large', array( 'class' => 'image-full alignnone' ) ); ?>
						</a>
						<?php
					}
					?>

					<h1 class="entry-title page-header"><?php the_title(); ?></h1>

				    <div class="entry-content description clearfix">
					    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'national') ); ?>
				    </div><!-- .entry-content -->

				    <?php get_template_part( 'content', 'footer' ); ?>
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php
				comments_template( '', true );
			endwhile;
			?>
		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>