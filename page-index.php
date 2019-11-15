<?php
    get_template_part('includes/header');
    b4st_main_before();
?>

<main id="main" class="container-fluid">

  <div class="row">

    <div class="col-sm px-0">
      <div id="content" role="main">
        <!-- OWL CAROUSEL HOME -->
        <div class="owl-carousel owl-theme owl-carousel-home">
          <div class="carousel-header-90 d-flex" style="background:url('<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/cabecera.png') center 20% / cover no-repeat;">
              <div class="frase text-right">
                <h2 class="semi-bold">Te Conecta a
                  <br>
                  <span class="destacado-verde"> tu Futuro</span>
                </h2>
              </div>
          </div>
        </div>
        <!-- /. OWL CAROUSEL HOME -->
        <!-- CONTENEDOR GENERAL -->
        <div class="fondoGeneral p-2">
          <section class="" id="proyectoDestacado">

          </section>
          <section id="teConectamos">

          </section>
          <section id="ultimasNovedades">

          </section>
        </div>
        <!-- /. CONTENEDOR GENERAL -->
        <?php get_template_part('includes/includes/includes/includes/loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->

</main><!-- /.container -->

<!-- Formulario contactanos home -->
<div class="contenedor-formulario-contactanos d-flex flex-wrap ml-n5 ecfc">
  <div class="formulario-contactanos d-flex flex-column justify-content-around p-4">
    <h2 class="upper text-center semi-bold">Contáctanos</h2>
    <input type="text" name="nombreContacto" placeholder="Nombre">
    <input type="text" name="nombreContacto" placeholder="Nombre">
    <input type="text" name="telefonoContacto" placeholder="Telefono">
    <input type="text" name="emailContacto" placeholder="Email">
    <textarea name="mensajeContacto" id="mensajeContacto" cols="30" rows="5"></textarea>
    <div class="btn bg-verde enviaContacto text-center text-white p-2 mx-auto">
      <p class="m-0">Contactar</p>
    </div>
  </div>
  <div class="btn-contactanos bg-verde text-white upper d-flex justify-content-center align-items-center p-3">
    <p class="m-0">contactanos  ▼</p>
  </div>
</div>

<!-- /. Formulario contactanos home -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>