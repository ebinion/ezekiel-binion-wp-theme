<?php
/**
 * Place functions that generate navigation and menus here.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 

// Custom Walker Menu class = "ECB_Walker_Nav_Menu"
require_once("ecb_walker_nav_menu.php");
require_once("ecb_page_walker.php");

// Register all permenant menu (menus that aren't placed in sidebars or through widgets) locations for the site here.
register_nav_menus( array(
  "primary_menu" => "Header Menu",
  "social_menu" => "Social Media Channels Menu",
  "portfolio_list" => "Portfolio Piece List"
  ));

// Header Menu
function header_menu(){
  $options = array(
  'theme_location'  => 'primary_menu',
  'container'       => 'nav',
  // 'container_class' => 'span8 columns',
  'menu_class'      => 'horizontal nav',
  'menu_id'         => 'primaryNav',
  'echo'            => true,
  'fallback_cb'     => false,
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'depth'           => 1,
  'walker'          => new ECB_Walker_Nav_Menu()
  );
  wp_nav_menu($options);
}

// Social Menu in Footer
function social_footer_menu(){
  $options = array(
  'theme_location'  => 'social_menu',
  'container'       => 'nav',
  'container_class' => 'span4 columns',
  'menu_class'      => 'horizontal social nav',
  'echo'            => true,
  'fallback_cb'     => false,
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'depth'           => 1,
  'walker'          => new ECB_Walker_Nav_Menu()
  );
  wp_nav_menu($options);
}

// This new function is pretty awesome. You get to use the Wordpress Menu system to grab specific pages.
// It appears that some data got cached and it's difficult to clear. Will fix later.
function ecb_get_menu_pages($menu_name){

  $options = array(
  'theme_location'  => $menu_name,
  'container'       => false,
  'container_class' => false,
  'items_wrap'      => '%3$s',
  'menu_class'      => false,
  'echo'            => false,
  'fallback_cb'     => false,
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'depth'           => 0,
  'walker'          => new ECB_Page_Walker()
  );
  $ecb_page_ids = wp_nav_menu($options);

  // Trim the extra comma
  $ecb_page_ids = rtrim( $ecb_page_ids, ",");

  $ecb_page_args = array(
    'sort_order' => 'ASC',
    'sort_column' => 'post_title',
    'hierarchical' => 1,
    'include' => $ecb_page_ids,
    'post_type' => 'page',
  ); 
  $ecb_pages = get_pages($ecb_page_args);

  return $ecb_pages;
}