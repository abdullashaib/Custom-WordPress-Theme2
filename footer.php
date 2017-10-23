<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */
  $year = date('Y');
?>

<nav class="navbar default-bottom2">
<div class="container footer-bottom">
  <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
  <p>&nbsp;</p>
  <p> &copy;  Copyright <?php echo $year ?>  Millennium Engineering & Construction Contractor Inc MECC. All Rights Reserved. </p>    
</div> <!-- container -->
</nav>

</body>
</html>