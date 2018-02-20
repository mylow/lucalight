<?php get_header(); ?>
<div id="about">
<?php
    if (is_page('products') || is_page('t1-fixtures') || is_page('t2-fixtures') || is_page('stacklight-l4') || is_page('stacklight-l3')) {
        wp_nav_menu( array( 'theme_location' => 'products-menu', 'container_id' => 'productsmenu',) );
    }
?>
    <h1><strong>Opps - That page doesn't exist.</strong></h1>
    <a href="<?php echo get_settings('home');?>">return to home</a>
</div>
<?php get_footer(); ?>