<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>

<?php
if(get_field('nom_&_prenom'))
{
	echo '<input(href="test.php" placeholder="Rentrez votre Nom et votre Prénom)>'. get_field('nom_&_prenom') . '</input>';
}

?>