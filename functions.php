<?php

/**
 * Include external files
 */
require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'test-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . 'https://mdbcdn.b-cdn.net/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Setup Theme
 */
function fleetedu_theme_supports(){
    // load text domain
    load_theme_textdomain( 'fleetedu-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Adding title-tag
    add_theme_support('title-tag');
    
    // Add featured image support
    add_theme_support('post-thumbnails');

    add_theme_support('category-thumbnails');

    // This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fleetedu-theme' ),
			)
    );
    
    // Enabling html5
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
    
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    // Custom logo support
    add_theme_support(
			'custom-logo',
			array(
				'height'      => 48,
				'width'       => 200,
				'flex-width'  => true,
				'flex-height' => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
			)
    );

    
    
    add_theme_support( 'woocommerce' );

}
add_action('after_setup_theme', 'fleetedu_theme_supports');

// Custom theme post
function fleetedu_theme_custom_post() {
    register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'Feature' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true
        )
    );
    
    register_post_type( 'course',
        array(
            'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'Course' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'author'),
            'public' => true,
            'has_archive' => false,
        )
    );
    register_post_type( 'intensive_course',
        array(
            'labels' => array(
                'name' => __( 'Intensive Courses' ),
                'singular_name' => __( 'Intensive Course' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'author'),
            'public' => true,
            'has_archive' => false,
        )
    );
    
    register_post_type( 'event',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'author'),
            'public' => true,
            'has_archive' => false,
        )
    );
}
add_action( 'init', 'fleetedu_theme_custom_post' );

/**
 * Register our sidebars and widgetized areas.
 */
function fleetedu_widgets_init() {

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ) );
    
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer One', 'fleetedu-theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add footer one widgets here.', 'fleetedu-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title font-weight-bold text-uppercase mt-3 mb-4">',
        'after_title'   => '</h4>',
      )
    ); 
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer Two', 'fleetedu-theme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add footer two widgets here.', 'fleetedu-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title font-weight-bold text-uppercase mt-3 mb-4">',
        'after_title'   => '</h5>',
      )
    ); 
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer Three', 'fleetedu-theme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add footer three widgets here.', 'fleetedu-theme' ),
        'before_widget' => '<section id="%1$s" class="widget f-3 %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title font-weight-bold text-uppercase mt-3 mb-4">',
        'after_title'   => '</h5>',
      )
    ); 
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer Four', 'fleetedu-theme' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add footer four widgets here.', 'fleetedu-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title font-weight-bold text-uppercase mt-3 mb-4">',
        'after_title'   => '</h5>',
      )
    ); 
  
  }
  add_action( 'widgets_init', 'fleetedu_widgets_init' );

// Add cs framework
require_once get_theme_file_path() .'/inc/cs-framework/cs-framework.php';

?>