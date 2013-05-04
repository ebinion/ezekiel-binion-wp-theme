<?php
/**
 * The fallback template for page content.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 
?>
<?php get_template_part("header"); ?>

<div class="container">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="row">
      <article class="eight columns offset-two post_preview">
        <header>
          <time class="post_time" datetime="<?php the_time('c'); ?>"><?php the_time("F j, Y"); ?> at <?php the_time("g:i a"); ?></time>
          <h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </header>
        <div class="content">
          <?php the_excerpt(); ?>
        </div>
      </article>
    </div>
  <?php endwhile; endif; ?>
  <nav class="row pagination">
    <div class="four columns offset-two">
      <?php next_posts_link("&larr; Older Posts"); ?>&nbsp;
    </div>
    <div class="four columns right">
      &nbsp;<?php previous_posts_link("Newer Posts &rarr;"); ?>
    </div>
  </nav>
</div>

<?php get_template_part("footer"); ?>