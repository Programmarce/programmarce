<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!doctype html>
<html lang="es" style="margin-top: 0px !important;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
<!-- Header -->
<header class="main-header">
    <div class="main-header__container">
        <div class="main-header__logodefaul">
            <a href="<?php echo get_home_url(); ?>">
                <!--logo default-->
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>"/>
                </div>
            </a>
        </div>
        <?php if (has_custom_logo()) : ?>
            <?php
            //@todo evaluar si mostrar el titulo de la pagina o el isologotipo
            /*logo customizado: IF existe, lo muestra*/
            ?>
            <div class="main-header__brand" style="display: none;">
                <a href="<?php echo get_home_url(); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <div class="logo">
                        <img src="<?php echo $logo[0] ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </div>
                </a>
            </div>
        <?php else: ?>
        <?php /*ELSE, muestra en nombre ingresado en apariencias*/ ?>
            <div class="main-header__title" style="display: none;">
                <?php echo get_bloginfo('name') ?>
            </div>
        <?php endif; ?>
        <div class="main-header__menu">
            <nav class="nav menu-principal">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Procudtos</a>
                <a class="nav-link" href="#">Contacto</a>
            </nav>
        </div>
    </div>
</header>
</body>
</html>
