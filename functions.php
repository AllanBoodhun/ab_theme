<?php 

// chargement du style
wp_enqueue_style(
    'abstyles',
    get_template_directory_uri().'/css/style.css',
    array(),
    false,
    'all');
    

// chargement du script
wp_enqueue_script('abscript', get_template_directory_uri().'/main.js',
array(),
false,
'all'  );



function theme_support () {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_support');