<?php

// WP_Query Adjustment
function one_post_per_page( $query ){
  $query->set( 'posts_per_page', 1 );
  return;
}
// add_action( 'pre_get_posts', 'one_post_per_page' );