<?php
/**
 * The footer template for the site.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 
?>
  </div>

    <footer id="siteFooter">
      <div class="container">
        <div class="clearfix">
          <div class="eight columns">
            <p class="copyright">©<?php echo date("Y"); ?> Ezekiel C. Binion<br>
              <a href="about.html">Chicago-based UX/UI designer, front end developer, &amp; Ruby on Rails engineer</a></p>
          </div>
          <?php social_footer_menu(); ?>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?> 
  </body>
</html>