<?php
function change_footer_version() {
    return ' ';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );
