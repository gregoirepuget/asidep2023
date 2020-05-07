<?php // register_post_type( $post_type, $args );

function ajout_custom_type_init() {
    $args = array(
      'public' => true,
      'label'  => 'Books'
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'ajout_custom_type_init' );
