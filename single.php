<?php
/**
 * The template for HTML head and displaying the site header
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/ 
?>
<?php get_template_part("header"); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="container">
    <div class="row">
      <article class="span8 columns offset2">
        <header>
          <time class="post_time" datetime="<?php the_time('c'); ?>" pubdate><?php the_time("F j, Y"); ?> at <?php the_time("g:i a"); ?></time>
          <h1 class="post_title"><?php the_title(); ?></h1>
        </header>
        <div class="content">
          <?php the_content(); ?>
        </div>
        <?php comments_template(); ?>
      </article>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_template_part("footer"); ?>