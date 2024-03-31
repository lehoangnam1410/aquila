<?php get_header()?>
    <?php if(have_posts()){ ?>
    <?php while(have_posts()){
    the_content( );
        } 
    }?>
<?php get_footer(  ) ?>