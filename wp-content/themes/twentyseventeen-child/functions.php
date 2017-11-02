<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}

/* adds custom fonts */

function twentyseventeen_child_scripts() {

    wp_enqueue_style('twentyseventeen-child-fonts', 'https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,400i,500,700,700i,800,900|Life+Savers:400,700" rel="stylesheet');
}

    add_action('wp-enqueue-scripts', 'twentyseventeen_child_scripts');
    
    
   