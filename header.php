<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="logo-container">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									
									<svg id="logo" width="50px" height="50px">
										<g>
											<polyline points="34.951,50 45,50 45,39 41.826,39 41.896,11 45,11 45,0 29,0 29,27.618 15.807,0 10.246,0 	"/>
											<polygon fill="#CC0000" points="0,50 16,50 16,22.162 29.236,50 34.951,50 10.246,0 0,0 0,11 3.217,11 3.147,39 0,39 	"/>
											<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="35.652,49.5 44.5,49.5 44.5,38.721 41.396,38.721 
												41.466,11.28 44.5,11.28 44.5,0.5 28.855,0.5 28.855,27.566 15.956,0.5 10.519,0.5 0.5,0.5 0.5,11.28 3.646,11.28 3.577,38.721 
												0.5,38.721 0.5,49.5 16.145,49.5 16.145,22.219 29.086,49.5 	"/>
										</g>
									</svg>

								</a>
							</div><!-- end of #logo -->

						</div>
						<?php sparkling_header_menu(); // main navigation ?>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<?php if( sparkling_should_display_featured_image() ) : ?>
		
		<div class="hero-container container" style="background-image: url(<?php echo of_get_option( 'sparkling_featured_image' ); ?>)">
			<div class="row">
				<div class="hero-content col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
					<div class="hero-title">
						<h1><?php echo bloginfo('name'); ?></h1>
					</div>
					<div class="hero-description">
						<p><?php echo bloginfo('description'); ?></p>
					</div>
				</div>
			</div>
		</div>

		<?php endif; ?>

		<div class="container main-content-area">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
