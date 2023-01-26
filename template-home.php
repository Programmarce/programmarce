<?php
/*template name: home*/

mostrarRuta(0, __FILE__);
get_header();
?>
<main>
    <style type="text/css">
        .carousel-caption { top: 14rem; }
    </style>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/keyboar.jpg" class="d-block w-100" alt="..." style="height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Creamos tu Pagina Web ya!</h5>
                    <p>Ponete en contacto con nosotros. <br> Empeza hoy a ver tu sitio Web.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/business.jpg" class="d-block w-100" alt="..." style="height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Inverti en tu Negocio Digital</h5>
                    <p>Aprovecha la tecnologia para llegar mas lejos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/hands.jpg" class="d-block w-100" alt="..." style="height: 50rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tu negocio en manos de todo el mundo.</h5>
                    <p>mostrale a todos lo que ofreces.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <div style="height: 500px"></div>
</main>