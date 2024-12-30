<?php 
    get_header()
?>

<div class="container" style="padding-top: 200px;">
    <h1 class="display-4">Hola, Soy Sergio</h1>
    <p class="lead">Desarrollador Web | Diseñador Gráfico | Creativo</p>
    <a href="#projects" class="btn btn-primary btn-lg">Ver Proyectos</a>
</div>
</div>

<div class="contenedor border   "> 


<!-- wp_misproyectos -->

<?php if(have_posts()){ ?>
<?php while(have_posts()){ the_post(); ?>
<?php the_content()?>
<?php } ?>
<?php } ?>

<!-- Sobre Mí -->
<section id="about" class="container justify-content-center ">
    <div class="row">
    <h2 class="text-center animate__animated animate__backInDown animate__tada">Sobre Mí</h2>

    <p class="col-sm-8 align-item-center text-center  fs-4 m-auto ">Soy un desarrollador apasionado por crear soluciones web eficientes y atractivas. Con
        experiencia en diversas tecnologías y un enfoque en la usabilidad, me esfuerzo por entregar la mejor experiencia
        a los usuarios.</p>
    </div>
</section>





<?php
    $args = array(
        "post_type" => array("producto"),
        "posts_per_page"=> -1
    );

    $productos = new WP_Query($args);
?>



<!-- Proyectos -->

<section id="projects" class="container mt-5">

    <h2 class="text-center animate__animated animate__bounceIn">Proyectos</h2>
        <div class="row  justify-content-center" >
    
        <?php if($productos->have_posts()){ ?>
        <?php while($productos->have_posts()) { $productos->the_post();?>

            <div class="col-3 m-3 ">
                <div class="card p-3 ">
                    <img src="<?php the_post_thumbnail_url('post-thumbnail'); ?>" class="card-img-top"
                        alt="<?php the_title(); ?>">

                    <div class="card-img-top" alt="Proyecto 1">

                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text">Descripción breve del proyecto 1. Una solución creativa que resuelve un
                                problema.</p>

                            <a href="<?php the_permalink();?>" class="btn btn-primary ">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
                <?php  } ?>
            
    </div>
</section>

</div>

<!-- Habilidades -->
<section id="skills" class="container mt-5">
    <h2 class="text-center">Habilidades</h2>
    <div class="mt-4">
        <h5>HTML & CSS</h5>
        <div class="progress">
            <div class="progress-bar skill-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                aria-valuemin="0" aria-valuemax="100">90%</div>
        </div>
        <h5>JavaScript</h5>
        <div class="progress">
            <div class="progress-bar skill-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
        <h5>React</h5>
        <div class="progress">
            <div class="progress-bar skill-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <h5>Diseño Gráfico</h5>
        <div class="progress">
            <div class="progress-bar skill-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
    </div>
</section>

<!-- Set up your HTML -->
<div class="owl-carousel ">
    <div> <img src="https://cdn.pixabay.com/photo/2024/05/02/09/16/web-development-8734249_1280.png" alt="" width="">
    </div>
    <div> <img src="https://cdn.pixabay.com/photo/2018/05/18/15/30/web-design-3411373_1280.jpg" alt=""> </div>
    <div> <img src="https://cdn.pixabay.com/photo/2019/10/09/07/28/development-4536630_960_720.png" alt=""> </div>
    <div> <img src="https://github.com/Sektor30/chooj-design/blob/main/assets/chooj-ico.png?raw=true" alt=""> </div>
    <div> <img src="https://cdn.pixabay.com/photo/2016/02/18/19/25/pc-1207886_1280.jpg" alt=""> </div>
    <div> <img src="https://cdn.pixabay.com/photo/2020/09/27/13/15/data-5606639_960_720.jpg" alt=""> </div>
    <div> <img src="https://cdn.pixabay.com/photo/2024/09/08/08/52/man-9031574_1280.png" alt=""> </div>
</div>


<!-- Tabs Section -->
<section class="container mt-5">
    <h2 class="text-center">Más Sobre Mis Proyectos</h2>
    <ul class="nav nav-tabs justify-content-center mb-3" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
                aria-selected="true">Proyecto 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                aria-selected="false">Proyecto 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                aria-selected="false">Proyecto 3</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <p>Detalles sobre el Proyecto 1: tecnología utilizada, desafíos enfrentados, etc.</p>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <p>Detalles sobre el Proyecto 2: tecnología utilizada, desafíos enfrentados, etc.</p>
        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <p>Detalles sobre el Proyecto 3: tecnología utilizada, desafíos enfrentados, etc.</p>
        </div>
    </div>
</section>

<!-- Pills Section -->
<section class="container mt-5">
    <h2 class="text-center">Mis Intereses</h2>
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-tech-tab" data-bs-toggle="pill" href="#pills-tech" role="tab"
                aria-controls="pills-tech" aria-selected="true">Tecnología</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-design-tab" data-bs-toggle="pill" href="#pills-design" role="tab"
                aria-controls="pills-design" aria-selected="false">Diseño</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-other-tab" data-bs-toggle="pill" href="#pills-other" role="tab"
                aria-controls="pills-other" aria-selected="false">Otros Intereses</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-tech" role="tabpanel" aria-labelledby="pills-tech-tab">
            <p>Me encanta la tecnología y estar al tanto de las últimas tendencias.</p>
        </div>
        <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
            <p>El diseño es una parte crucial de lo que hago. Siempre busco mejorar mis habilidades.</p>
        </div>
        <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
            <p>También disfruto de la fotografía y la música como pasatiempos.</p>
        </div>
    </div>
</section>

<!-- Testimonios -->
<section id="testimonials" class="container mt-5">
    <h2 class="text-center">Testimonios</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0">"[Testimonio del cliente o colega]"</p>
                        <footer class="blockquote-footer">Nombre del Cliente</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0">"[Testimonio del cliente o colega]"</p>
                        <footer class="blockquote-footer">Nombre del Cliente</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0">"[Testimonio del cliente o colega]"</p>
                        <footer class="blockquote-footer">Nombre del Cliente</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section id="contact" class="container mt-5">
    <h2 class="text-center">Contacto</h2>
    <form>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Tu Nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Tu Correo">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Tu Mensaje"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>


    <?php 
    get_footer()
?>


<!-- new repo save --sektor30 -->