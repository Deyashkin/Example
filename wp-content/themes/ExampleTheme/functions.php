<?php
add_action('wp_enqueue_scripts', 'example_scripts');
add_action('wp_enqueue_scripts', 'example_styles');

function example_scripts() {
    wp_enqueue_script( 'animated-headline-script', get_template_directory_uri() . '/assets/js/animated-headline.js', array(), null, true);
    // wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    // wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js');
    // wp_enqueue_script( 'isotope-script', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js');
    // wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/js/jquery-2.1.1.js');
    // wp_enqueue_script( 'menu-script', get_template_directory_uri() . '/assets/js/menu.js');
    // wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/modernizr.js');
}
function example_styles() {
    wp_enqueue_style( 'example-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

}

add_action('wp_footer', 'scriptjs');

function scriptjs () {
    wp_enqueue_script('name', get_template_directory_uri() . '/assets/js/script.js');
}

?> 