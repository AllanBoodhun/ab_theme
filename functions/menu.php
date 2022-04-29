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