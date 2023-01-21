<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
<!-- Header -->
<style>
    body {margin: 0px;}
    .main-header{
        background-color: darkorchid; width: 100%; height: 200px; padding: 1rem;
    }
    /*styles logo*/
    .logo img {
        height: 50px;
        width: auto;
    }
</style>
<header class="main-header" style="z-index: 1000">
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
        <?php echo 'if';/*logo customizado: IF existe, lo muestra*/?>
            <div class="main-header__brand">
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
        <?php echo 'else';/*ELSE, muestra en nombre ingresado en apariencias*/?>
            <div class="main-header__title">
                <?php echo get_bloginfo('name') ?>
            </div>
        <?php endif; ?>
        <div class="main-header__menu">
            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled">Disabled</a>
            </nav>
        </div>
    </div>
</header>
</body>
</html>
