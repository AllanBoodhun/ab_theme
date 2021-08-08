<?php 

// chargement du style
wp_enqueue_style(
    'abstyles',
    get_template_directory_uri().'/css/style.css',
    array(),
    false,
    'all');


function theme_support () {
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'theme_support');