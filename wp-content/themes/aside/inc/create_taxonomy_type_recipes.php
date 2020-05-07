<?php
add_action('init', 'create_taxonomy_type_recipes');
function create_taxonomy_type_recipes(){

  $taxonomy = "recipes_type";
  $object_type = array("recettes");
  $args = array(
          'label' => __( 'Type de recette' ),
          'rewrite' => array( 'slug' => 'recipes_type' ),
          'hierarchical' => true,
      );
  register_taxonomy( $taxonomy, $object_type, $args );
}
