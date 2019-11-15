<?php
    get_template_part('includes/header');
    b4st_main_before();
?>

<main id="main" class="container-fluid">
  <div class="row">

    <div class="col-sm px-0">
      <div id="content" role="main">
        <div class="owl-carousel owl-theme owl-carousel-home">
          <div class="carousel-header-90 d-flex" style="background:url('<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/cabecera.png') center left / cover no-repeat;">
            <div class="frase text-right">
              <h2 class="semi-bold">Te Conecta a
                <br>
                <span class="destacado-verde"> tu Futuro</span>
              </h2>
            </div>
          </div>
        <?php get_template_part('includes/includes/includes/includes/loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>