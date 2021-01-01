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
      'id'      => 'smart_slider_id',
      'type'    => 'text',
      'title'   => 'Slider ID',
      'default'   => '2',
    ),
    // end: a field
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
  'title'       => 'Stat',
  'icon'        => 'fas fa-chart-line',

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

$options[]      = array(
  'name'        => 'ItqaanQuotes',
  'title'       => 'Quotes',
  'icon'        => 'fas fa-chart-line',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'quote1',
      'type'    => 'textarea',
      'title'   => 'Quote One',
      'default' => 'যে ব্যাক্তি আল্লাহ ও আখিরাতের উপর ঈমান রাখে, তার উচিত হয় উত্তম কথা বলা অথবা চুপ থাকা।',
    ),
    // end: a field

    array(
      'id'      => 'quote1person',
      'type'    => 'text',
      'title'   => 'Quote One Person',
      'default' => '~ রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম (বুখারী ও মুসলিম)',
    ),
    
    // begin: a field
    array(
      'id'      => 'quote2',
      'type'    => 'textarea',
      'title'   => 'Quote Two',
      'default' => 'যে ব্যাক্তি আল্লাহ ও আখিরাতের উপর ঈমান রাখে, তার উচিত হয় উত্তম কথা বলা অথবা চুপ থাকা।',
    ),
    // end: a field

    array(
      'id'      => 'quote2person',
      'type'    => 'text',
      'title'   => 'Quote Two Person',
      'default' => '~ রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম (বুখারী ও মুসলিম)',
    ),
    
    // begin: a field
    array(
      'id'      => 'quote3',
      'type'    => 'textarea',
      'title'   => 'Quote Three',
      'default' => 'যে ব্যাক্তি আল্লাহ ও আখিরাতের উপর ঈমান রাখে, তার উচিত হয় উত্তম কথা বলা অথবা চুপ থাকা।',
    ),
    // end: a field

    array(
      'id'      => 'quote3person',
      'type'    => 'text',
      'title'   => 'Quote Three Person',
      'default' => '~ রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম (বুখারী ও মুসলিম)',
    ),

    array(
      'id'        => 'quotation-group',
      'type'      => 'group',
      'title'     => 'Group',
      'button-text' => 'Add new quote',
      'fields'    => array(
        array(
          'id'    => 'qoute',
          'type'  => 'textarea',
          'title' => 'Text',
        ),
        array(
          'id'    => 'quote-p',
          'type'  => 'text',
          'title' => 'Color',
        ),
      ),
    ),
    

    
  ), // end: fields
  
);


CSFramework::instance( $settings, $options );
