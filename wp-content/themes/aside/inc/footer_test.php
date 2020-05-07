<?php
add_action('wp_footer', 'testFunction');
function testFunction(){
  echo '<!-- ceci est un test -->';
}
