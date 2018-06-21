# Wordpress Tutorial

Wordpress tutorial exmple

## Visual Composer Custom Element

function file
```

add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {     
    require_once( get_template_directory().'/vc-elements/vc_shortcodes.php' );    
}
```

## Custom post portfolio

File Effected
```
function.php
achieve-portfolio.php
```
Library
```
wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array());
wp_enqueue_style( 'simple-lightbox', get_template_directory_uri() . '/assets/lightbox/simplelightbox.css', array());

wp_enqueue_script( 'isotop-js', get_template_directory_uri() . '/assets/isotop/jquery.isotope.min.js', array() );
wp_enqueue_script( 'isotop-packery', get_template_directory_uri() . '/assets/isotop/packery-mode.pkgd.min.js', array() );
wp_enqueue_script( 'simple-lightboxjs', get_template_directory_uri() . '/assets/lightbox/simple-lightbox.min.js', array());
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array());
```

# Author

### sandip patel

