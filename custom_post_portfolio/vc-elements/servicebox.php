<?php
/*
Element Description: TH Service Box
 */

// Element Class
class vcServiceBox extends WPBakeryShortCode
{

    // Element Init
    public function __construct()
    {
        add_action('init', array($this, 'vc_servicebox_mapping'));
        add_shortcode('vc_servicebox', array($this, 'vc_servicebox_html'));
    }

    // Element Mapping
    public function vc_servicebox_mapping()
    {

        // Stop all if VC is not enabled
        if (!defined('WPB_VC_VERSION')) {
            return;
        }

        // Map the block with vc_map()
        vc_map(
            array(
                'name' => __('TH Service Box', 'text-domain'),
                'base' => 'vc_servicebox',
                'description' => __('Another TH Servicebox', 'text-domain'),
                'category' => __('TechHive Elements', 'text-domain'),
                'icon' => get_template_directory_uri() . '/assets/images/infobox.png',
                'params' => array(
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Icon library', 'text-domain' ),
                        'value' => array(
                            __( 'Font Awesome', 'text-domain' ) => 'fontawesome',
                            __( 'Open Iconic', 'text-domain' ) => 'openiconic',
                            __( 'Typicons', 'text-domain' ) => 'typicons',
                            __( 'Entypo', 'text-domain' ) => 'entypo',
                            __( 'Linecons', 'text-domain' ) => 'linecons',
                            __( 'Mono Social', 'text-domain' ) => 'monosocial',
                            __( 'Material', 'text-domain' ) => 'material',
                        ),
                        'admin_label' => true,
//                         'param_name' => 'icontype',
                        'param_name' => 'type',
                        'description' => __( 'Select icon library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_fontawesome',
                        'value' => 'fa fa-adjust',
                        'settings' => array(
                            'emptyIcon' => false,
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'fontawesome',
                        ),
                        'description' => __('Select icon from library.', 'text-domain'),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_openiconic',
                        'value' => 'vc-oi vc-oi-dial',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'openiconic',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'openiconic',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_typicons',
                        'value' => 'typcn typcn-adjust-brightness',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'typicons',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'typicons',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_entypo',
                        'value' => 'entypo-icon entypo-icon-note',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'entypo',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'entypo',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_linecons',
                        'value' => 'vc_li vc_li-heart',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'linecons',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'linecons',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_monosocial',
                        'value' => 'vc-mono vc-mono-fivehundredpx',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'monosocial',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'monosocial',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => __( 'Icon', 'text-domain' ),
                        'param_name' => 'icon_material',
                        'value' => 'vc-material vc-material-cake',
                        'settings' => array(
                            'emptyIcon' => false,
                            'type' => 'material',
                            'iconsPerPage' => 4000,
                        ),
                        'dependency' => array(
                            'element' => 'type',
                            'value' => 'material',
                        ),
                        'description' => __( 'Select icon from library.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Icon color', 'text-domain' ),
                        'param_name' => 'color',
                        'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'text-domain' ) => 'custom' ) ),
                        'description' => __( 'Select icon color.', 'text-domain' ),
                        'param_holder_class' => 'vc_colored-dropdown',
                        'group' => 'TechHive Group',
                    ),
                    array(
                        "type"      => "colorpicker",
                        "class"     => "",
                        "heading"   => __("Custom color", 'text-domain'),
                        "param_name"=> "custom_color",
                        'dependency' => array(
                            'element' => 'color',
                            'value' => 'custom',
                        ),
                        "description" => __("Select custom icon color.", 'text-domain'),
                        'group' => 'TechHive Group',
                     ),
                     array(
                        'type' => 'dropdown',
                        'heading' => __( 'Background shape', 'text-domain' ),
                        'param_name' => 'background_style',
                        'value' => array(
                            __( 'None', 'text-domain' ) => '',
                            __( 'Circle', 'text-domain' ) => 'rounded',
                            __( 'Square', 'text-domain' ) => 'boxed',
                            __( 'Rounded', 'text-domain' ) => 'rounded-less',
                            __( 'Outline Circle', 'text-domain' ) => 'rounded-outline',
                            __( 'Outline Square', 'text-domain' ) => 'boxed-outline',
                            __( 'Outline Rounded', 'text-domain' ) => 'rounded-less-outline',
                        ),
                        'description' => __( 'Select background shape and style for icon.', 'text-domain' ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Background color', 'text-domain' ),
                        'param_name' => 'background_color',
                        'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'text-domain' ) => 'custom' ) ),
                        'std' => 'grey',
                        'description' => __( 'Select background color for icon.', 'text-domain' ),
                        'param_holder_class' => 'vc_colored-dropdown',
                        'dependency' => array(
                            'element' => 'background_style',
                            'not_empty' => true,
                        ),
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'th-servicebox-title',
                        'heading' => __('Title', 'text-domain'),
                        'param_name' => 'title',
                        'value' => __('Default value', 'text-domain'),
                        'description' => __('Box Title', 'text-domain'),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'TechHive Group',
                    ),
                    array(
                        'type' => 'textarea',
                        'holder' => 'div',
                        'class' => 'th-servicebox-desc',
                        'heading' => __('Text', 'text-domain'),
                        'param_name' => 'text',
                        'value' => __('Default value', 'text-domain'),
                        'description' => __('Box Text', 'text-domain'),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'TechHive Group',
                    ),

                ),
            )
        );

    }

    // Element HTML
    public function vc_servicebox_html($atts)
    {

        // Params extraction
        extract(
            shortcode_atts(
                array(
                    'title' => '',
                    'icon_fontawesome' => '',
                    'text' => '',
                ),
                $atts
            )
        );

        // Fill $html var with data
        $html = '
        <div class="servicebox-wrap">

            <h3 class="servicebox-title">' . $title . '</h3>
            <i class="' . $icon_fontawesome . '"></i>
            <div class="servicebox-desc">' . $text . '</div>

        </div>';

        return $html;

    }

} // End Element Class



// Element Class Init
new vcServiceBox();
