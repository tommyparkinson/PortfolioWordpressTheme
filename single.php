<?php get_header(); ?>
<style>
    .navbar{border-bottom: 1px solid grey;}.navbar a{color: black !important;}.navbar-toggler{background-color: rgba(0, 0, 0, 0.8);} 
</style>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        $id = $recent_post->ID;
        $url = get_the_post_thumbnail_url($id, 'full'); ?>

    <?php
    endwhile; 
endif; 
?>
<?php get_footer(); ?>