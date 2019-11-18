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
        <div class="fondoGeneral py-5">
          <section class="container d-flex flex-column align-items-center justify-content-center py-5" id="proyectoDestacado">
            <h2 class="black mb-5">Proyecto Destacado</h2>
            <div class="owl-carousel owl-theme owl-carousel-proyectos">
              <!-- ITEM UNO -->
              <div class="item-carousel-proyectos w-100 d-flex flex-wrap flex-wrap-reverse">
                <div class="col-12 col-md-6 p-0">
                  <h3 class="text-center text-md-left titulo-proyecto black">Proyecto Edificio Neo Cisterna</h3>
                  <div class="estado-proyecto bg-verde col-12 col-md-5 p-2">
                    <p class="text-white text-center mx-0 my-2">Entrega inmediata</p>
                  </div>
                  <p class="m-0 text-light-gray text-center text-md-left my-2">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                  </p>
                  <div class="col destacar d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-2 col-md-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/001-scale.png" alt="">
                    <p class="m-0 col">52m² a 95.4m²</p>
                  </div>
                  <div class="col destacar d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/002-bed.png" alt="">
                    <p class="m-0 col">2 a 4 habitaciones</p>
                  </div>
                  <div class="col destacar d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/003-bathtub.png" alt="">
                    <p class="m-0 col">2 a 4 habitaciones</p>
                  </div>
                  <h3 class="desde-uf semi-bold text-center text-md-left">
                    Desde 3.920 UF
                  </h3>
                  <a href="#" class="btn-irAProyecto bg-verde p-2 my-0 text-center text-white d-flex justify-content-center align-items-center col-6 mx-auto">
                    Ir a proyecto
                  </a>
                  <div id="botonera-owlCarouselProyectos" class="w-100 d-flex flex-wrap justify-content-between p-0">
                    <div class="col-2 bg-verde text-white text-center p-2 similBtnPrev">
                      ◂
                    </div>
                    <div class="col-2 bg-verde text-white text-center p-2 similBtnNext">
                      ▸
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/img-edificio.png" alt="" class="foto-proyecto">
                </div>
              </div>
              <!-- /ITEM UNO -->
              <!-- ITEM DOS -->
              <div class="item-carousel-proyectos w-100 d-flex flex-wrap flex-wrap-reverse">
                <div class="col-12 col-md-6 p-0">
                  <h3 class="text-center text-md-left titulo-proyecto black">Proyecto Edificio Neo Centro</h3>
                  <div class="estado-proyecto bg-verde col-12 col-md-5 p-2">
                    <p class="text-white text-center mx-0 my-2">Entrega inmediata</p>
                  </div>
                  <p class="m-0 text-light-gray text-center text-md-left my-2">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                  </p>
                  <div class="w-100 d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-2 col-md-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/001-scale.png" alt="">
                    <p class="m-0">52m² a 95.4m²</p>
                  </div>
                  <div class="w-100 d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/002-bed.png" alt="">
                    <p class="m-0">2 a 4 habitaciones</p>
                  </div>
                  <div class="w-100 d-flex flex-wrap p-0 text-center justify-content-start align-items-center my-2">
                    <img class="col-1 mr-2" src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/003-bathtub.png" alt="">
                    <p class="m-0">2 a 4 habitaciones</p>
                  </div>
                  <h3 class="desde-uf semi-bold text-center text-md-left">
                    Desde 3.920 UF
                  </h3>
                  <a href="#" class="btn-irAProyecto bg-verde p-2 my-0 text-center text-white d-flex justify-content-center align-items-center col-6 mx-auto">
                    Ir a proyecto
                  </a>
                  <div id="botonera-owlCarouselProyectos" class="w-100 d-flex flex-wrap justify-content-between p-0">
                    <div class="col-2 bg-verde text-white text-center p-2 similBtnPrev">
                      ◂
                    </div>
                    <div class="col-2 bg-verde text-white text-center p-2 similBtnNext">
                      ▸
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/img-edificio.png" alt="" class="foto-proyecto">
                </div>
                <!-- /ITEM DOS -->
              </div>
            </div>            
          </section>
          <section class="container d-flex flex-column align-items-center justify-content-center py-5" id="teConectamos">
            <h2 class="black mb-5">Te Conectamos</h2>
            <div id="contenedorDetalles" class="w-100 d-flex flex-wrap p-0">
              <div class="d-flex flex-column justify-content-center align-items-center cajaDetalleIcono border text-center">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/manos.png" alt="">
                <h3 class="black">Excelentes<br>Servicios</h3>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center cajaDetalleIcono border text-center">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/manos.png" alt="">
                <h3 class="black">Excelentes<br>Servicios</h3>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center cajaDetalleIcono border text-center">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/modelado.png" alt="">
                <h3 class="black">Mejores<br>espacios</h3>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center cajaDetalleIcono border text-center">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/neoUrbe/assets/img/diamante.png" alt="">
                <h3 class="black">Detalles<br>elegantes</h3>
              </div>
            </div>
          </section>
          <section class="container d-flex flex-column align-items-center justify-content-center py-5" id="ultimasNovedades">
            <h2 class="black mb-5">Últimas novedades</h2>
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