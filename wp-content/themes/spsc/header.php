<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spsc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/rs-plugin/css/settings.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header start -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
	<div class="header">
		<div class="container">
			<!-- Row Rtart -->
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo.png" alt=""></div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					</div>
				</div>
				<div class="col-md-9 col-sm-9">
					<!--navegation-->
					<div class="navigationwrape">
						<div class="navbar navbar-default" role="navigation">

							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class=""> <a href="#home" class="smoothScroll" style="font-size: 12px; margin-right: -5px;"> <?php echo pll__("Home") ?></a></li>
									<li> <a href="#about" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("About Us") ?></a></li>
									<li> <a href="#service" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("Service") ?></a></li>
									<li> <a href="#porfolio" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("Portfolio") ?></a></li>
									<li> <a href="#testimonials" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("Testimonials") ?> </a></li>
									<li> <a href="#team" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("Team") ?></a></li>
									<li> <a href="#contact" class="smoothScroll" style="font-size: 12px;"> <?php echo pll__("Contact Us") ?> </a></li>
									<?php
									wp_nav_menu( array(
										'theme_location'  => 'primary',
										'container'       => '',
										'items_wrap' 		=> '<li id="" class="">%3$s</li>'
										//'container'       => 'nav navbar-nav',
										//'container_class' => 'navbar-collapse collapse',
										//'menu_class'      => 'nav navbar-nav'
									))
									?>
								</ul>

							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row End -->
		</div>
	</div>
</div>
<!-- Header end -->