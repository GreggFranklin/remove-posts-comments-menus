<?php

/**
 * Remove Posts and Comments Menu items
 *
 * WordPress default install includes a Posts and Comments menu item including the Comments bubble and Add Posts from Admin bar. This site does not have a blog at this time and we are removing these menu items.
 */
/* Remove Posts and Comments menu itmes from Dashboard */
function fn_remove_options() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action('admin_menu', 'fn_remove_options');

/* Remove Comment bubble from Admin bar. */
function fn_remove_comment_bubble() {  
    global $wp_admin_bar;  
    $wp_admin_bar->remove_menu('comments');  
}  
add_action( 'wp_before_admin_bar_render', 'fn_remove_comment_bubble' );  

/* Remove Add Posts from +New Menu in Admin bar */
function fn_remove_wp_nodes() 
{
    global $wp_admin_bar;   
    $wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'fn_remove_wp_nodes', 999 );
