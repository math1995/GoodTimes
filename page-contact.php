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
            <li><img src="http://lorempixel.com/150/150">Eden Bitton</li>
<!--            <li><img src="<?php echo get_template_directory_uri() ?>/img/benjamin.png"></li>-->
             <li><img src="http://lorempixel.com/150/150">Rémi Bonnet</li>
             <li><img src="http://lorempixel.com/150/150">Benjamin Chareyron</li>
             <li><img src="http://lorempixel.com/150/150">Noémie Ferret</li>
             <li><img src="http://lorempixel.com/150/150">Mathieu Levi</li>
        </ul>

</section>

<?php get_footer(); ?>

 

