<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Brightladder Social
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<?php wp_head(); ?>

<style>
	.navbar {
		height: 100px !important;
		box-shadow: 0 2px 4px rgba(0,0,0,0.5);
}
	.navbar, .navbar-inverse, .navbar-fixed-top {
		background-image: none !important;
		background-color: #000 !important;	
}
	.navbar img {
		margin-top: 25px;
}
	.phone-number {
		position: relative;
		top: -22.5px;
		left: 52.5%;
}
	.phone-number > a, a:visited {
		color: white !important;
		font-size: 14px;
		font-weight: bold;
}
.top-float {
	position: relative;
	float: left;
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brightladder-social' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-float">
		    <nav class="navbar navbar-inverse navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
			          <div class="logo">
				          <a href="#">
						  	<img src="http://benjeske.info/ladder/wp-content/uploads/2015/03/logo.png" alt="Brightladder" />
				          </a>
				          <br>
				          	<span class="phone-number">
				          		<a href="#">
						  			800.309.3049
				          		</a>
				          	</span>
			          </div>
			      </a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
					<!-- Add in wp-menu here for nav items -->
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
		</div>
		<div class="top-float">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">