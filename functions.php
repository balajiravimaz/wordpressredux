<?php

/**
 * redux_starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package redux_starter
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('redux_starter_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function redux_starter_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on redux_starter, use a find and replace
		 * to change 'redux_starter' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('redux_starter', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'redux_starter'),
				'menu-2' => esc_html__('footer-1', 'redux_starter'),
				'menu-3' => esc_html__('footer-2', 'redux_starter'),
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
				'redux_starter_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
endif;
add_action('after_setup_theme', 'redux_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function redux_starter_content_width()
{
	$GLOBALS['content_width'] = apply_filters('redux_starter_content_width', 640);
}
add_action('after_setup_theme', 'redux_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function redux_starter_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'redux_starter'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'redux_starter'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'redux_starter_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function redux_starter_scripts()
{
	wp_enqueue_style('redux_starter-style', get_stylesheet_uri(), array(), _S_VERSION);


	wp_enqueue_style('redux_fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style('redux_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('redux_slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('redux_fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');
	wp_enqueue_style('redux_themecolor', get_template_directory_uri() . '/assets/css/theme-color/default-theme.css');
	wp_enqueue_style('redux_default-theme', get_template_directory_uri() . '/assets/css/theme-color/default-theme.css');
	wp_enqueue_style('redux_stylesheet', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_style('redux_font_family', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');

	wp_enqueue_style('redux_font_family2', 'https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700');

	wp_style_add_data('redux_starter-style', 'rtl', 'replace');

	wp_enqueue_script('redux_starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	wp_enqueue_script('jquery');

	wp_enqueue_script('redux_starter-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-counter', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-fancy-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array(), _S_VERSION, true);

	wp_enqueue_script('redux_starter-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'redux_starter_scripts');

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
 * Load TGM.
 */
require get_template_directory() . '/tgm/redux-theme.php';

/**
 * Load TGM.
 */
require get_template_directory() . '/inc/redux-config.php';


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
