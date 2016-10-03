<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package lift_off_social
 */
?>

<section class="banner">
	<div class="banner_wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="banner_inner">
						<?php if(is_front_page()) {  ?>
							<div class="row home-ban">
								<div class="col-sm-5">
									<img src="<?php echo get_template_directory_uri(); ?>/images/graph.jpg" alt="">
								</div>
								<div class="col-sm-7">
									<h1 class="banner_title">Gradual Social Media <br>Growth Delivered Monthly!</h1>
									<h3 class="bann_dis">Our team of professionals will help grow your <br>Social Media presence</h3>
									<a href="" class="btn btn-success">View Pricing <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						<?php } else { ?>
								<h1 class="banner_title"><?php the_title( ); ?></h1>

						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>