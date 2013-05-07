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

// Register all permenant menu (menus that aren't placed in sidebars or through widgets) locations for the site here.
register_nav_menus( array(
  "primary_menu" => "Header Menu",
  "social_menu" => "Social Media Channels Menu"
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