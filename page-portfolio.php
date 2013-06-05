<?php
/**
 * The template for displaying single pages
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 1.0
*/ 
?>
<?php get_template_part("header"); ?>

<?php 
  $case_query = new WP_Query(array('post_type' => 'portfolio', 'category_name' => 'Case Study'));
  if($case_query->have_posts()): while($case_query->have_posts()): $case_query->the_post();
?>
  <section class="container">
    <div class="clearfix">
      <div class="span12 columns">
        <h2 class="sectionTitle">Case Study</h2>
      </div>
    </div>
    <a href="#" class="reverse row linkAsBlock">
      <div class="span7 columns">
        <?php echo the_post_thumbnail('case study thumbnail', array('class' => "projectImage")); ?>
      </div>
      <div class="span5 columns">
        <span class="category tags"><?php ecb_tags(); ?></span>
        <h1><?php the_title(); ?></h1>
        <p><?php the_except(); ?></p>
      </div>
    </a>
  </section>
<?php endwhile; endif; ?>

<?php 
  $port_query = new WP_Query(array('post_type' => 'portfolio', 'category_name' => 'Recent Work'));
  if($port_query->have_posts()):
?>
  <section class="container recentWork">
    <div class="row">
      <h2 class="rowless sectionTitle">Recent Work</h2>
      <ul class="portfolioSample list">
        <?php while($port_query->have_posts()): $port_query->the_post(); ?>
          <?php if(has_post_thumbnail()): ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="linkAsBlock">
                <?php echo the_post_thumbnail('portfolio thumbnail', array('class' => "projectImage")); ?>
                <h3 class="projectTitle"><?php the_title(); ?></h3>
                <p class="category tags"><?php ecb_tags(); ?></p>
              </a>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>
      </ul>
    </div>
</section>
<?php endif; ?>


<?php get_template_part("footer"); ?>