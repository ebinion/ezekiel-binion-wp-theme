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
// Thanks commentor at: http://codex.wordpress.org/Function_Reference/get_the_tags
function ecb_tags(){
  $args = array(
    'smallest'  => 8,
    'largest'   => 22,
    'unit'      => 'pt',
    'number'    => 0,
    'format'    => 'array', // important
    'separator' => '\n',
    'orderby'   => 'name',
    'order'     => 'ASC',
    'exclude'   => '',
    'include'   => '',
    'link'      => 'view',
    'taxonomy'  => 'post_tag',
    'echo'      => false 
  );
  
  $tag_list = wp_tag_cloud( $args );
  $i = count($tag_list);
  $sep = ' / '; // enter your own seperator string
  foreach($tag_list as $tags) {
  echo strip_tags($tags);
  if($i == 1) { continue; }; $i--; // don't show last sep after the list
  echo $sep;
  }
}