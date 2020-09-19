<?php

/* Post types */
if ( file_exists( dirname( __FILE__ ) . '/inc/post-types/faq.php' ) ) {
    require_once dirname(__FILE__) . '/inc/post-types/faq.php';
}

/**
 * Added shortcodes
 */
if ( file_exists( dirname( __FILE__ ) . '/inc/shortcodes.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/shortcodes.php';
}

function wakewood_add_head_css()
{
    /* Register main styles */
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() .'styles/css/style-main.css' );
}

add_action( 'wp_enqueue_scripts', 'wakewood_add_head_css');

function wakewood_footer_scripts()
{
    /* Register main scripts */
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', [], '20151215', true );
}

add_action( 'get_footer', 'wakewood_footer_scripts' );