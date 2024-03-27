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

<?php 
define('THEME_URL', get_stylesheet_directory());
define('CORE',THEME_URL.'/core');

require_once(CORE."/init.php");
/*
Thiết lập chiều rộng
*/
if(!isset($content_witd)){
    $content_witd=620;
}
/**
 * Khai báo các chức năng
 */
if(!function_exists('thanhpham_theme_setup')){
    function thanhpham_theme_setup(){
        $language_folder= THEME_URL."/languages";
        load_theme_textdomain( 'aquila', $language_folder );
        /** Tu dong them link RSS len head */
        add_theme_support( 'automatic-feed-links' );
        /**
         * tu dong them title
         */
        add_theme_support( 'title-tag' );
        /** Post thumbnails */
        add_theme_support( 'post-thumbnails');
        /**Post Format */
        add_theme_support( 'post-formats', array(
            'image',
            'video',
            'gallery'
        ) );
        $default_background = array(
            'default-color'=> '#e8e8e8'
        );
        add_theme_support( 'custom-background', $default_background );
        /* Them menu */
        register_nav_menu( 'primary-menu', __('Primary Menu','lenam') );
        /* Tao sidebar */
        $sidebar = array(
            'name'=>__('Main Sidebar','lenam'),
            'id'=> ('main-sidebar'),
            'description'=>__('Default sidebar')
        );
        register_sidebar( $sidebar );
    }
    add_action(  'init','thanhpham_theme_setup' );
}
/* TEMPLATE FUNCTIONS */
if(!function_exists('lenam_template_function')){
    function lenam_template_function(){?>
        <div class="site-name">
        <?php
        if(is_home()){
            printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                get_bloginfo( 'url' ),
                get_bloginfo( 'description' ),
                get_bloginfo( 'wpurl' )
            );
        }
        else {
            printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                get_bloginfo( 'url' ),
                get_bloginfo( 'description' ),
                get_bloginfo( 'wpurl' )
            );
        }
        ?>
        </div>
        <?php
    }

}

