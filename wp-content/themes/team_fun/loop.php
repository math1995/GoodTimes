<?php if (have_posts()) : ?>
	<!-- Si j'ai des Posts, j'affiche cette partie -->
<?php while (have_posts()) : the_post(); ?>
		<!-- Pour CHAQUE Post, j'affiche ça -->
<?php endwhile; ?>

<?php else : ?>
		<!-- Si il n'y a pas de Post, j'affiche cette partie -->

<?php endif; ?>