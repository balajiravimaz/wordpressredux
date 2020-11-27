<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redux_starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	global $redux_theme;
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--START SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- END SCROLL TOP BUTTON -->

	<!-- Start header  -->
	<header id="mu-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="mu-header-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="mu-header-top-left">
									<?php if ($redux_theme['text-email']) { ?>
										<div class="mu-top-email">
											<i class="fa fa-envelope"></i>
											<span><?php echo $redux_theme['text-email']; ?></span>
										</div>
									<?php } ?>
									<div class="mu-top-phone">
										<?php if ($redux_theme['text-number']) { ?>
											<i class="fa fa-phone"></i>
											<span><?php echo $redux_theme['text-number'] ?></span>
									</div>
								<?php } ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="mu-header-top-right">
									<nav>
										<ul class="mu-top-social-nav">
											<?php if ($redux_theme['facebook']) { ?>
												<li><a href="<?php echo $redux_theme['facebook'] ?>"><span class="fa fa-facebook"></span></a></li>
											<?php  } ?>
											<?php if ($redux_theme['google']) { ?>
												<li><a href="<?php echo $redux_theme['google'] ?>"><span class="fa fa-google-plus"></span></a></li>
											<?php } ?>
											<?php if ($redux_theme['twit']) { ?>
												<li><a href="<?php echo $redux_theme['twit'] ?>"><span class="fa fa-twitter"></span></a></li>
											<?php } ?>

											<?php if ($redux_theme['yout']) { ?>
												<li><a href="<?php echo $redux_theme['yout'] ?>"><span class="fa fa-youtube"></span></a></li>
											<?php } ?>
											<?php if ($redux_theme['linkdn']) { ?>
												<li><a href="<?php echo $redux_theme['linkdn'] ?>"><span class="fa fa-linkedin"></span></a></li>
											<?php } ?>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End header  -->
	<!-- Start menu -->
	<section id="mu-menu">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- LOGO -->
					<!-- TEXT BASED LOGO -->
					<?php if ($redux_theme['switch-parent-1'] == '1') { ?>
						<a class="navbar-brand" href="index.html"><img src="<?php echo $redux_theme['opt-media-1']['url'] ?>" alt="logo"></a>
					<?php } else { ?>
						<a class="navbar-brand" href="index.html"><i class="<?php echo $redux_theme['logo-icon'] ?>"></i><span><?php echo $redux_theme['logo-text'] ?></span></a>
					<?php } ?>
					<!-- IMG BASED LOGO  -->

				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_class'  => 'nav navbar-nav navbar-right main-nav',

						));
						?>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</section>
	<!-- End menu -->