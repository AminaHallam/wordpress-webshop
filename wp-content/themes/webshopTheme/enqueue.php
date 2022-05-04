<?php 

add_action('wp_enqueue_scripts', 'my_scripts_css'); 

function my_scripts_css() {

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css'); 
    wp_register_style('style', get_template_directory_uri().'/style.css'); 
    
    wp_register_script('bootstrap-js', get_template_directory_uri().'./js/bootstrap.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');

    
    wp_enqueue_script('bootstrap-js');


}


?> 