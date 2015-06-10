<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tatami-code
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo esc_url ( get_template_directory_uri() ); ?>/tatamistrap/stylesheets/styles.css">
<link rel="stylesheet" href="<?php echo esc_url ( get_stylesheet_directory_uri() ); ?>/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>

	<div id="tc-bar"></div>
	<header class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header tc-navbar-header">
          <button type="button" class="navbar-toggle collapsed tc-navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand tc-navbar-brand" href="#"><img src="<?php echo esc_url ( get_stylesheet_directory_uri() ); ?>/images/logo.svg" width="164" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        	<?php wp_nav_menu(array( 'container' => false, 'menu_class' => 'nav navbar-nav tc-nav-bar' ));?>
          <!-- <ul class="nav navbar-nav tc-nav-bar">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </header>


	<div class="container site-content">
