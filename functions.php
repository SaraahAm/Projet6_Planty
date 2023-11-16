<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );

}

/* Ajout Admin */

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu($items, $args) {
    if (is_user_logged_in() && $args->menu_id=="menu-1-b457354") {
        $items .= '<li class="menu-item"><a class="hfe-menu-item" href="'. esc_url(admin_url()) .'">Admin</a></li>';
    }
    return $items;
}
