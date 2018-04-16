<?php 

function lapizzeria_setup() {
    // Support pour les thumbnails dans les pages et articles.
    add_theme_support('post-thumbnails');
    
    // Ajout des size personnalise pour les images
    add_image_size('nosotros', 437, 291, true);
    add_image_size('especialidades', 768, 515, true); 

}
add_action( 'after_setup_theme', 'lapizzeria_setup'); //after_setup_theme est une fonction de wordpress qui roule apres que le theme a etait installer


function lapizzeria_styles() {

    //Registar los estilos
    //               Nom du style                URL                                      DEPS    VERSION
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array('normalize'), '4.7.0' );
                                                                                               // el archivo normalize se va realisar en primero
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

    //llamar a los estilos
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');


    // Registrar JS  ----- Sixieme parametre permet de mettre les fichier js dans le footer
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    
   
    wp_enqueue_script('jquery');  // jQuery vient deja dans wordpress
    wp_enqueue_script('scripts');
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
add_action( 'init', 'lapizzeria_menus');

add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}

?>