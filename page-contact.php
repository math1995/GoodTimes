<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
 	

 <section class="container">
           <div class="bg-img"></div>
            <form method = "POST">
                <p><?php the_field('nom_&_prenom'); ?></p>
                <p><?php the_field('email'); ?></p>
                <p><?php the_field('ecrire_un_message'); ?></p>
            </form>
        
</section>

<?php get_footer(); ?>

 

