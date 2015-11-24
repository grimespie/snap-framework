<?php

/**
 *
 * Enqueue Javascript and CSS
 *
 */

class snap_enqueue {

    static function register_scripts() {
        wp_register_script("imagesloaded", get_template_directory_uri() . "/snap/js/imagesloaded.pkgd.min.js", array("jquery"), "3.2.0");
        wp_register_script("mixitup", get_template_directory_uri() . "/snap/js/jquery.mixitup.min.js", array("jquery"), "2.1.11");
        
        wp_register_style("normalize", get_template_directory_uri() . "/snap/css/normalize.min.css", array(), "3.0.3");
        wp_register_style("fontawesome", get_template_directory_uri() . "/snap/css/font-awesome.min.css", array(), "4.5.0");
        wp_register_style("snap", get_template_directory_uri() . "/snap/css/snap.css", array(), "1.0.0");
    }

    static function enqueue_scripts() {
        wp_enqueue_script("jquery");
        wp_enqueue_script("imagesloaded");
        wp_enqueue_script("mixitup");
        
        wp_enqueue_style("normalize");
        wp_enqueue_style("fontawesome");
        wp_enqueue_style("snap");
    }
    
}

add_action("wp_enqueue_scripts", array("snap_enqueue", "register_scripts"), 1);
add_action("wp_enqueue_scripts", array("snap_enqueue", "enqueue_scripts"), 2);

?>