<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
	<title>
	<?php bloginfo('name'); ?></title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">



	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!-- <?php 
global $post;
$direct_parent = $post->post_parent;
echo $direct_parent;
echo $post->ID;


?> -->

		<nav id="navbar" class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
        <div class="text-center">
	      <a class="navbar-brand" href="<?php echo home_url(); if ($direct_parent == 6 || $post->ID == 6){ echo "/esp"; }?> ">Barbara L. Nelson LCSW</a>
        <div>Se Habla Español</div>
        </div>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <a href="<?php the_field("translate-page"); ?>"><span class="translate">
        <?php if ($direct_parent == 4 || $post->ID == 4){
          echo "Traducir la pàgina";
        } else {
          echo "Translate page";
        }
        ?>
        </span></a>
        <?php if ($direct_parent == 4 || $post->ID == 4){
          $menu = "eng";
        } else { $menu = "esp"; }
            wp_nav_menu( array(

                'menu'              => $menu,
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => ' nav navbar-nav  navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?> 
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
<div id="main" class="container-fluid">
  <div class="row is-table-row">
    