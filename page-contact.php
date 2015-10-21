<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>

<p><?php the_field('nom_&_prenom'); ?></p>
<p><?php the_field('email'); ?></p>
<textarea><?php the_field('ecrire_un_message'); ?></textarea>