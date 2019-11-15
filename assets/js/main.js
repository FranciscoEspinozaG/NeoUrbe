$(function() {
    // BOTÓN DE FORMULARIO

    $('.btn-contactanos').on('click', function(){
        $('.contenedor-formulario-contactanos').toggleClass('ecfc');
    });

    // Owl Carousel Home

    $(".owl-carousel-home").owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeOur:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});