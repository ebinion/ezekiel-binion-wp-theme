<?php
/**
 * This file handles loading CSS & JS, and WordPress congfiguration options for the front-end,
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.4
*/ 

// Load JavaScript
function ecb_load_scripts(){
  wp_enqueue_script( 'scripts', get_bloginfo('template_directory') . '/js/scripts-ck.js', false, '1.1');
}


// A shortcode to handle citations in quotes
function cite_handler($atts, $content = null){
  return '<cite>' . do_shortcode($content) . '</cite>';
}


function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


// Remove the links from tags (for now)
function ecb_tags(){
  $tags = get_the_tags();
  $tag_string = "";

  if( $tags != ""){
    foreach( $tags as $tag){
      $tag_string .= $tag->name . ' / ';
    }
    $tag_string = rtrim( $tag_string, " / ");
    echo $tag_string;
  }
}



function gs_gallery_shortcode_handler( $atts ){
  $post = get_post();
  $args = array( 
    'post_type' => 'attachment', 
    'order'=> 'ASC',
    'orderby' => 'post__in',
    // 'post_parent' => $post->ID,
    'post_mime_type' => "image",
    // 'post_status' => 'inherit',
    'include' => $atts['ids']
  ); 
  $images = get_posts($args);;

  $gallery = '';

  foreach($images as $image){
    $image_info = wp_get_attachment_image_src( $image->ID, 'case study thumbnail');

    $gallery .= '<div class="row content">';
    $gallery .= '<div class="span8 columns">';
    $gallery .= '<img src="';
    $gallery .= $image_info[0];
    $gallery .= '">';
    $gallery .= '</div><div class="span4 columns"><p>';
    $gallery .= $image->post_excerpt;
    $gallery .= '</p></div>';
    $gallery .= '</div>';
  }
  echo $gallery;

}
