<?php

if(is_page()) {
            if($post->post_parent){// check if page is parent...
                echo '<h3>'.get_the_title($post->post_parent).'</h3>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //... list current page
                echo '</ul>';
            } else { // if page does not have a parent...
                echo '<h3>'.get_the_title($post->ID).'</h3>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));// ... do this
                echo '</ul>';
            }
            
?>