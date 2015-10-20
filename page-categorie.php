<?php /* Template Name: page-categorie.php */ ?>


<?php get_header(); ?>

<!-- Affiche moi les catégories -->
<h1>Les recettes pour vos <?php get_taxonomy('categorie'); ?>
<div>
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
	?>
		<div id="date">
			<span>POSTÉE LE : </span><?php my_getRecipee_info($my_date); ?>
		</div>
		<div id="duration">
			<span>Durée : </span><?php my_getRecipee_info($duration); ?>
		</div>
		<div id="description">
			<?php blog_info('description'); ?>
		</div>
	<?php
	// End the loop.
	endwhile;
	?>
</div>

<?php get_footer(); ?>