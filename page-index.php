<?php
    get_template_part('includes/header');
    b4st_main_before();
?>

<main id="main" class="container-fluid destacar">
  <div class="row">

    <div class="col-sm">
      <div id="content destacar p-5" role="main">
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