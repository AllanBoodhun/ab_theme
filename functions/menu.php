<?php 

// register_nav_menus( array(
// 	'footer_menu1' => __('Menu pied de page 1', 'trail-chantenay'),
// 	'main_menu' 	 => __('Menu principal Trail', 'trail-chantenay'),
// ) );

register_nav_menu('principal', 'menu principal');
register_nav_menu('footer', 'pied de page');


function trail_menu() {
//     // TODO: Récupérer le menu declaré dans l'admin via wp_nav_menu()

wp_nav_menu([ 'theme_location' => 'principal',
             'container' => false,
             'menu_class' => 'menu responsive',
]);
}

function footer_menu() {
     wp_nav_menu([ 'theme_location' => 'footer',
                 'container' => false,
    ]);
}

// Appliquer une class au container menu :
// function montheme_menu_class($classes)
// {
//     $classes[] = 'test';
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