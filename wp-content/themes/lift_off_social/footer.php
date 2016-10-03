<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lift_off_social
 */
?>

	</div><!-- #content -->

	<footer class="main_footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="footer_content">
						<div class="row">
							<div class="col-sm-8">
								<div class="footer_widget">
									<h1 class="clearfix site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1>
									<ul class="clearfix footer_menu">
										<li><a href="#">Pricing</a></li>
										<li><a href="#">How It Works</a></li>
										<li><a href="#">Customer Reviews</a></li>
										<li><a href="#">Faqs</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="footer_widget">
									<img src="<?php echo get_template_directory_uri(); ?>/images/paymentmethod.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
