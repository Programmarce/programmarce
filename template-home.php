<?php
/*template name: home*/

mostrarRuta(0, __FILE__);
get_header();
?>
<main class="main_template">
    <!--slider ini-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/keyboar.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Creamos tu Pagina Web ya!</h1>
                    <p>Ponete en contacto con nosotros. <br> Empeza hoy a ver tu sitio Web.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/business.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Inverti en tu Negocio Digital</h5>
                    <p>Aprovecha la tecnologia para llegar mas lejos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/hands.jpg" class="d-block w-100" alt="...">
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
    <!--slider fin-->
    <div style="height: auto; margin: 1rem;">
        <div class="container text-center">
            <div class="row">
                <div class="col card_conten">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-cartel-standar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Standar</h5><ion-icon class="icon-fonsize" name="ribbon-outline"></ion-icon>
                                <h5 class="card-title">$ 40.000 ARS</h5>
                            </div>
                            <p class="card-text">Obtene una pagina web ya!<br> En pocos pasos y de forma sencilla.</p>
                            <ul>
                                <li>Hosting incluido</li>
                                <li>Dominio incluido</li>
                                <li>3 Secciones</li>
                                <li>Certificado SSL</li>
                                <li>SEO Basic</li>
                                <li>Logo</li>
                                <li>Redes sociales</li>
                                <li>Galeria de imagenes</li>
                                <li>Protección y Respaldo</li>
                                <li>Feedback cliente - asesor</li>
                            </ul>
                            <a href="#" class="btn btn-primary bg-theme" style="border: none;">Consultar</a>
                        </div>
                    </div>
                </div>
                <div class="col card_conten">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-cartel-proweb.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pro web</h5><ion-icon class="icon-fonsize" name="diamond-outline"></ion-icon>
                            <h5 class="card-title">$ 70.000 ARS</h5>
                            <p class="card-text">Desarrollo, diseño y mantenimento de tu sitio activo.</p>
                            <ul>
                                <li>Hosting incluido</li>
                                <li>Dominio incluido</li>
                                <li>5 Secciones</li>
                                <li>Formulario de Contacto</li>
                                <li>Certificado SSL</li>
                                <li>SEO Complete</li>
                                <li>Logo</li>
                                <li>Redes sociales</li>
                                <li>Galeria de imagenes</li>
                                <li>Protección y Respaldo</li>
                                <li>Asesoramiento continuo</li>
                                <li>Feedback cliente - asesor</li>
                            </ul>
                            <a href="#" class="btn btn-primary bg-theme" style="border: none;">Consultar</a>
                        </div>
                    </div>
                </div>
                <div class="col card_conten">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-cartel-premium.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Premium </h5> <ion-icon class="icon-fonsize" name="trophy-outline"></ion-icon>
                            <h5 class="card-title" style="text-decoration-line: line-through; font-weight: 400;">$ 100.000 ARS</h5>
                            <h5 class="card-title" style="text-shadow: 1px 1px 2px #6a0fbd;">$ 90.000 ARS</h5><span style="color: red; font-weight: bold">Limited time </span><ion-icon class="icon-fonsize" name="hourglass-outline"  style="color: red;"></ion-icon>
                            <p class="card-text">Desempeño dedicado a tu sitio. Implementación de SEO full, Seguridad y Mantenimiento premium</p>
                            <ul>
                                <li>Hosting incluido</li>
                                <li>Dominio incluido</li>
                                <li>8 Secciones</li>
                                <li>Formulario de Contacto</li>
                                <li>Certificado SSL</li>
                                <li>SEO Premium</li>
                                <li>Logo Custom</li>
                                <li>Redes sociales</li>
                                <li>Interación con Whatsapp</li>
                                <li>Galeria de imagenes</li>
                                <li>Protección Total</li>
                                <li>Antivirus y contrafuegos</li>
                                <li>Asesoramiento full</li>
                                <li>actualizaciones incluidas</li>
                                <li>Feedback cliente - asesor</li>
                            </ul>
                            <a href="#" class="btn btn-primary bg-theme" style="border: none;">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>