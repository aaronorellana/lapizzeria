<?php 

function lapizzeria_styles() {

    //Registar los estilos
    //               Nom du style                URL                                      DEPS    VERSION
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
                                                                                               // el archivo normalize se va realisar en primero
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

    //llamar a los estilos
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');

}

// Agregar la function en el header.
add_action('wp_enqueue_scripts', 'lapizzeria_styles');


// Creation de menu
function lapizzeria_menus() {
    register_nav_menus(array(
        // Creation des differents menu dans la page
        'header-menu' => __('Header Menu', 'lapizzeria'),
        'social-menu' => __('Social Menu', 'lapizzeria')
    ));
}

// Agregar la function menu al init de wordpress
add_action( 'init', 'lapizzeria_menus')

?>