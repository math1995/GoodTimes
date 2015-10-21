<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
 	
 <section class="content">
           <div class="bg-img"> 
                <form method = "POST" class="desktop">
                   <h2> Faites nous signe</h2>
                    <input><?php the_field('nom_&_prenom'); ?></input>
                    <input><?php the_field('email'); ?></input>
                    <textarea><?php the_field('ecrire_un_message'); ?></textarea>
                </form>
            </div>
            <form method = "POST" class="mobile">
               <h2> Faites nous signe</h2>
                <input><?php the_field('nom_&_prenom'); ?></input>
                <input><?php the_field('email'); ?></input>
                <textarea><?php the_field('ecrire_un_message'); ?></textarea>
            </form>
        
</section>
<section class="team">
        <ul>
            <li><img src="http://lorempixel.com/150/150"><span> Eden <br>Bitton</span></li>
<!--            <li><img src="<?php echo get_template_directory_uri() ?>/img/benjamin.png"></li>-->
             <li><img src="http://lorempixel.com/150/150"><span> Rémi <br>Bonnet</span></li>
             <li><img src="http://lorempixel.com/150/150"><span> Benjamin<br> Chareyron</span></li>
             <li><img src="http://lorempixel.com/150/150"><span> Noémie<br> Ferret</span></li>
             <li><img src="http://lorempixel.com/150/150"><span> Mathieu <br>Levi</span></li>
             <div class="clear"></div>
        </ul>
</section>

<?php get_footer(); ?>