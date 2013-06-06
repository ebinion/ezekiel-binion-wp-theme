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
          <div class="span8 columns">
            <p class="copyright">&copy;<?php echo date("Y"); ?> Ezekiel C. Binion<br>
            Chicago-based UX/UI designer, front end developer, &amp; Ruby on Rails engineer</p>
          </div>
          <?php social_footer_menu(); ?>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?> 
  </body>
</html>
