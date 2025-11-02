<?php
/**
 * Trendy Fashion Outfits functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Trendy Fashion Outfits
 */



if ( ! function_exists( 'trendy_fashion_outfits_support' ) ) :
	function trendy_fashion_outfits_support() {

		load_theme_textdomain( 'trendy-fashion-outfits', get_template_directory() . '/languages' );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'trendy_fashion_outfits_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('TRENDY_FASHION_OUTFITS_BUY_NOW',__('https://www.themescarts.com/products/solar-wordpress-theme/','trendy-fashion-outfits'));
		define('TRENDY_FASHION_OUTFITS_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/trendy-fashion-outfits/','trendy-fashion-outfits'));

	}
endif;
add_action( 'after_setup_theme', 'trendy_fashion_outfits_support' );

if ( ! function_exists( 'trendy_fashion_outfits_setup' ) ) :
	function trendy_fashion_outfits_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'block-nav-menus' );
		add_theme_support( 'experimental-link-color' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'trendy-fashion-outfits' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'trendy_fashion_outfits_setup' );



/**
 * Enqueue scripts and styles.
 */
function trendy_fashion_outfits_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array( 'dashicons' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'trendy-fashion-outfits-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/js/wow.js', array('jquery'));

	wp_enqueue_script('trendy-fashion-outfits-main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), TRENDY_FASHION_OUTFITS_VERSION, true);

		//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome/css/all.css', array(), '5.15.3' );

}
add_action( 'wp_enqueue_scripts', 'trendy_fashion_outfits_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function trendy_fashion_outfits_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	// Enqueue CSS
	wp_enqueue_style(
		'trendy-fashion-outfits-admin-css',
		get_template_directory_uri() . '/notice-getstart/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue JS
	wp_enqueue_script(
		'trendy-fashion-outfits-admin-js',
		get_template_directory_uri() . '/notice-getstart/theme-info.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true // Load in footer
	);
}
add_action( 'admin_enqueue_scripts', 'trendy_fashion_outfits_admin_scripts' );

function trendy_fashion_outfits_block_editor_styles() {
	wp_enqueue_style( 'trendy-fashion-outfits-block-editor-style', get_stylesheet_directory_uri() . '/css/admin-style.css', array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
}
add_action( 'enqueue_block_assets', 'trendy_fashion_outfits_block_editor_styles' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/core/init.php';

/**
 * TGM
 */
require_once get_template_directory() . '/core/tgm/tgm.php';

/** 
 * Customizer
 */
require get_template_directory() . '/core/section-pro/customizer.php';


/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'TRENDY_FASHION_OUTFITS_PATH', trailingslashit( get_template_directory() ) );
define( 'TRENDY_FASHION_OUTFITS_URL', trailingslashit( get_template_directory_uri() ) );
define( 'TRENDY_FASHION_OUTFITS_VERSION', '1.0.0' );
define( 'TRENDY_FASHION_OUTFITS_THEME_NAME', 'trendy-fashion-outfits' );
define( 'TRENDY_FASHION_OUTFITS_OPTION_NAME', 'trendy-fashion-outfits' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require TRENDY_FASHION_OUTFITS_PATH . 'notice-getstart/main.php';


/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function trendy_fashion_outfits_run() {
	new Trendy_Fashion_Outfits();
}
trendy_fashion_outfits_run();

