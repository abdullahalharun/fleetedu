<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------

// -----------------------------------------
// Course Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'course_meta_info',
  'title'     => 'Custom Post Options',
  'post_type' => 'course',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'title'     => 'Course Meta',
      'fields' => array(
        
        array(
          'id'    => 'short_info',
          'type'  => 'textarea',
          'title' => 'Course Short Into',
          'label' => 'Write course short info.',
        ),        
        array(
          'id'        => 'infos',
          'type'      => 'group',
          'title'     => 'Course Info',
          'button_title' => 'Add new info',
          'accordion_title' => 'Add new info',
          'fields'    => array(
            array(
              'id'    => 'info_title',
              'type'  => 'text',
              'title' => 'Info Title',
            ),
            array(
              'id'    => 'info_text',
              'type'  => 'text',
              'title' => 'Info Text',
            ),

          ),
        ),
        array(
          'id'    => 'product_id',
          'type'  => 'text',
          'title' => 'Product ID',
          'label' => 'Enter Product ID.',
        ),       

      ),
    ),

  ),
);

// -----------------------------------------
// Intensive Course Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'course_meta_info',
  'title'     => 'Custom Post Options',
  'post_type' => 'intensive_course',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'title'     => 'Course Meta',
      'fields' => array(
        
        array(
          'id'    => 'short_info',
          'type'  => 'textarea',
          'title' => 'Course Short Into',
          'label' => 'Write course short info.',
        ),        
        array(
          'id'        => 'infos',
          'type'      => 'group',
          'title'     => 'Course Info',
          'button_title' => 'Add new info',
          'accordion_title' => 'Add new info',
          'fields'    => array(
            array(
              'id'    => 'info_title',
              'type'  => 'text',
              'title' => 'Info Title',
            ),
            array(
              'id'    => 'info_text',
              'type'  => 'text',
              'title' => 'Info Text',
            ),

          ),
        ),
        array(
          'id'    => 'product_id',
          'type'  => 'text',
          'title' => 'Product ID',
          'label' => 'Enter Product ID.',
        ),       

      ),
    ),

  ),
);

// -----------------------------------------
// Event Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'event_meta_info',
  'title'     => 'Event Meta Options',
  'post_type' => 'event',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_1',
      'title'     => 'Home',
      'fields' => array(
        
        array(
          'id'    => 'short_info_title',
          'type'  => 'text',
          'title' => 'Short Info Title',
          'label' => 'Write event short info.',
        ),        
        array(
          'id'    => 'short_info',
          'type'  => 'textarea',
          'title' => 'Short Info',
          'label' => 'Write event short info.',
        ),        
        array(
          'id'        => 'infos',
          'type'      => 'group',
          'title'     => 'Event Info',
          'button_title' => 'Add new info',
          'accordion_title' => 'Add new info',
          'fields'    => array(
            array(
              'id'    => 'info_title',
              'type'  => 'text',
              'title' => 'Info Title',
            ),
            array(
              'id'    => 'info_text',
              'type'  => 'text',
              'title' => 'Info Text',
            ),

          ),
        ),
        array(
          'id'    => 'event_link',
          'type'  => 'text',
          'title' => 'Event Link',
          'label' => 'Enter event link.',
        ),       

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
