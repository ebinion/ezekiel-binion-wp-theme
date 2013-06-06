<?php
/**
 * The template for portfolio pages
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.1
*/
?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="container">
    <header class="clearfix">
      <div class="span12 columns">
        <p class="category tags noMargin center"><?php ecb_tags(); ?></p>
        <h1 class="post_title center"><?php the_title(); ?></h1>
      </div>
    </header>
    <section class="row content">
        <div class="span8 columns">
          <?php echo the_post_thumbnail('case study thumbnail', array('class' => "projectImage")); ?>
        </div>
        <div class="span4 columns">
          <?php if( $post->post_excerpt != "" ): ?>
            <p class="intro"><?php echo $post->post_excerpt; ?></p>
          <?php endif; ?>

        </div>
     </section>

     <?php the_content(); ?>

  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>