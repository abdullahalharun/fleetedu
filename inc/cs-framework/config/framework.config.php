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

    
  ), 
);

$options[]      = array(
  'name'        => 'ItqaanStat',
  'title'       => 'Stat',
  'icon'        => 'fa fa-star',

  'fields'      => array(

    array(
      'id'      => 'stat_title',
      'type'    => 'text',
      'title'   => 'Stat Title',
    ),

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

  ), 
);

$options[]      = array(
  'name'        => 'ItqaanQuotes',
  'title'       => 'Quotes',
  'icon'        => 'fa fa-star',

  'fields'      => array(

    array(
      'id'      => 'enable_quote_section',
      'type'    => 'switcher',
      'title'   => 'Enable Quotation Section',
      'help'    => 'Enable Quote Section',
      'default' => true,
    ),

    array(
      'id'      => 'quote1',
      'type'    => 'textarea',
      'title'   => 'Quote One',
      'default' => 'যে ব্যাক্তি আল্লাহ ও আখিরাতের উপর ঈমান রাখে, তার উচিত হয় উত্তম কথা বলা অথবা চুপ থাকা।',
    ),

    array(
      'id'      => 'quote1person',
      'type'    => 'text',
      'title'   => 'Quote One Person',
      'default' => '~ রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম (বুখারী ও মুসলিম)',
    ),
    
     array(
      'id'        => 'quotations',
      'type'      => 'group',
      'title'     => 'Quotes',
      'button_title' => 'Add new quote',
      'accordion_title' => 'Add new quote',
      'fields'    => array(
        array(
          'id'    => 'qoute',
          'type'  => 'textarea',
          'title' => 'Quote Text',
        ),
        array(
          'id'    => 'q_person',
          'type'  => 'text',
          'title' => 'Name',
        ),
      ),
      'dependency'  => array( 'enable_quote_section', '==', 'true'),
    ),
    
        
  ), // end: fields
  
);

$options[]      = array(
  'name'        => 'ItqaanBlog',
  'title'       => 'Blog',
  'icon'        => 'fa fa-star',

  'fields'      => array(

        
     array(
      'id'        => 'categories',
      'type'      => 'group',
      'title'     => 'Post by Category',
      'button_title' => 'Add new Category',
      'accordion_title' => 'Add new Category',
      'fields'    => array(
        array(
          'id'    => 'category_title',
          'type'  => 'text',
          'title' => 'Category Title',
        ),
        array(
          'id'    => 'category_name',
          'type'  => 'text',
          'title' => 'Category Name',
        ),
      ),
    ),
    
        
  ), // end: fields
  
);

$options[]      = array(
  'name'        => 'ItqaanEvents',
  'title'       => 'Events',
  'icon'        => 'fa fa-star',

  'fields'      => array(

    array(
      'id'      => 'enable_event_section',
      'type'    => 'switcher',
      'title'   => 'Enable Event Section',
      'help'    => 'Enable Event Section',
      'default' => true,
    ),   
    
        
  ), // end: fields
  
);


CSFramework::instance( $settings, $options );
