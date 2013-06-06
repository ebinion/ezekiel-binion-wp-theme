<?php
/**
 * This file handles loading CSS & JS, and WordPress congfiguration options for the front-end,
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.4
*/ 

// Enable support for editor styles
add_editor_style();

// This function will print the required typekit code in HTML instead of loading via a file
function ecb_typekit_load(){
  echo '<script>(function() {var config = {kitId: \'ekq4qad\',  scriptTimeout: 3000 }; var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src=\'//use.typekit.net/\'+config.kitId+\'.js\';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)})();</script>';
}
add_action('wp_head', 'ecb_typekit_load');
// Thinking of a way to load webfonts in the rich text editor
// add_action('admin_head', 'typekit_load');


// Load JavaScript
function ecb_load_scripts(){
  wp_enqueue_script( 'modernizr-2.6.2', get_bloginfo('template_directory') . '/js/modernizr-2.6.2.min.js', false, '1.0');
}
add_action('wp_enqueue_scripts', 'ecb_load_scripts');

// A shortcode to handle citations in quotes
function cite_handler($atts, $content = null){
  return '<cite>' . do_shortcode($content) . '</cite>';
}
add_shortcode('cite', 'cite_handler');

// Add Support for Thumbnails
add_theme_support( 'post-thumbnails' );

// Image sizes
add_image_size( 'portfolio thumbnail', 440, 440, true );
add_image_size( 'case study thumbnail', 762, 9999, false );

// Responsive images (Thanks CSS-Tricks: http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/)
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

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


remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'gs_gallery_shortcode_handler');
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
