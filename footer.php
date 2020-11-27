<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redux_starter
 */
global $redux_theme;
?>

<!-- Start footer -->
<footer id="mu-footer">
	<!-- start footer top -->
	<div class="mu-footer-top">
		<div class="container">
			<div class="mu-footer-top-area">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Information</h4>
							<ul>
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-2'
								));
								?>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Student Help</h4>
							<ul>
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-3'
								));
								?>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>News letter</h4>
							<p>Get latest update, news & academic offers</p>
							<?php if ($redux_theme['foot-cont']) { ?>
								<form class="mu-subscribe-form">
									<?php echo do_shortcode($redux_theme['foot-cont']) ?>
								</form>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="mu-footer-widget">
							<h4>Contact</h4>
							<address>
								<?php if ($redux_theme['foot-add']) { ?>
									<p><?php echo $redux_theme['foot-add'] ?></p>
								<?php  } ?>
								<?php if ($redux_theme['foot-phone']) { ?>
									<p><?php echo $redux_theme['foot-phone'] ?> </p>
								<?php } ?>
								<?php if ($redux_theme['foot-web']) { ?>
									<p><?php echo $redux_theme['foot-web'] ?> </p>
								<?php } ?>
								<?php if ($redux_theme['foot-email']) { ?>
									<p><?php echo $redux_theme['foot-email'] ?> </p>
								<?php } ?>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer top -->
	<!-- start footer bottom -->
	<div class="mu-footer-bottom">
		<div class="container">
			<div class="mu-footer-bottom-area">
				<?php if ($redux_theme['foot-rights']) { ?>
					<p><?php echo $redux_theme['foot-rights'] ?></p>
			</div>
		<?php } ?>
		</div>
	</div>
	<!-- end footer bottom -->
</footer>
<?php wp_footer(); ?>

</body>

</html>