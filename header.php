<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">   
    <title><?php bloginfo('name') ?> <?php wp_title('|', true, 'left') ?></title>

    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('template_url'); ?>/lib/owl.carousel.css"/>
    
    <script src="<?php bloginfo('template_url');?>/lib/owl.carousel.min.js"></script>
  </head>
  
  <header>   
      <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <div id="hamb">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </div>
            </button>
            <div class="navbar-brand"> <?php bloginfo('name'); ?></div>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <div class="hidden-mobile nav-search">
                  <?php get_search_form() ?>
            </div>
            <?= wp_nav_menu( array('theme_location' => 'main', "menu_class" => "nav navbar-nav") ); ?>
            <div class="nav-search-mobile hidden-menu">
                  <?php get_search_form() ?>
            </div>
          </div>
      </nav>
  </header>
    
