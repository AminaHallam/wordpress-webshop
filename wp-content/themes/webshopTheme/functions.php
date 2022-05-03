<?php 

include('enqueue.php'); 

// tillägg för extra temasupport

add_theme_support('post-thumbnails'); 

add_theme_support('widgets'); 

add_theme_support('menus'); 

add_theme_support( 'woocommerce' );



// Remove Default Sorting 

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30); 

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20); 



// Registrerar och lägger till olika meny

add_action('after_setup_theme', 'my_function'); 

function my_function() {
    register_nav_menu('huvudmeny', 'Huvud meny'); 
    register_nav_menu('footermeny', 'footer meny'); 
}

register_sidebar(
    [
        'name' => 'widget 1', 
        'id' => 'widget-footer',
        'description' => 'Widget till footer.'
        
    ]
); 

register_sidebar(
    [
        'name' => 'widget 2',
        'id' => 'widget-footer2',
        'description' => 'widget till footer 2.'
    ]
);

register_sidebar(
    [
        'name' => 'widget 3',
        'id' => 'widget-socialmedia',
        'description' => 'widget för social media.'
    ]
);



?> 