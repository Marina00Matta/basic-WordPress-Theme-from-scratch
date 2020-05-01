<?php

// Add Assests
function addAssest(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assests/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/assests/css/main.css');

    wp_enqueue_script('bootstrape',get_template_directory_uri().'/assests/js/bootstrap.min.js',['jquery']);
}

add_action( 'wp_enqueue_scripts','addAssest' );

add_theme_support( "post-thumbnails" );

add_theme_support( "menus" );

register_nav_menus( array(
    'main-menu' => "Main Menu" ,
));


// custoum post type

?>