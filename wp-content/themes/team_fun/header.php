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
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
      <button class="menu-toggle"><?php _e( 'Primary Menu', 'good-day' ); ?></button>
      <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'good-day' ); ?></a>
      <?php wp_nav_menu( array('menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
  </header>