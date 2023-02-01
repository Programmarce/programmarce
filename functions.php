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

function dataPacks($mostrar_pack = false, $name_img_banner, $name_Pack, $promo_Decuento = null, $prise, $texLimited, $abonoText, $abonoPrice, $descriptionPack) {
    // leyenda de lo que hace esta funcion.
    /*
     * $display : Mostrar u Ocultar pack
     * $img : Nombre de la imagen incluido la extensión (agregar banner en /assets/img/banners).
     * $namePack : Nombre del Pack.
     * $promoDecuento : Valor simbolico tachado. $ xxx ARS. Default -> null.
     * $prise : Precio Real del pack.
     * $texLimited
     * $abonoText
     * $abonoPrice
     * $descriptionPack
     * */
    $data_pack = array(
        "mostrar" => $mostrar_pack,
        "name img" => $name_img_banner,
        "name pack" => $name_Pack,
        "promo" => $promo_Decuento,
        "precio" => $prise,
        "texo limite" => $texLimited,
        "texto abono" => $abonoText,
        "abono" => $abonoPrice,
        "description" => $descriptionPack
    );
    return $data_pack;
}