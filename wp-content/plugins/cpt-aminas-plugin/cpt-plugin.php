<?php 
/*
Plugin name: cpt-ah Plugin 

*/ 


add_action('init', 'registrera_butik'); 

function registrera_butik() {

    $produkt_args = [
        'public' => true, 
        'label' => 'butiker',
        'show_in_rest' => true,
        'capability_type' => 'post',
        'post_type' => 'location',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'has_archive' => true, 
        'menu-icon' => 'dashicons-store', 
        'hierarchical' => true
        
    ];

    register_post_type('butiker', $produkt_args); 

}

?> 