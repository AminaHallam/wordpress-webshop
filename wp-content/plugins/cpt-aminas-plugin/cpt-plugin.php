<?php 
/*
 * Plugin name: cpt-ah Plugin 
 * Description: CPT for physical stores
 * Version: 1.0.0
 * Author: Amina Hallam

*/ 


add_action('init', 'register_store'); 

function register_store() {

    $product_args = [
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

    register_post_type('butiker', $product_args); 

}

?> 