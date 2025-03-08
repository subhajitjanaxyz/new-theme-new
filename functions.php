<?php
/**
 * all file link here
*/
include_once("inc/sjj_all_file_link.php");

/**
 * all file link here
*/
include_once("inc/logo_change.php");

/**
 * all file link here
*/
include_once("inc/registernavbar.php");
/**
 * all custom post type
*/
include_once("inc/add_custom_prt.php");
/**
 * all custom excerpt type
*/
include_once("inc/customize excerpt.php");

function new_short_code(){
    return "its a new short code";
}

add_shortcode('text', 'new_short_code');

function basic_shortcoder(){
    return "Ali is a web developer";
  }
  add_shortcode( 'ali', 'basic_shortcoder');






// Button Shortcode
function button_shortcode( $atts, $content = null ){
    $values = shortcode_atts( array (
      'url' => '#',
    ), $atts );
    return '<a class="buttonx" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
  }
  add_shortcode( 'button', 'button_shortcode');





  function custom_service(){
    register_post_type ('service',

                                        //its a array
                                        array(
                                          'labels' => array(
                                            'name' => ('Services'),
                                            'singular_name' => ('Service'),
                                            'add_new' => ('Add New Service'),
                                            'add_new_item' => ('Add New Service'),
                                            'edit_item' => ('Edit Service'),
                                            'new_item' => ('New Service'),
                                            'view_item' => ('View Service'),
                                            'not_found' => ('Sorry, we cound\'n find the service you are looking for.'),
                                          ),
                                          'menu_icon' => 'dashicons-networking',
                                          'public' => true,
                                          'publicly_queryable' => true,
                                          'exclude_from_search' => true,
                                          'menu_position' => 5, 
                                          'has_archive' => true,
                                          'hierarchial' => true,
                                          'show_ui' => true,
                                          'capability_type' => 'post',
                                          'rewrite' => array('slag' => 'service'),
                                          'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
                                          )
      );
      add_theme_support('post-thumbnails');
  }
  
  add_action('init', 'custom_service');
  











?>