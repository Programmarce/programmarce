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