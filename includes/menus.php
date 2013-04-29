<?php
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
  'container_class' => 'eight columns',
  'menu_class'      => 'horizontal',
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

