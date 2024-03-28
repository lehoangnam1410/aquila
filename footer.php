<?php 
$author_id = get_post_field ( 'post_author' , get_the_ID ()) ;
$author_name = get_the_author_meta ( 'display_name' , $author_id ) ;
?>
<footer>
    <div class="copyright">
        &copy; -<?php echo date('Y') ?> - <?php echo 'Tác giả: ' . $author_name ;  ?>
    </div>
</footer>
</div>
</div>
<?php wp_footer( ) ?>
</body>
</html>