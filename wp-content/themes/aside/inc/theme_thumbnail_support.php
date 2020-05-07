<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'home-thumb', 650, 99999, false );
    add_image_size( 'single-thumb', 1500, 1000, true );
}
