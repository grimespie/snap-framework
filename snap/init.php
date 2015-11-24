<?php

/**
 *
 * Include Snap files
 *
 */
 
include_once("enqueue.php");


/**
 *
 * Include third-party files
 *
 */

include_once("acf/acf.php");

 
/**
 *
 * Theme Support
 *
 */
 
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("woocommerce");


/**
 *
 * Menus
 *
 */
 
register_nav_menu("primary", "Primary Menu");
register_nav_menu("footer", "Footer Menu");


/**
 *
 * ACF
 *
 */

function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/snap/acf/';
    
    return($path);
}
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/snap/acf/';
    
    return($dir);
}

add_filter("acf/settings/path", "my_acf_settings_path");
add_filter("acf/settings/dir", "my_acf_settings_dir");


?>