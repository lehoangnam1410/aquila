<?php 
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my_style', get_template_directory_uri().'/style.css',array(),'0.1.0','all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function theme_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/assets/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
?>
