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