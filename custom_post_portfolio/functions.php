<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_4
 */

if ( ! function_exists( 'wp_bootstrap_4_setup' ) ) :
	function wp_bootstrap_4_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'wp-bootstrap-4', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-bootstrap-4' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_4_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
//      wp_enqueue_style( 'font-awsome', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array() );
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );
        wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array());
        wp_enqueue_style( 'simple-lightbox', get_template_directory_uri() . '/assets/lightbox/simplelightbox.css', array());

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
	wp_enqueue_script( 'isotop-js', get_template_directory_uri() . '/assets/isotop/jquery.isotope.min.js', array() );
	wp_enqueue_script( 'isotop-packery', get_template_directory_uri() . '/assets/isotop/packery-mode.pkgd.min.js', array() );
        wp_enqueue_script( 'simple-lightboxjs', get_template_directory_uri() . '/assets/lightbox/simple-lightbox.min.js', array());
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {
     
    // Require new custom Element
    require_once( get_template_directory().'/vc-elements/vc_shortcodes.php' ); 
     
}

add_action( 'vc_before_init', 'vc_servicebox' );
function vc_servicebox() {
     
    require_once( get_template_directory().'/vc-elements/servicebox.php' ); 
     
}


add_action('init', 'unique_custom_post');
function unique_custom_post(){
	$labels = array(
		'name'               => _x( 'Portfolios', 'portfolios', 'cit-unique' ),
		'singular_name'      => _x( 'Portfolio', 'portfolio', 'cit-unique' ),
		'menu_name'          => _x( 'Portfolios', 'Portfolios', 'cit-unique' ),
		'name_admin_bar'     => _x( 'Portfolio', 'Portfolio', 'cit-unique' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'cit-unique' ),
		'add_new_item'       => __( 'Add New Portfolio', 'cit-unique' ),
		'new_item'           => __( 'New Portfolio', 'cit-unique' ),
		'edit_item'          => __( 'Edit Portfolio', 'cit-unique' ),
		'view_item'          => __( 'View Portfolio', 'cit-unique' ),
		'all_items'          => __( 'All Portfolios', 'cit-unique' ),
		'search_items'       => __( 'Search Portfolios', 'cit-unique' ),
		'not_found'          => __( 'No Portfolios found.', 'cit-unique' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'cit-unique' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'cit-unique' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-gallery',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio-item' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'portfolio', $args );
}  

//Register Custom Taxonomy
if(! function_exists('unique_portfolio_taxonomy')) {
	add_action('init', 'unique_portfolio_taxonomy');
	function unique_portfolio_taxonomy(){
		$labels = array(
            'name'              => _x( 'Portfolio Category', 'portfolio category', 'unique' ),
            'singular_name'     => _x( 'Category', 'category', 'unique' )
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        );
	
		register_taxonomy('portfolio_cat',array('portfolio'), $args);
	}

	
}


