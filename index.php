<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package redux_starter
 */

get_header();
?>

<head>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start Slider -->
	<section id="mu-slider">
		<!-- Start single slider item -->
		<div class="mu-slider-single">
			<div class="mu-slider-img">
				<figure>
					<img src=<?php echo get_template_directory_uri() . '/assets/img/slider/1.jpg' ?> alt="img">
				</figure>
			</div>
			<div class="mu-slider-content">
				<h4>Welcome To Varsity</h4>
				<span></span>
				<h2>We Will Help You To Learn</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
				<a href="#" class="mu-read-more-btn">Read More</a>
			</div>
		</div>
		<!-- Start single slider item -->
		<!-- Start single slider item -->
		<div class="mu-slider-single">
			<div class="mu-slider-img">
				<figure>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/slider/2.jpg' ?>" alt="img">
				</figure>
			</div>
			<div class="mu-slider-content">
				<h4>Premiumu Quality Free Template</h4>
				<span></span>
				<h2>Best Education Template Ever</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
				<a href="#" class="mu-read-more-btn">Read More</a>
			</div>
		</div>
		<!-- Start single slider item -->
		<!-- Start single slider item -->
		<div class="mu-slider-single">
			<div class="mu-slider-img">
				<figure>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/slider/3.jpg' ?>" alt="img">
				</figure>
			</div>
			<div class="mu-slider-content">
				<h4>Exclusivly For Education</h4>
				<span></span>
				<h2>Education For Everyone</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
				<a href="#" class="mu-read-more-btn">Read More</a>
			</div>
		</div>
		<!-- Start single slider item -->
	</section>
	<!-- End Slider -->
	<!-- Start service  -->
	<section id="mu-service">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="mu-service-area">
						<!-- Start single service -->
						<div class="mu-service-single">
							<span class="fa fa-book"></span>
							<h3>Learn Online</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
						</div>
						<!-- Start single service -->
						<!-- Start single service -->
						<div class="mu-service-single">
							<span class="fa fa-users"></span>
							<h3>Expert Teachers</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
						</div>
						<!-- Start single service -->
						<!-- Start single service -->
						<div class="mu-service-single">
							<span class="fa fa-table"></span>
							<h3>Best Classrooms</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
						</div>
						<!-- Start single service -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service  -->

	<!-- Start about us -->
	<section id="mu-about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-about-us-area">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="mu-about-us-left">
									<!-- Start Title -->
									<div class="mu-title">
										<h2>About Us</h2>
									</div>
									<!-- End Title -->
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Saepe a minima quod iste libero rerum dicta!</li>
										<li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
										<li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
										<li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="mu-about-us-right">
									<a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
										<img src=<?php echo get_template_directory_uri() . '/assets/img/about-us.jpg' ?> alt="img">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End about us -->

	<!-- Start about us counter -->
	<section id="mu-abtus-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-abtus-counter-area">
						<div class="row">
							<!-- Start counter item -->
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="mu-abtus-counter-single">
									<span class="fa fa-book"></span>
									<h4 class="counter">568</h4>
									<p>Subjects</p>
								</div>
							</div>
							<!-- End counter item -->
							<!-- Start counter item -->
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="mu-abtus-counter-single">
									<span class="fa fa-users"></span>
									<h4 class="counter">3500</h4>
									<p>Students</p>
								</div>
							</div>
							<!-- End counter item -->
							<!-- Start counter item -->
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="mu-abtus-counter-single">
									<span class="fa fa-flask"></span>
									<h4 class="counter">65</h4>
									<p>Modern Lab</p>
								</div>
							</div>
							<!-- End counter item -->
							<!-- Start counter item -->
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="mu-abtus-counter-single no-border">
									<span class="fa fa-user-secret"></span>
									<h4 class="counter">250</h4>
									<p>Teachers</p>
								</div>
							</div>
							<!-- End counter item -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End about us counter -->

	<!-- Start features section -->
	<section id="mu-features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="mu-features-area">
						<!-- Start Title -->
						<div class="mu-title">
							<h2>Our Features</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
						</div>
						<!-- End Title -->
						<!-- Start features content -->
						<div class="mu-features-content">
							<div class="row">
								<div class="col-lg-4 col-md-4  col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-book"></span>
										<h4>Professional Courses</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-users"></span>
										<h4>Expert Teachers</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-laptop"></span>
										<h4>Online Learning</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-microphone"></span>
										<h4>Audio Lessons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-film"></span>
										<h4>Video Lessons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="mu-single-feature">
										<span class="fa fa-certificate"></span>
										<h4>Professional Certificate</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
										<a href="#">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End features content -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features section -->


	<!-- Start from blog -->
	<section id="mu-from-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-from-blog-area">
						<!-- start title -->
						<div class="mu-title">
							<h2>From Blog</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
						</div>
						<!-- end title -->
						<!-- start from blog content   -->
						<div class="mu-from-blog-content">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<article class="mu-blog-single-item">
										<figure class="mu-blog-single-img">
											<a href="#"><img src=<?php echo get_template_directory_uri() . '/assets/img/blog/blog-1.jpg' ?> alt="img"></a>
											<figcaption class="mu-blog-caption">
												<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
											</figcaption>
										</figure>
										<div class="mu-blog-meta">
											<a href="#">By Admin</a>
											<a href="#">02 June 2016</a>
											<span><i class="fa fa-comments-o"></i>87</span>
										</div>
										<div class="mu-blog-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
											<a class="mu-read-more-btn" href="#">Read More</a>
										</div>
									</article>
								</div>
								<div class="col-md-4 col-sm-4">
									<article class="mu-blog-single-item">
										<figure class="mu-blog-single-img">
											<a href="#"><img src=<?php echo get_template_directory_uri() . '/assets/img/blog/blog-2.jpg' ?> alt="img"></a>
											<figcaption class="mu-blog-caption">
												<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
											</figcaption>
										</figure>
										<div class="mu-blog-meta">
											<a href="#">By Admin</a>
											<a href="#">02 June 2016</a>
											<span><i class="fa fa-comments-o"></i>87</span>
										</div>
										<div class="mu-blog-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
											<a class="mu-read-more-btn" href="#">Read More</a>
										</div>
									</article>
								</div>
								<div class="col-md-4 col-sm-4">
									<article class="mu-blog-single-item">
										<figure class="mu-blog-single-img">
											<a href="#"><img src=<?php echo get_template_directory_uri() . '/assets/img/blog/blog-3.jpg' ?> alt="img"></a>
											<figcaption class="mu-blog-caption">
												<h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
											</figcaption>
										</figure>
										<div class="mu-blog-meta">
											<a href="#">By Admin</a>
											<a href="#">02 June 2016</a>
											<span><i class="fa fa-comments-o"></i>87</span>
										</div>
										<div class="mu-blog-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
											<a class="mu-read-more-btn" href="#">Read More</a>
										</div>
									</article>
								</div>
							</div>
						</div>
						<!-- end from blog content   -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End from blog -->
</body>

<?php
get_footer();
