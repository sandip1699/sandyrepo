<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcInfoBox extends WPBakeryShortCode {
     
    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_infobox_mapping' ) );
        add_shortcode( 'vc_infobox', array( $this, 'vc_infobox_html' ) );
    }
     
    // Element Mapping
    public function vc_infobox_mapping() {
         
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('VC Infobox', 'text-domain'),
                'base' => 'vc_infobox',
                'description' => __('Another simple VC box', 'text-domain'), 
                'category' => __('My Custom Elements', 'text-domain'),   
                'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
                'params' => array(   
                         
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'title-class',
                        'heading' => __( 'Title', 'text-domain' ),
                        'param_name' => 'title',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Title', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),  
                      array(
                        "type" => "attach_image",
                        "heading" => __( "Image", "my-text-domain" ),
                        "param_name" => "img",
                        'group' => 'Custom Group',
                     ),
                    array(
                        "type" => "textfield",
                        "heading" => __( "Link Text", "my-text-domain" ),
                        "param_name" => "link_text",
                        "std" => "Shop now",
                        'group' => 'Custom Group',
                     ),
                    array(
                        'type' => 'textarea',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Text', 'text-domain' ),
                        'param_name' => 'textone',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Text', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),                      
                        
                ),
            )
        );                                
        
    }
     
     
    // Element HTML
    public function vc_infobox_html( $atts ) {
         
        // Params extraction
        extract(
            shortcode_atts(
                array(
                    'title'   => '',
                    'textone' => '',
                    'img' => '',
		    'link_text' => '',
                ), 
                $atts
            )
        );
         
        $image_array = wp_get_attachment_image_src( $img, 'large' );
	$link_url = get_page_link( $link );
        
        
        // Fill $html var with data
        $html = '
        <div class="vc-infobox-wrap">
            
            <h2 class="vc-infobox-title">' . $title . '</h2>
             <div class="promo-box-image">
                <img src="'.$image_array[0].'" alt="test">
                    <a href="'.$link_url.'"> Shop Now  </a>
            </div>
            <div class="vc-infobox-text">' . $textone . '</div>
         
        </div>';      
         
        return $html;
         
    }
     
} // End Element Class
 
 
// Element Class Init
new vcInfoBox();    