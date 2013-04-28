<!DOCTYPE html>
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
  <script type="text/javascript" src="//use.typekit.net/nik5wjb.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID, and uncomment below. -->
    <!-- <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script> -->
  <?php wp_head(); ?>
</head>
<body class="">
  <div class="siteWrapper">
    <header id="branding">
      <div class="container">
        <div class="clearfix">
          <!-- <a id="logo" class="four columns" href="">
            Ezekiel Cortez Binion
          </a> -->
<!--           <%= link_to "Ezekiel Cortez Binion", homepage_path, :id => "logo", :class => "four columns" %> -->
          <nav class="eight columns">
            <ul id="primaryNav" class="horizontal">
              <li><a href="#">work</a></li>
              <li><%= link_to "blog", current_post_path %></li>
              <!-- <li><a href="">about</a></li> -->
              <!-- <li><a href="#">contact</a></li> -->
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <!-- Content belongs here -->
  </div>
  

    <footer id="siteFooter">
      <div class="container">
        <div class="clearfix">
          <div class="twelve columns">
            <h4>Interested in working together on your next web project?</h4>
            <p>Download the <a href="http://gridshiftdesign.com/docs/Grid%20Shift%20project%20worksheet.rtf">Grid Shift project worksheet</a> and send the completed form to hello@gridshiftdesign.com</p>
          </div>
        </div>
        <div class="clearfix">
          <div class="eight columns">
            <p class="copyright">© 2012 Ezekiel C. Binion<br>
              <a href="about.html">Chicago-based UX/UI designer, front end developer, Ruby on Rails engineer,</a> &amp; <a href="http://gridshiftdesign.com">solopreneur at Grid Shift LLC</a></p>
          </div>
          <div class="four columns">
            <nav>
              <ul class="horizontal social">
                <li><a href="http://github.com/ebinion" class="ss-icon ss-social-circle ss-octocat" title="Github"></a></li>
                <li><a href="https://plus.google.com/114970225481656041603/" class="ss-icon ss-social-circle ss-googleplus" title="Github"></a></li>
                <li><a href="http://www.linkedin.com/pub/ezekiel-binion/9/2b7/870" class="ss-icon ss-social-circle ss-linkedin" title="Linkedin"></a></li>
                <li><a href="http://twitter.com/ebinion" class="ss-icon ss-social-circle ss-twitter" title="Twitter"></a></li>
              </ul>
            </nav>
            <ul></ul>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?> 
  </body>
</html>