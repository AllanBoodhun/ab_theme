<?php 

function theme_support () {
    add_theme_support('title-tag');
    add_theme_support('menu');
}

add_action('after_setup_theme', 'theme_support');


include("functions/enqueues.php");
include('functions/menu.php');

// Appliquer une class au container menu :
// function montheme_menu_class($classes)
// {
//     $classes[] = 'effect-underline';
//     return $classes;
// }

// add_filter('nav_menu_css_class','montheme_menu_class');


// Appliquer l'underline au li :
function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'effect-underline';
    return $attrs;
}

add_filter('nav_menu_link_attributes','montheme_menu_link_class');