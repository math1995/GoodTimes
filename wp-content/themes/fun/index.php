<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
	
				bavotasan_pagination();
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>