<?php 
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my_style', get_template_directory_uri().'/style.css',array(),'0.1.0','all' );
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[],false,'all');
    wp_enqueue_style('bootstrap-css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function theme_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/assets/script.js', array(), '1.0', true );
    wp_register_style('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',[],false,'all');
    wp_enqueue_style('bootstrap-js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
?>
