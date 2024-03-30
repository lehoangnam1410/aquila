<?php get_header(); ?>
<?php 
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part( 'content', get_post_format() );
    }
}
else get_template_part( 'content', 'none' );
?>
<?php lenam_pagination(); ?>
<div id="sidebar">
    <?php get_sidebar( );?>
</div>
<?php get_footer( ); 
