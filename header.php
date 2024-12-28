<!DOCTYPE html>
<html <?php language_attributes(); ?>   >
<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Portafolio de [Tu Nombre]</title> -->      
    <!-- animate css cdnjs -->
    
    <?php wp_head(); ?>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" tabindex="0" >
    <?php wp_body_open(); ?>

    <header class="pt-4 encabezado bg-dark fixed-top  ">
        <div class="container-fluid gx-5 py-3">
            
            <div class="row align-items-center">
                <div class="enbezado__logo col col-md-2 px-2 px-md-4">
                <?php the_custom_logo(); ?>
                </div>


                <div class="encabezado__hamburguesa col text-center">
                <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-menu.svg" alt="menu icon">
                    </a>
                </div>

                <div class="encabezado__menu col col-md-5">
                <?php wp_nav_menu(
                        array(
                            "menu" => 'menu-principal'
                        )
                    ); ?>
                </div>

            </div>

             
        <div class="row ">
            <div class="encabezado__menu-responsive  text-center col-6 m-auto  ">
            <?php wp_nav_menu(
                        array(
                            "menu" => 'menu-responsive'
                        )
                    ); ?>
        </div>
        
    </div>    

        </div>
    </header>

      <!-- Hero Section -->
      <div class="hero">