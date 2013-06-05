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
<section class="container">
  <div class="clearfix">
    <div class="span12 columns">
      <h2 class="sectionTitle">Case Study</h2>
    </div>
  </div>
  <a href="#" class="reverse row linkAsBlock">
    <div class="span7 columns">
      <div class="projectImage" style="height: 400px;"></div>
    </div>
    <div class="span5 columns">
      <span class="category tags">Expert Analysis / Interation Design</span>
      <h1>Improving the Craigslist Car + Truck Listing Experience</h1>
      <p>Here's a brief but awesome description of the project.</p>
    </div>
  </a>
</section>

<?php 
  $port_query = new WP_Query(array('post_type' => 'portfolio'));
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
                <p class="category tags">Design in the Browser / Rapid Prototyping / Buckets of Farts</p>
              </a>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>
      </ul>
    </div>
</section>
<?php endif; ?>


<?php get_template_part("footer"); ?>