<?php   

function plz_assets(){

    wp_register_style("google-fonts","https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap",array(),false,'all' );
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(),"5-1",'all');

    wp_register_style("owl-carousel-uno","https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",array(),false,'all');
    wp_register_style("owl-carousel-dos","https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css",array(),false,'all');
    
    
    wp_register_style("animated","https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css",array(),"false",'all');

    wp_enqueue_style("estilos",get_template_directory_uri()."/assets/style/style.css",array("google-fonts","bootstrap","animated","owl-carousel-uno","owl-carousel-dos"));


    wp_enqueue_script("jquery-cdn", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), "3.7.1", true);
    // Registrar y colocar en cola Owl Carousel desde CDN
    wp_enqueue_script("owl-carousel-js", "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array("jquery-cdn"), "2.3.4", true);

    // Colocar en cola los scripts locales script.js
    wp_enqueue_script("script.js", get_template_directory_uri() . "/assets/js/script.js", array("jquery-cdn"), null, true);
    
    // Colocar en cola los scripts locales
    wp_enqueue_script("portafolio-js", get_template_directory_uri() . "/assets/js/plugin.js", array("jquery-cdn", "owl-carousel-js"), null, true);
    

}

// Hook para cargar los recursos
    add_action("wp_enqueue_scripts","plz_assets");


    // Agregar favicon
function add_favicon() {
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/img/removebg-preview.png" type="image/x-icon">';
}

    // Hook para agregar el favicon
add_action("wp_head", "add_favicon");


// agregar linea codigo html
function plz_analytics() {
    ?>
    
    <?php    

}

add_action("wp_body_open","plz_analytics");


function plz_theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', 
    array(
        "height" => 35,
        "width"=> 170,
        "flex-width" => true,
        "flex-height" => true,

    )
);

}

add_action("after_setup_theme","plz_theme_supports");


function plz_add_menus(){
    register_nav_menus(
        array(  
        'menu-principal' => "Menu principal",
        'menu-responsive' => "Menu responsive"
        )
    );

}

add_action("after_setup_theme","plz_add_menus");


function plz_add_sidebar(){
    register_sidebar(
        array('name' => 'pie de pagina',
        'id' => 'pie-pagina',
        'before_widget' => '',
        'after_widget'=> '',
        )
        
    );
}
add_action("widgets_init","plz_add_sidebar");


function plz_add_costum_post_type(){

    $labels = array(
        'name'          => 'Producto', // Nombre general del tipo de contenido.
        'singular_name' => 'Producto', 
        'all_items'     => 'Todos los productos', 
        'add_new'       => 'Añadir producto',
        'add_new_item'  => 'Nuevo Producto',
    );

    $args = array(
        'labels'             => $labels, // Etiquetas del tipo de contenido (se definen previamente).
        'description'        => 'Proyectos para listar en un dossier', // Descripción del tipo de contenido.
        'public'             => true, // Indica si el contenido será público.
        'publicly_queryable' => true, // Si se puede consultar mediante URL.
        'show_in_menu'       => true, // Si aparece en el menú de administración.
        'query_var'          => true, // Si se puede usar una variable de consulta (query var).
        'rewrite'            => array( 'slug' => 'producto' ), // Define el slug en la URL.
        'capability_type'    => 'post', // Tipo de permisos (similar a las publicaciones).
        'has_archive'        => true, // Habilita un archivo para listar los elementos.
        'hierarchical'       => false, // Indica si el contenido es jerárquico (como las páginas).
        'menu_position'      => 5, // Posición en el menú de administración.
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ), // Funciones soportadas.
        'taxonomies'         => array( 'category' ), // Taxonomías asociadas.
        'show_in_rest'       => true, // Habilita la API REST.
        'menu_icon'          => 'dashicons-cart', // Ícono del menú (carrito en este caso).
    );

    register_post_type('producto', $args);

}

add_action("init","plz_add_costum_post_type");


// Cambiar el texto de "Add New" en la barra de administración
function plz_change_admin_bar_labels($wp_admin_bar) {
    global $post_type;
    if ($post_type === 'producto') {
        $wp_admin_bar->add_node(array(
            'id'    => 'new-post',
            'title' => 'Nuevo Producto',
        ));
    }
}
add_action('admin_bar_menu', 'plz_change_admin_bar_labels', 999);