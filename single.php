<?php 
    get_header()
?>

<div class="container-fluid " style="background: #cacaca;">

    <?php if(have_posts()){ ?>
    <?php while(have_posts()){ the_post(); ?>
    <div class="container col-6 mt-2 justify-content-center ">
        <div class="row ">
            <div class="col-12 fs-4 mt-5 pt-5 ">
                <?php the_content()?>
            </div>


            <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" target="_blank">
                <div class="imagen-wp col-4 col-lg-3 col-sm-4 text-center mt-5 mb-2">
                    <?php 
    if ( has_post_thumbnail() ) {
        // Mostrar tamaño medium en dispositivos móviles
        if ( wp_is_mobile() ) {
            the_post_thumbnail('medium', array('class' => 'img-fluid'));
        } else {
            // Mostrar tamaños responsivos para pantallas más grandes
            echo wp_get_attachment_image( 
                get_post_thumbnail_id(), 
                'large', 
                false, 
                array(
                    'class' => 'img-fluid',
                    'sizes' => '(max-width: 768px) 100vw, 33vw'
                )
                );
            }
        }
    ?>
                </div>
            </a>

        </div>
    </div>

                 <?php 
                 // Contenido personalizado para un post específico
                 if (is_single('mi-post-slug')) { 
                 ?>
                     <div class="custom-content">
                         <h2>Contenido Exclusivo para este Post</h2>
                         <p>Este es un contenido personalizado solo para el post con slug "mi-post-slug".</p>
                     </div>
                 <?php 
                 } elseif (is_single(42)) { 
                 ?>
                     <div class="custom-content">
                         <h2>Contenido para el Post con ID 42</h2>
                         <p>Este contenido es específico para el post con ID 42.</p>
                     </div>
                 <?php } ?>
             </div>
         <?php } ?>
     <?php } ?>
   
</div>


<?php 
    get_footer()
?>