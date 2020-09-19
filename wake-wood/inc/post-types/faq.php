<?php
// Custom post types for dashboard sidebar
function vim_create_faq_post_type() {
    $args = array(
        'labels' => array(
            'name'  => __( 'Відповіді на питання','wake-wood' ),
        ),
        'supports'  => array( 'title','editor'),
        'public'              => true,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'has_archive'         => false,
        'show_ui'             => true,
        'menu_icon' => 'dashicons-tickets-alt',
    );

    register_post_type( 'faq', $args );
}
add_action( 'init', 'vim_create_faq_post_type' );