<?php
/*
Template Name: Search Page
*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Site</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-bottom: 2%;">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">Demo</a>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <?php $nav = array('theme_location' => 'primary');
              wp_nav_menu($nav); ?>
      </div>
        <form role="search" method="get" id="searchform" align="right" class="form-inline my-2 my-md-0" action="<?php echo home_url( '/' ); ?>">
        		<input type="text" value="" name="s" id="s" class="form-control" placeholder="Search" />
        		<!-- <input type="submit" id="searchsubmit" value="Search" class="button" /> -->
        </form>
    </nav>

    <main role="main" class="container">
