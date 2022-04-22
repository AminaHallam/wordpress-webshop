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
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
        'has_archive' => true, 
        'hierarchical' => false
        
    ];

    register_post_type('butiker', $produkt_args); 

}

?> 