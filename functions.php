<?php

function lilo_files() {
    wp_enqueue_script("main_lilo_js", get_theme_file_uri("/js/main.js"), NULL, '1.0', true);
    wp_enqueue_script('leaflet-js', '//cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js', null, '1.6.0', false);
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Poppins|PT+Serif:400,700&display=swap");
    wp_enqueue_style('leaflet-css', '//unpkg.com/leaflet@1.6.0/dist/leaflet.css');
    wp_enqueue_style("lilo_main_styles", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "lilo_files");

function lilo_features() {
    add_theme_support("post-thumbnails");
    register_nav_menus(array(
        'primary' => __('Glavni meni')
    ));
}

add_action("after_setup_theme", "lilo_features");

function custom_excerpt_length() {
	return 30;
}

add_filter("excerpt_length", "custom_excerpt_length");

?>