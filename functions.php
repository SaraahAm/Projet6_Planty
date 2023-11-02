<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );

}

/* HOOK 

if (is_user_logged_in()) {
    wp_nav_menu( $menu  =  array(
        'admin' = 'admin',
    ));
}

apply_filters ( 'wp_nav_menu_items', 'wp_nav_menu' ,  $args )


*/