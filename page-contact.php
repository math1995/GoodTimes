<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
 <section class="content">
           <div class="bg-img"> 
                <form action="<?php my_send_mail(); ?>" method = "POST" class="desktop">
                    <h2>Contactez nous wesh</h2>
                    <input placeholder="Nom et Prénom"></input>
                    <input placeholder="Email"></input>
                    <textarea placeholder="Message"></textarea><br>
                    <button type="submit" class="action-button shadow animate red">Envoyer !</button>
                </form>
            </div><br><br>
        
</section>
<section class="team">
 <div class="clear"></div>
            <?php
            $args = array( 'post_type' => "L'Equipe", 'posts_per_page' => 5 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    echo '<img class="img-circle">';
                    the_post_thumbnail(array(100, 100));
                    echo '</>';
                    the_title();
                endwhile;
            ?>
</section>


<?php get_footer(); ?>

