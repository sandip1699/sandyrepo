<?php
/**
 * theme functions and definitions
 *
?>
// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {
     
    // Require new custom Element
    require_once( get_template_directory().'/vc-elements/vc_shortcodes.php' ); 
     
}
