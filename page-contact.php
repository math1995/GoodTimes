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
<section class="team">
        <ul>
            <li><img src="http://lorempixel.com/150/150"></li>
<!--            <li><img src="<?php echo get_template_directory_uri() ?>/img/benjamin.png"></li>-->
             <li><img src="http://lorempixel.com/150/150"></li>
             <li><img src="http://lorempixel.com/150/150"></li>
             <li><img src="http://lorempixel.com/150/150"></li>
             <li><img src="http://lorempixel.com/150/150"></li>
        </ul>

</section>

<?php get_footer(); ?>

 

