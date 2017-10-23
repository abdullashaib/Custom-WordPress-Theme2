<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="row">
    <div class="col-md-8">
      <?php
    		// Start the loop.
    		while ( have_posts() ) : the_post(); ?>
          <h2><?php single_post_title(); ?></h2>
          
    			<?php 
          the_post_thumbnail();
          the_content(); 
    
    			// End of the loop.
    		endwhile;
    	?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

