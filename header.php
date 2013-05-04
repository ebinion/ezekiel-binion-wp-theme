<?php 
/**
 * The template for HTML head and displaying the site header
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language'); ?>"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
  <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script src="<?php bloginfo('template_directory'); ?>/modernizr-2.6.2.min.js"></script>
  <!-- Typekit -->
  <!--<script type="text/javascript" src="//use.typekit.net/nik5wjb.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID, and uncomment below. -->
    <script>
      var _gaq=[['_setAccount','UA-23433841-1'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  <?php wp_head(); ?>
</head>
<body class="">
  <div class="siteWrapper">
    <header id="branding">
      <div class="container">
        <div class="clearfix">
          <div class="span4 columns">
            <a id="logo" href="<?php bloginfo('wpurl'); ?>">
              <?php bloginfo('name'); ?>
            </a>
          </div>
          <?php header_menu(); ?>
        </div>
      </div>
    </header>