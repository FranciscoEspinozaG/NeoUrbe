<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white-alpha p-4 shadow">

  
  <div class="col-10 mx-auto d-flex justify-content-between align-items-center px-0 ">

    <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/logo.png" height="61">

    <ul class="d-flex flex-wrap m-0">
      <li class="btn mx-2 seccion-actual">Inicio</li>
      <li class="btn mx-2">Proyectos</li>
      <li class="btn mx-2">Somos</li>
      <li class="btn mx-2">Inversionistas</li>
    </ul>
    
    <!-- <img src="<?php get_site_url(); ?>" alt="" class="destacar p-5"> -->
    <?php //b4st_navbar_brand();?>

    <!-- <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="destacar collapse navbar-collapse d-none" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>
      <?php //b4st_navbar_search();?>    
    </div> -->

    

  </div>
</nav>
<?php b4st_navbar_after();?>