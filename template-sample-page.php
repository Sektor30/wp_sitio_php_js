<?php
/*
Template Name: Plantilla Sample Page
*/
get_header();
?>

<main>
    <div class="content col-8  m-auto py-4">
        <h1><?php the_title(); ?></h1>
        <div>
            <?php
            // Contenido dinámico de la página
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
