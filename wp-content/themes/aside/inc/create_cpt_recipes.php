<?php
add_action('init', 'creat_recipes_cpt');
function creat_recipes_cpt()
{

$post_type = "recettes";
$labels = array(
        'name'               => 'Recettes',
        'singular_name'      => 'Recette',
        'all_items'          => 'Toutes les recettes',
        'add_new'            => 'Nouvelle recette',
        'add_new_item'       => 'Ajouter une nouvelle recette',
        'edit_item'          => "Modifier la recette",
        'new_item'           => 'Nouvelle recette',
        'view_item'          => "Voir la recette",
        'search_items'       => 'Trouver une recette',
        'not_found'          => 'pas de resultat',
        'not_found_in_trash' => 'pas de resultat',
        'parent_item_colon'  => 'Recette parente',
        'menu_name'          => 'Recettes',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'revisions',),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-admin-home',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

}
