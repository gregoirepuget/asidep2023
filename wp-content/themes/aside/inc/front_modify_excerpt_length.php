<?php
function changer_longueur_resume( $words ) {
 return 3;
}
add_filter( 'excerpt_length', 'changer_longueur_resume' );
