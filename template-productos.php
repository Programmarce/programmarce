<?php
/*template name: productos*/

mostrarRuta(0, __FILE__);
get_header();
?>
<main class="main_template">
    <div style="margin: -1px 1rem 1rem 1rem;">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banners/banner-coffe.png" class="card-img-top" alt="...">
            <div class="card-body">
                <!--ini-->
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 70%; margin: 1.5rem auto 1.5rem auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/desin.jpeg" class="card-img-top" alt="..." style="max-width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title">Matenimiento del sitio</h5>
                        <p class="card-text">
                            Nuestros productos se basan en packs de servicios digitales. <br>
                            Ofrecemos 3 categorias iniciales, las cuales tienen definidas sus caracteristicas. <br>
                            El matenimiento de tu sitio te brinda una atención adicional ademas de los servicios propuestos.<br>
                            Es por ello que pactaremos en un feedback como coordinar los beneficios de este <strong>servio de mantenimiento especializado</strong> según el pack que eligas.<br>
                            Cada pack tiene un abono mensual de base y las especificaciones de lo que contempla el mantenimiento de tu sitio te lo explicara un asesor de manera detallada. <ion-icon class="icon-fonsize" name="footsteps-outline"></ion-icon>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!--fin-->
                <h5 class="card-title">Conocé nuestros Paquetes:</h5>
                <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-top: 1.5rem">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                Pack Standar
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="rocket-outline"></ion-icon> <strong>Tu sitio web ya !</strong> Este pack tiene como objetivo darte de manera rápida y sencilla un sitio web a corto plazo.</p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="trail-sign-outline"></ion-icon> Te ofrecemos un dominio (nombre de tu sitio en la web) y te asesoramos como gestionarlo. No te preocupes, cuando nos contactemos, un asesor te explicara como proceder, es fácil. <ion-icon class="icon-fonsize" name="happy-outline"></ion-icon><br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nicar.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones del hosting donde alojaremos tu sitio para que se vea en la web.
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> Te ofrecemos 3 secciones o paginas para navegar por tu sitio. Si necesitas mas, podemos cotizarlo y darte un mejor precio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Diseñamos tu logo si no tenes uno.
                                        <br>Nuestros desarrolladores pueden aplicar técnicas de diseños de marketing utilizando herramientas como Illustrator & Photoshop.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon> Certificado SSL incluido. Los certificados SSL de validación de dominio sirven para proteger sitios web personales o incluso portales de empresas y proyectos de comercio electrónico.
                                    </p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de SEO. Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para tu sitio web o blog que mejorarán su posicionamiento en los buscadores.</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Imcorporación de Redes sociasles (Facebook - instagram - Whatsaap - twiter - y otros que necesites aplicar).</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> Galeria de imagenes. Adaptamos la galeria de imagenes a lo que necesites.</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> Seguridad y respaldo da la base de datos y tus contenidos. Correos electornicos, bloques de intrusos y spams.</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> Feedback. Te ofresemos comunicación con uno de nuestros asesores para coordinar los requerimientos de tu sitio web.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Pack Pro Web
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="sparkles-outline"></ion-icon> <strong>Design Skills</strong> En este pack te ofrecemos propuestas de desarrollo, diseños que se adapten a lo que buscas. Matenimiento del sitio de 10hs dedicadas</p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="checkmark-done-outline"></ion-icon>Asesoramiento y gestión de Dominio. No te preocupes, cuando nos contactemos un asesor te explicara como proceder, es fácil.<br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dominio.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> Te ofrecemos 5 secciones o paginas para navegar por tu sitio. Si necesitas mas, podemos cotizarlo y darte un mejor precio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="today-outline"></ion-icon>Implementación de un <strong>Formulario de contacto</strong>. Esta herramienta te permite recolectar datos de los usuarios que visiten tu sitio web, tales como correo electrónico, número telefónico o ubicación.
                                        <br>El formulario sera estructurado con los campos que requieras. Si no entendes bien de que se trata, no te preocupes, nuestros asesores te lo explicaran...
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/formulario.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones del hosting donde alojaremos tu sitio para que se vea en la web.
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Diseñamos tu logo si no tenes uno.
                                        <br>Nuestros desarrolladores pueden aplicar técnicas de diseños de marketing utilizando herramientas como Illustrator & Photoshop.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon> Certificado SSL incluido. Los certificados SSL de validación de dominio sirven para proteger sitios web personales o incluso portales de empresas y proyectos de comercio electrónico.
                                    </p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de <strong>SEO Complete</strong>. Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para tu sitio web o blog que mejorarán su posicionamiento en los buscadores.
                                        <br>Implementamos la mejor optimización para motores de búsqueda. Un asesor te acompañara en este proceso.
                                    </p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Imcorporación de Redes sociasles (Facebook - instagram - Whatsaap - twiter - y otros que necesites aplicar).</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> Galeria de imagenes. Adaptamos la galeria de imagenes a lo que necesites.</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> Seguridad y respaldo da la base de datos y tus contenidos. Correos electornicos, bloques de intrusos y spams.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proteger.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> Feedback. Te ofrecemos comunicación con uno de nuestros asesores para coordinar los requerimientos de tu sitio web.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Pack Premium
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="trophy-outline"></ion-icon> <strong>Premium Protected</strong> Este pack es el más completo, por lo cual podemos ampliar horizontes, dedicarnos a tu sitio hasta lograr la mejor performance. Matenimiento del sitio de 15hs dedicadas.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/servicio-premium.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="trail-sign-outline"></ion-icon> Te ofrecemos un dominio y gestión del mismo. Asesoria completa y detallada. A medida que tengamos los feedback, te acompañaremos para que entiendas todo. Un asesor te explicara como proceder, no te preocupes.<br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nicar.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones del hosting donde alojaremos tu sitio para que se vea en la web.
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> Te ofrecemos 8 secciones o paginas para navegar por tu sitio. Si necesitas mas, podemos cotizarlo y darte un mejor precio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Diseñamos tu <strong>Logo Custom</strong> Logo perzonalizado. O agregamos el que tengas, lo mejoramos a tu gusto.
                                        <br>Nuestros desarrolladores pueden aplicar técnicas de diseños de marketing utilizando herramientas como Illustrator & Photoshop.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon> Certificado SSL incluido. Los certificados SSL de validación de dominio sirven para proteger sitios web personales o incluso portales de empresas y proyectos de comercio electrónico.
                                    </p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de <strong>SEO Complete</strong>. Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para tu sitio web o blog que mejorarán su posicionamiento en los buscadores.
                                        <br>Implementamos la mejor optimización para motores de búsqueda. Un asesor te acompañara en este proceso.
                                    </p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Imcorporación de Redes sociasles (Facebook - instagram - Whatsaap - twiter - y otros que necesites aplicar).</p>
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> Galeria de imagenes. Adaptamos la galeria de imagenes a lo que necesites.</p>
                                </div>
                                <div>
                                    <p>
                                        <ion-icon class="icon-fonsize md hydrated" name="today-outline" role="img" aria-label="today outline"></ion-icon>Implementación de un <strong>Formulario de contacto</strong>. Esta herramienta te permite recolectar datos de los usuarios que visiten tu sitio web, tales como correo electrónico, número telefónico o ubicación.
                                        <br>El formulario sera estructurado con los campos que requieras. Si no entendes bien de que se trata, no te preocupes, nuestros asesores te lo explicaran...
                                    </p>
                                    <img src="http://localhost/practica_wp/wp-content/themes/programmarce/assets/img/formulario.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> Seguridad y respaldo da la base de datos y tus contenidos. Correos electornicos, bloques de intrusos y spams. Imcorporamos antivirus y contrafuegos para proteger tu sitio.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proteger.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div>
                                    <p><ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> Feedback. Te ofrecemos comunicación con uno de nuestros asesores para coordinar los requerimientos de tu sitio web.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
