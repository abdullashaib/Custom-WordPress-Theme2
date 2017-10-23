<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head elements
 *
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Abdulla Shaib">
  <?php wp_head(); ?>
</head>
<body>

<!-- Navigation -->
<div class="container top_container">
  <div class="row">
    <div class="col-lg-6">
        <span class="pull-right login_menu">
        <!-- Login &nbsp;&nbsp;&nbsp; Register -->
      </span>
    </div>
    <div class="col-lg-6">
       <?php get_search_form();?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4 logo">
      <a href="http://www.meccltd.com"><img id="mlogo" src="http://www.meccltd.com/images/logo.jpg" /></a>
    </div>
    <div class="col-md-8 home-modified">
      <nav class="navbar navbar-default default-bottom" role="navigation">    
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarCollapse', 'menu_class' => 'nav navbar-nav' ) ); ?>
        
      </nav>
    </div>
  </div> <!-- /.row -->
</div> <!-- container -->
<article class="top_second"><!-- black background below navigation --></article>

<?php $postid = get_the_ID(); //echo $postid?>



