<?php
get_header();
while(have_posts()){
    the_post();
?>
<?php echo the_content();?>
<?php
}
get_footer();
?>