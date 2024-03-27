<?php ?>
<!DOCTYPE html>
<htm lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress</title>
    <link rel="stylesheet" href="<?php bloginfo( 'pingback_url');?>">
    <?php wp_head()?>
</head>
<body <?php body_class( 'hello class' ); ?>>
<?php 
if(function_exists('wp_body_open')){
    wp_body_open( );
}
?>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <hearder id="masthead" class="site-header" role="banner" >
        <?php get_template_part( 'template-parts/header/nav'); ?>
    </hearder>
    <div class="logo">
        <?php lenam_template_function();  ?>
    </div>
    <div id="content" class="site-content">


