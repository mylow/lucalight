<?php
/*
Theme Name: Spring 2016 Demo
Author: Milo
Author URI: http://www.milo.sh
Description: This is a demo WP theme for web170
Version: 0.0.1
*/

//my title tag
function get_my_title_tag() {
    
    global $post;
    
    if (is_front_page()) { // front page
        
        bloginfo('description'); // get site tagline
    
    } elseif (is_page() || is_single() ){
        
        the_title(); //the page or post title
        
    } else {
        
        bloginfo('description');
        
    }
    
    echo ' ';
    echo ' | ';
    bloginfo('name'); // site name
    
}


register_nav_menus( array(
	'main-menu' => 'LL Main Menu',
    'products-menu' => 'Products Menu',
) );



?>