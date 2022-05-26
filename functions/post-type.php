<?php
/*
 *  POST-TYPES // cf. functions.php
 *  Author: Agence Seize
 *  URL: www.agenceseize.fr

 * Resources : https://developer.wordpress.org/resource/dashicons/
 */

add_action( 'wp_loaded','my_flush_rules' );
function my_flush_rules() {
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}

/*
 * Initialise les Custom Post-Types créés
 * ----------------------------------------------------------------------------*/
add_action( 'init', 'initCustomPostTypes' );
function initCustomPostTypes() {
    // Offres d'emploi
    $slug = "gallerie";
    $args = array(
        'labels'             => defineCPTLabels($slug, "Gallerie Photos", "Galeries photos", false),
        'description'        => '',
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => false,
        'hierarchical'       => true,
        'show_in_rest'       => false,
        'rest_base'          => false,
        'menu_position'      => null,
        'capability_type'    => 'post',
        'supports'           => array('title', 'editor', 'author', 'page-attributes', 'revision'),
        'menu_icon'          => 'dashicons-businessman'
    );
    register_post_type($slug, $args);

}

/*
 * Défini les labels pour le Custom Post-Type en paramètre
 * ----------------------------------------------------------------------------*/
function defineCPTLabels($slug, $name, $names, $feminin = false) {

  if ( $feminin ) :
    $un = "une";
    $nouv = "nouvelle";
    $auc = "aucune";
    $trouv = "trouvée";
    $all = "Toutes";
    $parent = "parente";
  else :
    $un = "un";
    $nouv = "nouveau";
    $auc = "aucun";
    $trouv = "trouvé";
    $all = "Tous";
    $parent = "parent";
  endif;

  $labels = array(
  	'name'               => __($names, 'trail-chantenay'),
  	'singular_name'      => __($name, 'trail-chantenay'),
  	'menu_name'          => __($names, 'trail-chantenay'),
  	'name_admin_bar'     => __($names, 'trail-chantenay'),
  	'add_new'            => __('Ajouter '.$un.' '.$nouv, 'trail-chantenay'),
  	'add_new_item'       => __('Ajouter '.$un.' '.strtolower($name), 'trail-chantenay'),
  	'new_item'           => __(ucfirst($nouv).' '.strtolower($name), 'trail-chantenay'),
  	'edit_item'          => __('Éditer', 'trail-chantenay'),
    'update_item'        => __('Mettre à jour', 'trail-chantenay'),
  	'view_item'          => __('Voir', 'trail-chantenay'),
  	'all_items'          => __($all.' les '.strtolower($names), 'trail-chantenay'),
  	'search_items'       => __('Recherche '.$un.' '.strtolower($name), 'trail-chantenay'),
  	'parent_item'        => __(ucfirst($name).' parent :', 'trail-chantenay'),
  	'parent_item_colon'  => __(ucfirst($name).' parent :', 'trail-chantenay'),
  	'not_found'          => __(ucfirst($auc).' '.strtolower($name).' '.$trouv.'.', 'trail-chantenay'),
  	'not_found_in_trash' => __(ucfirst($auc).' '.strtolower($name).' '.$trouv.' dans la corbeille.', 'nbtheme')
  );

  return $labels;
}
