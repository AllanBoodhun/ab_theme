<?php 

// chargement du style
wp_register_style('trailstyle', get_template_directory_uri().'/css/style.css', array(), false, 'all');
wp_enqueue_style('trailstyle');

// chargement du script
wp_enqueue_script('abscript', get_template_directory_uri().'/main.js',
array(),
false,
'all'  );

	
add_theme_support( 'custom-logo' );

