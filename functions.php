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
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
        // wp_enqueue_style( 'Style', get_template_directory_uri() . 'https://mdbcdn.b-cdn.net/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Setup Theme
 */
function mdbtheme_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mdbtheme_setup');

/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ) );
  
  }
  add_action( 'widgets_init', 'mdb_widgets_init' );

?>