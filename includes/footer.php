<?php b4st_footer_before();?>

<footer id="footer" class="mt-0 bg-dark p-5">

  <div class="container">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

  </div>

</footer>

<?php b4st_footer_after();?>

<?php //b4st_bottomline();?>

<?php wp_footer(); ?>
</body>
</html>
