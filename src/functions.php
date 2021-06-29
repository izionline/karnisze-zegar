<?php 

function my_setup() {
    
    // Logo
    add_theme_support('custom-logo', array(
        'width'       => 125,           // szerokość [px]
        'height'      => 51,            // wysokość [px]
        'flex-width'  => true,          // elastyczxna szerokość 
        'flex-height' => false          // elastyczna wysokość
    ));

    // MENU
    register_nav_menus(array(
        'primary'	=> 'Menu Główne'    // nazwa => opis
    ));

}
add_action('init', 'my_setup');


function add_my_scripts() {
    
    // CSS
    wp_enqueue_style( 
        'Bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 
        false,
        false,
        'all'
    );

    wp_enqueue_style( 
        'font-dosis',
        'https://fonts.googleapis.com/css?family=Dosis:200,400', 
        false,
        false,
        'all'
    );

    wp_enqueue_style( 
        'wp-style', 
        get_stylesheet_uri(), 
        false, 
        '1.0.'.filemtime(get_stylesheet_directory().'/style.css'),
        'all' 
    );

    wp_enqueue_style( 
        'main-style', 
        get_template_directory_uri().'/css/main.css', 
        false, 
        '1.0.'.filemtime(get_stylesheet_directory().'/css/main.css'),
        'all' 
    );
    

    // JS
    wp_enqueue_script(
        'my-jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
        false,
        false,
        false       // false -> skrypt w nagłówku
    );

}
add_action('wp_enqueue_scripts', 'add_my_scripts');

?>