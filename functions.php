<?php
/**
 * Undergrad functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Undergrad
 */

if ( ! function_exists( 'Undergrad_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Undergrad_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Undergrad, use a find and replace
	 * to change 'Undergrad' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'Undergrad', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 750, 450, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'Undergrad' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'Undergrad_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)
	 ) );

	/**
	 * Add editor styles
	 */
	add_editor_style( array( 'inc/editor-style.css', 'fonts/custom-fonts.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' ) );
}
endif; // Undergrad_setup
add_action( 'after_setup_theme', 'Undergrad_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function Undergrad_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'Undergrad_content_width', 640 );
}
add_action( 'after_setup_theme', 'Undergrad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function Undergrad_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Widget Area', 'Undergrad' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Undergrad_widgets_init' );

/**
 * Custom post type
 */

 function Undergrad_Portfolio() {
   $labels = array(
		 'name'               => 'Portfolio',
		 'singular_name'      => 'Project',
		 'menu_name'          => 'Portfolio',
		 'name_admin_bar'     => 'Portfolio',
		 'add_new'            => 'Add New',
		 'add_new_item'       => 'Add New Project',
		 'new_item'           => 'New Project',
		 'edit_item'          => 'Edit Project',
		 'view_item'          => 'View Project',
		 'all_items'          => 'All Projects',
		 'search_items'       => 'Search Project',
		 'parent_item_colon'  => 'Parent Project:',
		 'not_found'          => 'No project found.',
		 'not_found_in_trash' => 'No project found in Trash.',
   );
   $args = array(
     'labels' => $labels,
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true,
     'show_in_menu' => true,
     'query_var' => true,
     'rewrite' => array('slug'=>'portfolio'),
     'capability_type' => 'post',
     'has_archive' => true,
     'hierarchical' => false,
     'menu_position' => 5,
     'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
   );
   register_post_type('portfolio',$args);
 }
 add_action( 'init', 'Undergrad_Portfolio' );

function my_rewrite_flush() {
    Undergrad_Portfolio();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'my_rewrite_flush' );

/* custom Texonomies */
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'taxonomy', array( 'portfolio' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
/**
 * Enqueue scripts and styles.
 */
function Undergrad_scripts() {
	wp_enqueue_style( 'Undergrad-style', get_stylesheet_uri() );
	// Add Font Awesome icons (http://fontawesome.io)

	wp_enqueue_script( 'Undergrad-navigation', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20120206', true );
	wp_localize_script( 'Undergrad-navigation', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'Undergrad' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'Undergrad' ) . '</span>',
	) );

	wp_enqueue_script( 'Undergrad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Undergrad_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/socialmedia.php';
