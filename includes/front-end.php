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
function typekit_load(){
  echo '<script>(function() {var config = {kitId: \'ekq4qad\',  scriptTimeout: 3000 }; var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src=\'//use.typekit.net/\'+config.kitId+\'.js\';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)})();</script>';
}

add_action('wp_head', 'typekit_load');
add_action('admin_head', 'typekit_load');