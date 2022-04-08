<?php 

include('enqueue.php'); 

// tillägg för extra temasupport

add_theme_support('post-thumbnails'); 

add_theme_support('widgets'); 

add_theme_support('menus'); 


// Registrerar och lägger till olika meny

add_action('after_setup_theme', 'my_function'); 

function my_function() {
    register_nav_menu('huvudmeny', 'Huvud meny'); 
    register_nav_menu('footermeny', 'footer meny'); 
}


?> 