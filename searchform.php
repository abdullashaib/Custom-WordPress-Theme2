<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="form-horizontal" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
		<input type="search" autocomplete="off" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	  <!--<input type="submit" class="btn btn-secondary" value="Search"> -->
  </div>
</form>

