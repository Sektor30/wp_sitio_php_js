<?php   

function plz_assets(){

    wp_register_style("google-fonts","https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap",array(),false,'all' );
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(),"5-1",'all');

    wp_register_style("owl-carousel-uno","https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",array(),"false",'all');
    wp_register_style("owl-carousel-dos","https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css",array(),"false",'all');
    
    wp_register_style("animated","https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css",array(),"false",'all');

    wp_enqueue_style("estilos",get_template_directory_uri()."/assets/style/style.css",array("google-fonts","bootstrap","animated","owl-carousel-uno","owl-carousel-dos"));

    wp_enqueue_script("jquery-cdn", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), "3.7.1", true);
    // Registrar y colocar en cola Owl Carousel desde CDN
    wp_enqueue_script("owl-carousel-js", "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array("jquery-cdn"), "2.3.4", true);

    // Colocar en cola los scripts locales
    wp_enqueue_script("portafolio-js", get_template_directory_uri() . "/assets/js/plugin.js", array("jquery-cdn", "owl-carousel-js"), null, true);
    

}

    add_action("wp_enqueue_scripts","plz_assets");
