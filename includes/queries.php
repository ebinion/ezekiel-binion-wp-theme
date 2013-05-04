<?php
/**
 * Place functions that affect the WP_Query object or load page content here.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 

// WP_Query Adjustment
function one_post_per_page( $query ){
  $query->set( 'posts_per_page', 1 );
  return;
}
// add_action( 'pre_get_posts', 'one_post_per_page' );