<?php
if( !function_exists('ecb_create_post_types') )
{
  function ecb_create_post_types(){
    $portfolio_labels = array(
    'name' => __( 'Portfolio' ),
    'singular_name' => __( 'Portfolio' ),
    );
    $portfolio_args = array(
    'labels' => $portfolio_labels,
    'label' => __('Portfolio'),
    'singular_label' => __('Portfolio'),
    'public' => true,
    'show_ui' => true,
    '_builtin' => false,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','excerpt', 'revisions','thumbnail'),
    'taxonomies' => array('category', 'post_tag'),
    // 'menu_icon' => get_bloginfo('template_directory'). '/images/newspaper-pencil.png'
    );
    
    //Register Post Types
    if( function_exists('register_post_type') )
    {
      register_post_type('portfolio', $portfolio_args);
    }
  }
  
}
add_action('init', 'ecb_create_post_types');