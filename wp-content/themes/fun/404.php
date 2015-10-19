<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @since 1.0.0
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12">
			<article id="post-0" class="post error404 not-found">
				<i class="fa fa-frown-o"></i>
		    	<header>
		    	   	<h1 class="entry-title taggedlink"><?php _e( 'Oops! That page can&rsquo;t be found.', 'national' ); ?></h1>
		        </header>
	
		        <div class="entry-content description">
		            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'national' ); ?></p>	
		        </div>
		    </article>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>