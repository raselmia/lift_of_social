<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lift_off_social
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<section class="main_header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1 class="clearfix site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
						</div>
					
						<div class="clearfix collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav pull-right">
								<li><a href="http://localhost/lift_off_social/">Pricing</a></li>
								<li><a href="#">How It Works</a></li>
								<li><a href=" http://localhost/lift_off_social/testmonials/">Customer Reviews</a></li>
								<li><a href=" http://localhost/lift_off_social/faqs/">Faqs</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="http://localhost/lift_off_social/contact-us/">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>








	<div id="content" class="site-content">
