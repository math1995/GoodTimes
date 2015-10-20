<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('style.css'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>

 <header>
    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
     <nav>
       <ul>
        <li> <a href="#">Acceuil</a></li>
        <li> <a href="#">Journal</a></li>
        <li> <a href="#">Contact</a></li>
        <li> <a href="#">A propos</a></li>
       </ul>
       <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
   </header>