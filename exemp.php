<header class="encabezado">
        <div class="container-fluid gx-5 py-3">

            <div class="row">
               
                <div class="enbezado__logo col-5 col-md-2 px-2 px-md-4">
                     <?php the_custom_logo(); ?>
                </div>
                <div class="encabezado__menu  col-6 col-md-5">
                    <?php wp_nav_menu(
                        array(
                            "menu" => 'menu-principal'
                        )
                    ); ?>
                </div>
                
                <div class="encabezado__hamburguesa col-2">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-menu.svg" alt="menu icon">
                    </a>
                </div>
            </div>

            <div class="encabezado__menu-responsive">
            <?php wp_nav_menu(
                        array(
                            "menu" => 'menu-responsive'
                        )
                    ); ?>
            </div>


        </div>
    </header>