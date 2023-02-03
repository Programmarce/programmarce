<?php
/*template name: home*/

mostrarRuta(0, __FILE__);
get_header();

/*** DATA PACKAGE ini ***/
$paquetes = array(
    $basicstatic = dataPacks(
        true,
        "banner-cartel-standar.png",
        "Basic Static",
        "",
        "",
        "25.000",
        "",
        "1.500",
        "Nuevo pack, Proximamente.",
        array()
    ),
    $standar = dataPacks(
        true,
        "banner-cartel-standar.png",
        "Standard",
        "",
        "",
        "40.000",
        "",
        "3.000",
        "Obtene una pagina web ya!<br>En pocos pasos y de forma sencilla.",
        array(
            " Hosting incluido",
            "Dominio incluido",
            "3 Secciones",
            "Certificado SSL",
            "SEO Basic",
            "Logo",
            "Redes sociales",
            "Galeria de imagenes",
            "Protección y Respaldo",
            "Feedback cliente - asesor"
        )
    ),
    $proweb = dataPacks(
        true,
        "banner-cartel-proweb.png",
        "Pro Web",
        "diamond-outline",
        "",
        "65.000",
        "",
        "3.000",
        "Desarrollo, diseño y mantenimento de tu sitio activo.",
        array(
            "Hosting incluido",
            "Dominio incluido",
            "5 Secciones",
            "Formulario de Contacto",
            "Certificado SSL",
            "SEO Complete",
            "Logo",
            "Redes sociales",
            "Galeria de imagenes",
            "Protección y Respaldo",
            "Asesoramiento continuo",
            "Feedback cliente - asesor"
        )
    ),
    $premium = dataPacks(
        true,
        "banner-cartel-premium.png",
        "Premium",
        "trophy-outline",
        "90.000",
        "85.000",
        "Limited time",
        "3.000",
        "Desempeño dedicado a tu sitio. Implementación de SEO full, Seguridad y Mantenimiento premium.",
        array(
            "Hosting incluido",
            "Dominio incluido",
            "8 Secciones",
            "Formulario de Contacto",
            "Certificado SSL",
            "SEO Premium",
            "Logo Custom",
            "Redes sociales",
            "Interación con Whatsapp",
            "Galeria de imagenes",
            "Protección Total",
            "Antivirus y contrafuegos",
            "Asesoramiento full",
            "actualizaciones incluidas",
            "Feedback cliente - asesor"
        )
    )
);
/*** DATA PACKAGE fin ***/
//elegir icons: https://ionic.io/ionicons
?>
<style>/*.main-header {display: none;*//*@todo debugger*/}</style>
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
                <!--verificando si hay packs-->
                <?php if (!empty($paquetes)) : ?>
                    <!--recorrer el array con un foreach-->
                    <?php foreach ($paquetes as $pack) : ?>
                        <?php
                        $name_icon = !empty($pack["icon"]) ? $pack["icon"] : "ribbon-outline";
                        ?>
                        <!--check mostrar pack.-->
                        <?php if ($pack["mostrar"]) : ?>
                            <!--maquetar ini:-->
                            <div class="col card_conten">
                                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/banners/' . $pack['name img']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title"><?php echo $pack["name pack"]; ?></h5><ion-icon class="icon-fonsize" name="<?php echo $name_icon; ?>"></ion-icon>
                                            <?php if ($pack["precio tachado"]): ?>
                                                <h5 class="card-title" style="text-decoration-line: line-through; font-weight: 400;"><?php echo '$ ' . $pack['precio tachado'] . ' ARS'; ?></h5>
                                                <h5 class="card-title" style="text-shadow: 1px 1px 2px #6a0fbd;"><?php echo '$ ' . $pack['precio'] . ' ARS'; ?></h5><span style="color: red; font-weight: bold"><?php echo $pack['texo limite']; ?> </span><ion-icon class="icon-fonsize" name="hourglass-outline"  style="color: red;"></ion-icon>
                                            <?php else : ?>
                                                <h5 class="card-title"><?php echo '$ ' . $pack['precio'] . ' ARS'; ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <p class="card-text"><?php echo $pack["description"]; ?></p>
                                        <p class="" style="text-shadow: 1px 1px 2px #d352e3;color: #8022fd;"><?php echo 'Pago único + Abono $' . $pack['abono'] . ' ARS (Opcional)'; ?></p>
                                        <ul>
                                            <?php if (!empty($pack["skills"])) : ?>
                                                <?php foreach ($pack["skills"] as $skill) : ?>
                                                    <li>
                                                        <?php echo $skill;?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <li>
                                                    <?php echo "proximamente <br> aún no disponible";?>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <a href="#" class="btn btn-primary bg-theme" style="border: none; margin-top: 1.5rem;">Consultar</a>
                                    </div>
                                </div>
                            </div>
                            <!--maquetar fin:-->
                        <?php else : ?>
                            <!--debbuger-->
                            <pre style="display: none;"><?php echo "no se puede mostar el pack: ". $pack['name pack']; ?></pre>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
                <!--fin verificar paquetes-->
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>

