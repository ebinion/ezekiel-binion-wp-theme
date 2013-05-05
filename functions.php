<?php 
/**
 * Use this file for theme specific modules, functions, and such. When possible, group related modules and code into seperate files.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 


// Enable support for editor styles
add_editor_style();


// Nav Menus
require_once("includes/menus.php");

// Custom Queries
require_once("includes/queries.php");