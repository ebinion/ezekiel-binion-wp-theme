<?php 
/**
 * Use this file for theme specific modules, functions, and such. When possible, group related modules and code into seperate files.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 

// Configuration for front-end
require_once("includes/front-end.php");

// Nav Menus
require_once("includes/menus.php");

// Custom Queries
require_once("includes/queries.php");

// Custom Post Types, Categories, & Tags
require_once("includes/custom-posts.php");


// Enable support for editor styles
add_editor_style();


add_action('init', 'ecb_create_post_types');
add_action('wp_enqueue_scripts', 'ecb_load_scripts');

add_shortcode('cite', 'cite_handler');

// Add Support for Thumbnails
add_theme_support( 'post-thumbnails' );

// Image sizes
add_image_size( 'portfolio thumbnail', 440, 440, true );
add_image_size( 'case study thumbnail', 762, 9999, false );

// Responsive images (Thanks CSS-Tricks: http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/)
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'gs_gallery_shortcode_handler');