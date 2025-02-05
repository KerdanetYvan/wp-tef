<?php
/**
 * my stater theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my_stater_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_stater_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on my stater theme, use a find and replace
		* to change 'my-stater-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'my-stater-theme', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'my-stater-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'my_stater_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'my_stater_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_stater_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'my_stater_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_stater_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_stater_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'my-stater-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'my-stater-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_stater_theme_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function my_stater_theme_scripts() {
	wp_enqueue_style( 'my-stater-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'my-stater-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'my-stater-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_stater_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// modif james yann yavan 



// activations des shortcode 
require get_template_directory() . '/inc/shortcodes.php';


// fonctions qui active le mode logo dans wordPress
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

/**
 * Functions that follow is an additional code that we added at the creation of this website
 * Les fonctions qui suivent on été ajoutées à la création de ce site
 */
function register_footer_menus() {
    register_nav_menus(array(
        'menu-general' => __('Footer Menu 2', 'my-stater-theme'),
        'menu-3' => __('Footer Menu 3', 'my-stater-theme'),
		'menu-1' => __('Primary Menu nav 1', 'my-stater-theme'),
		'menu-2' => __('Primary Menu nav 2', 'my-stater-theme'),
    ));
}
add_action('init', 'register_footer_menus');

// permet d'activer le mode bannière
$args = array(
    // on peut spécifier la taille apr défaut 
	'flex-width'    => true,
	'width'         => 437,
	'flex-height'    => true,
	'height'        => 845,
);
add_theme_support( 'custom-header', $args );

// fonctions qui va permettre de charger les fichiers css et js 
function capitaine_register_assets() {
	wp_enqueue_script('script-js',get_template_directory_uri(). '/app.js');//on inclu le script js
}
add_action('wp_enqueue_scripts','capitaine_register_assets');





// modif james yann yavan 
