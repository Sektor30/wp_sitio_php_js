<?php   

function plz_assets(){

    wp_register_style("google-fonts","https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap",array(),false,'all' );
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(),"5-1",'all');

    wp_enqueue_style("estilos",get_template_directory_uri()."/assets/style/style.css",array("google-fonts","bootstrap"));

    wp_enqueue_script("portafolio-js",get_template_directory_uri()."/assets/js/plugin.js");
 

}

    add_action("wp_enqueue_script","plz_assets");
?>