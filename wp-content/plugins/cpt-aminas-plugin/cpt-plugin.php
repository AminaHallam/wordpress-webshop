<?php 
/*
Plugin name: cpt-ah Plugin 

*/ 

// Säkerhet

// Aktivering

// Funktioner för butiker CPT

add_action('init', 'registrera_butik'); 

function registrera_butik() {

    $produkt_args = [
        'public' => true, 
        'label' => 'butiker',
        'show_in_rest' => true
    ];

    register_post_type('butiker', $produkt_args); 

}

?> 