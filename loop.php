<?php if ( have_posts() ) : //Si il y a des contenus à afficher ?>
    <ul>
        <?php while ( have_posts() ) : the_post(); //Begin the loop ?>
            <?php get_template_part( 'content', 'whatever' ); //affiche le contenu de content-whatever.php pour chaque entrée trouvée ?>
        <?php endwhile; //End the loop ?>
    </ul>
<?php else : //Aucun contenu trouvé ?>
Désolé, aucune contenu à afficher.
<br />Voici nos contenus les plus populaires :
    <ul>
        <?php
        $popularpost = new WP_Query( array(
            'posts_per_page' => 4,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'post_type' => 'fichemoto',
        ) );
        ?>
        <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
            <?php get_template_part( 'content', 'whatever' ); //affiche le contenu de content-whatever.php pour chaque entrée trouvée ?>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>