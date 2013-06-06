<?php
/**
 * The template for HTML head and displaying the site header
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/
?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="container">
    <div class="row">
      <article class="span8 columns offset2">
        <header>
          <time class="post_time" datetime="<?php the_time('c'); ?>" pubdate><?php the_time("F j, Y"); ?> at <?php the_time("g:i a"); ?></time>
          <h1 class="post_title center"><?php the_title(); ?></h1>
        </header>
        <div class="content">
          <?php if( $post->post_excerpt != "" ): ?>
            <p class="intro"><?php echo $post->post_excerpt; ?></p>
          <?php endif; ?>
          <?php the_content(); ?>
        </div>
        <?php comments_template(); ?>
      </article>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>