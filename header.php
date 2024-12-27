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

    <!-- Navbar -->
   <nav
      class="navbar pt-4 navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid  ">

        <div>
            <?php the_custom_logo(); ?>
            </div>
        
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img
              src="https://cdn-icons-png.flaticon.com/128/15791/15791375.png"
              style="width: 40px"
              alt="menu"
          /></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#about">Sobre Mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
     </div>
    </nav>

      <!-- Hero Section -->
      <div class="hero">