<?php get_header(); ?>
<div id="about">
<?php
    if (is_page('products') || is_page('t1-fixtures') || is_page('t2-fixtures') || is_page('stacklight-l4') || is_page('stacklight-l3')) {
        wp_nav_menu( array( 'theme_location' => 'products-menu', 'container_id' => 'productsmenu',) );
    }
?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>     
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>