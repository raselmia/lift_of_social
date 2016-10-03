<?php 
/*
Template Name:Landing Page
*/

get_header( );
 ?>

<?php get_template_part('content-banner' ); ?>


<section class="barang_logo bdbd">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="brand_inner ">
					<ul class="brand_list">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/brandlogo.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="brand_bottom bdbd">
	<div class="container">
		<div class="row ">
			<div class="col-sm-4">
				<div class="single-bdb">
					<h2 class="title"><i class="fa fa-heart"></i> Start Getting Traction</h2>
					<p>We will work to build your mentions, reach, page likes, traffic and followers through our manual social promotion.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-bdb">
					<h2 class="title"><i class="fa fa-rocket"></i> Grow Consistantly</h2>
					<p>We will work to build your mentions, reach, page likes, traffic and followers through our manual social promotion.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-bdb">
					<h2 class="title"><i class="fa fa-bar-chart"></i> Hold Us Accountable</h2>
					<p>We will work to build your mentions, reach, page likes, traffic and followers through our manual social promotion.</p>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="how_wrok bdbd">
	<div class="container">
		<div class="row">
			<div class="text-center section_title">
				<h2>How It Works</h2>
				<p>Super easy, super fast</p>
			</div>
			<div class="col-sm-4">
				<div class="single_hw">
					<div class="img_wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hw1.png" alt="">
					</div>
					<h2 class="title">Create Account</h2>
					<p>Choose package from our signup page depending on your preference for features.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single_hw">
					<div class="img_wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hw2.png" alt="">
					</div>
					<h2 class="title">Choose Keywords</h2>
					<p>Help us understand the nature of your business by providing keywords related to your niche</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single_hw">
					<div class="img_wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hw3.png" alt="">
					</div>
					<h2 class="title">Submit Your Campaign</h2>
					<p>Within 48 hours, We'll get to work on your campaign & begin providing monthly reports on growth</p>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="clients_say">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="test_inner">
					<div class="text-center section_title">
						<h2>We are proud of our customer’s success. <br> Here’s what they say:</h2>
					</div>
				</div>
				<div class="sl_wrap">	
					<div id="clientsSlider" class="test_slider">
						<div class="text-center single_t_slide">
							<div class="t_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tim.png" alt="">
							</div>
							<p class="c_name"><span>Ted </span> - Indie Film Maker</p>
							<p class="te_content">You guys helped me get my start and get funding on my first film project. Can't thank you enough <br>
							- Thanks Social Liftoff Social!!</p>
						</div>
						<div class="text-center single_t_slide">
							<div class="t_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tim.png" alt="">
							</div>
							<p class="c_name"><span>Ted </span> - Indie Film Maker</p>
							<p class="te_content">You guys helped me get my start and get funding on my first film project. Can't thank you enough <br>
							- Thanks Social Liftoff Social!!</p>
						</div>
						<div class="text-center single_t_slide">
							<div class="t_img_wrap">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tim.png" alt="">
							</div>
							<p class="c_name"><span>Ted </span> - Indie Film Maker</p>
							<p class="te_content">You guys helped me get my start and get funding on my first film project. Can't thank you enough <br>
							- Thanks Social Liftoff Social!!</p>
						</div>
					</div>
					<div class="clearfix slider_ctrl">
						<a href="#" class="sl_arrow arrow_left" ><i class="fa fa-angle-left"></i></a>
						<a href="#" class="sl_arrow arrow_right" ><i class="fa fa-angle-right"></i></a>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="expertise">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="expertise_inner">
					<div class="text-center section_title">
						<h2>We Have Expertise In All Industries And <br> Are Ready To Help You</h2>
					</div>
				</div>
				<div class="ex_img_wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/images/expimg.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class=" agancy">
	<div class="container">
		<div class="row">
			<div class="col-ms-12">
				<div class="expertise_inner">
					<div class="text-center section_title">
						<h2>Are You An Agency?</h2>
						<p><a href="#">See our special packages</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

 <?php get_footer( ); ?>