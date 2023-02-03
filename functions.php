<?php
/*
** Menus
*/
function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
    //register_nav_menu('footer-menu-otros', __('Footer Menu conocé'));
}
add_action('init', 'register_my_menu');

/*-------------------------------------------------------*/

/*
 * aqui agregamos las hojas de estilos.
 * */
add_action('wp_enqueue_scripts', 'scriptsTemplate');

function scriptsTemplate () {
    //add style.css -> root
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //add header.css -> /assets/css/header.css
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
    //add header.css -> /assets/css/footer.css
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
    //add header.css -> /assets/css/home.css
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css' );
    //add header.css -> /assets/css/productos.css
    wp_enqueue_style( 'productos', get_template_directory_uri() . '/assets/css/productos.css' );
    //add jquery ¿?
    wp_enqueue_script( 'jquery' );
}

/*-------------------------------------------------------*/

function mostrarRuta ($mostar_ruta, $ruta) {
    /*
     * muestra la ruta de un archivo.
     * */
    if ($mostar_ruta) {
        echo '<span style="background-color: #000; color: #7aff00; font-weight: bold; font-size: 0.9rem; width: 100%; margin: 1rem;">'.$ruta.'</span>';
    }
}

function dataPacks($mostrar_pack = false, $name_img_banner, $name_Pack, $icon, $precio_tach = null, $precio, $texLimited, $abonoPrice, $descriptionPack, $skills, $mostrar_boton) {
    // leyenda de lo que hace esta funcion.
    /*
     * $mostrar_pack : Mostrar u Ocultar pack.
     * $name_img_banner : Nombre de la imagen incluido la extensión (agregar banner en /assets/img/banners).
     * $name_Pack : Nombre del Pack.
     * $icon : icono pequeño (simbolo del pack) - Default icon.
     * $precio_tach : Valor simbolico tachado. $ xxx ARS. Default -> null.
     * $prise : Precio Real del pack.
     * $texLimited : Texto que describe el limite de la publicacion del pack.
     * $abonoPrice: Precio del abono mensual.
     * $descriptionPack : Descripción del Pack.
     * $skills : lista de items de servicios.
     * $mostrar_boton : mostramos el boton de consulta o no (true or false).
     * */
    $data_pack = array(
        "mostrar" => $mostrar_pack,
        "name img" => $name_img_banner,
        "name pack" => $name_Pack,
        "icon" => $icon,
        "precio tachado" => $precio_tach,
        "precio" => $precio,
        "texo limite" => $texLimited,
        "abono" => $abonoPrice,
        "description" => $descriptionPack,
        "skills" => $skills,
        "boton" => $mostrar_boton
    );
    return $data_pack;
}