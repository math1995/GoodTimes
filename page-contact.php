<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
 	

 <section class="content">
           <div class="bg-img"> 
                <form method = "POST" class="desktop">
                    <h2> Faites nous signe !</h2>
                    <input placeholder="Nom et Prénom"><?php the_field('nom_&_prenom'); ?></input>
                    <input placeholder="Email"><?php the_field('email'); ?></input>
                    <textarea placeholder="Message"><?php the_field('ecrire_un_message'); ?></textarea><br>
                    <a href="#" >Envoyer</a>
                </form>
            </div>
            <form method = "POST" class="mobile">
                <h2> Faites nous signe ! </h2>
                <input placeholder="Nom et Prénom"><?php the_field('nom_&_prenom'); ?></input>
                <input placeholder="Email"><?php the_field('email'); ?></input>
                <textarea placeholder="Message"><?php the_field('ecrire_un_message'); ?></textarea><br>
                <input type="text" class="button" value="Envoyer"></input>
            </form>
        
</section>
<section class="team">
        <ul>
            <?php
            $terms = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy' => "L'Equipe") );
            foreach( (array) $terms as $term) {
            echo wp_get_attachment_image( $term->image_id, "L'Equipe" );
            }?>
            <!-- <li><img src="img/eden.png"><span> Eden <br>Bitton</span></li>
           <li><img src="<?php echo get_template_directory_uri() ?>/img/benjamin.png"></li>
             <li><img src="img/remi.png"><span> Rémi <br>Bonnet</span></li>
             <li><img src="img/benjamin.png"><span> Benjamin<br> Chareyron</span></li>
             <li><img src="img/noemie.png"><span> Noémie<br> Ferret</span></li>
             <li><img src="img/mathieu.png"><span> Mathieu <br>Levi</span></li> -->
             <div class="clear"></div>
        </ul>
</section>


<?php get_footer(); ?>

