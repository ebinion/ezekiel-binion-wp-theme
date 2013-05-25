<?php 
/**
 * The comments template that is used for displaying comments on blog posts. This shouldn't be used outside of single.php.
 *
 * @package WordPress
 * @subpackage Ezekiel
 * @since Ezekiel 0.4
*/ 
?>
<?php 
  // Check to see if the post is password protected
  if ( post_password_required() ){ return; } 
?>
<aside id="comments">
  <?php if( have_comments() ): ?>
      <h2>Comments</h2>

      <ol class="comment list">
        <?php wp_list_comments(array(
          'avatar_size' => 80,
          'style' => 'ol'
        )); ?>
      </ol>
  <?php else: ?>
      <h2>No Comments yet.</h2>
  <?php endif; ?>

  <?php 
    // Check to see if comments are open.
    if($post->comment_status == 'open'): 
  ?>
    <?php comment_form(); ?>
  <?php else: ?>
    <h3>Comments are closed</h3>
  <?php endif; ?>
</aside>