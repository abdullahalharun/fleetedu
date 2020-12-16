<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Fleetedu Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'fleetedu-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Fleetedu Options <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'Homepage',
  'title'       => 'Homepage',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'feature_title',
      'type'    => 'text',
      'title'   => 'Feature Title',
      'default'   => 'Our Features',
    ),
    // end: a field

    array(
      'id'      => 'feature_description',
      'type'    => 'textarea',
      'title'   => 'Feature Description',
      'help'    => 'Add feature description',
    ),

    
  ), // end: fields
);

$options[]      = array(
  'name'        => 'ItqaanStat',
  'title'       => 'stat',
  'icon'        => 'fa fa-chart',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'stat_title',
      'type'    => 'text',
      'title'   => 'Stat Title',
    ),
    // end: a field

    array(
      'id'      => 'students_stat',
      'type'    => 'text',
      'title'   => 'Students Number',
      'default' => '950',
    ),

    array(
      'id'      => 'course_stat',
      'type'    => 'text',
      'title'   => 'Courses Number',
      'default' => '150',
    ),

    array(
      'id'      => 'faculty_stat',
      'type'    => 'text',
      'title'   => 'Faculty Number',
      'default' => '20',
    ),

    array(
      'id'      => 'event_stat',
      'type'    => 'text',
      'title'   => 'Event Number',
      'default' => '70',
    ),

    
  ), // end: fields
);


CSFramework::instance( $settings, $options );
