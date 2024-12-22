<?php
// Add cache control headers
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>WebGIS</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- fevicon -->
	<link rel="icon" href="<?= base_url() ?>assets/web/images/fevicon.png" type="image/gif" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/web/css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/web/css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/web/css/responsive.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/web/css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?= base_url() ?>assets/web/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
	<!-- loader  -->
	<div class="loader_bg">
		<div class="loader"><img src="<?= base_url() ?>assets/web/images/loading.gif" alt="#" /></div>
	</div>
	<!-- end loader -->
	<!-- header -->
	<header>
		<!-- header inner -->
		<div class="header-top">
			<div class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
							<div class="full">
								<div class="center-desk">
									<div class="logo">
										<a href="index.html"><img src="<?= base_url() ?>assets/web/images/logo.png" alt="#" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
							<div class="header_information">
								<div class="menu-area">
									<div class="limit-box">
										<nav class="main-menu ">
											<ul class="menu-area-main">
												<li class="active"> <a href="<?= base_url() ?>">Home</a> </li>
												<li> <a href="#map">MAP</a> </li>
												<li> <a href="#courses">My Courses </a> </li>
												<li> <a href="#about">About</a> </li>
												<li> <a href="#learn">My Profile</a> </li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="mean-last">
									<a href="#"><img src="<?= base_url() ?>assets/web/images/search_icon.png" alt="#" /></a> <a href="#">login/sign up</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end header inner -->

			<!-- end header -->
			<section class="slider_section">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">

							<div class="container-fluid padding_dd">
								<div class="carousel-caption">
									<div class="row">
										<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
											<div class="text-bg">
												<h1>Search your Favorite Course here</h1>
												<p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
												<a href="#">Read more</a> <a href="#">get a qoute</a>
											</div>
										</div>
										<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
											<div class="images_box">
												<figure><img src="<?= base_url() ?>assets/web/images/img2.png"></figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">

							<div class="container-fluid padding_dd">
								<div class="carousel-caption">

									<div class="row">
										<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
											<div class="text-bg">
												<h1>Search your Favorite Course here</h1>
												<p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
												<a href="#">Read more</a><a href="#">get a qoute</a>
											</div>
										</div>

										<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
											<div class="images_box">
												<figure><img src="<?= base_url() ?>assets/web/images/img2.png"></figure>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>


						<div class="carousel-item">

							<div class="container-fluid padding_dd">
								<div class="carousel-caption ">
									<div class="row">
										<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
											<div class="text-bg">
												<h1>Search your Favorite Course here</h1>
												<p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
												<a href="#">Read more</a> <a href="#">get a qoute</a>
											</div>
										</div>
										<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
											<div class="images_box">
												<figure><img src="<?= base_url() ?>assets/web/images/img2.png"></figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>

		</section>
		</div>
	</header>

	<!-- about  -->
	<div id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="about-box">
						<h2>About <strong class="yellow">Our Game</strong></h2>
						<p> orem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, assumenda, vo
							luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos at consectetur illo culpa, </p>
						<a href="Javascript:void(0)">Read more</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="about-box">
						<figure><img src="<?= base_url() ?>assets/web/images/about.jpg" alt="#" /></figure>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end abouts -->

	<!-- Courses -->
	<div id="courses" class="Courses">
		<div class="container-fluid padding_left3">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="box_bg">
						<div class="box_bg_img">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="box_my">
										<figure><img src="<?= base_url() ?>assets/web/images/my1.jpg"></figure>
										<div class="overlay">
											<h3>Data Structures</h3>
											<p>It is a long established fact that a reader will be distracted by the readable content o</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="box_my">
										<figure><img src="<?= base_url() ?>assets/web/images/my2.jpg"></figure>
										<div class="overlay">
											<h3>Cinematography</h3>
											<p>It is a long established fact that a reader will be distracted by the readable content o</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="box_my">
										<figure><img src="<?= base_url() ?>assets/web/images/my3.jpg"></figure>
										<div class="overlay">
											<h3>Skills</h3>
											<p>It is a long established fact that a reader will be distracted by the readable content o</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="box_my">
										<figure><img src="<?= base_url() ?>assets/web/images/my4.jpg"></figure>
										<div class="overlay">
											<h3>Teaching Science</h3>
											<p>It is a long established fact that a reader will be distracted by the readable content o</p>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
					<div class="box_text">
						<div class="titlepage">
							<h2>My <strong class="yellow"> Courses</strong></h2>
						</div>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<a href="Javascript:void(0)">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Courses -->


	<!-- our -->
	<div id="map" class="important">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2><strong class="yellow">MAP</strong></h2>
						<h3>Fadhil Raihan Akbar - 101</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="important_bg" style="display: flex; justify-content: center;">

			<iframe src="<?= base_url() ?>/home" width="1260" height="650" style="border: none;"></iframe>

		</div>
	</div>
	</div>

	<!-- end our -->

	<!--  footer -->
	<footer>
		<div class="footer ">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<form class="news">
							<input class="newslatter" placeholder="Email" type="text" name=" Email">
							<button class="submit">Subscribe</button>
						</form>
					</div>
					<div class="col-md-12">
						<h2>Newsletter</h2>
						<span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in </span>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
								<div class="address">
									<h3>Contact us </h3>
									<ul class="loca">
										<li>
											<a href="#"><img src="<?= base_url() ?>assets/web/icon/loc.png" alt="#" /></a>London 145
											<br>United Kingdom
										</li>
										<li>
											<a href="#"><img src="<?= base_url() ?>assets/web/icon/email.png" alt="#" /></a>demo@gmail.com
										</li>
										<li>
											<a href="#"><img src="<?= base_url() ?>assets/web/icon/call.png" alt="#" /></a>+12586954775
										</li>
									</ul>
									<ul class="social_link">
										<li><a href="#"><img src="<?= base_url() ?>assets/web/icon/fb.png"></a></li>
										<li><a href="#"><img src="<?= base_url() ?>assets/web/icon/tw.png"></a></li>
										<li><a href="#"><img src="<?= base_url() ?>assets/web/icon/lin(2).png"></a></li>
										<li><a href="#"><img src="<?= base_url() ?>assets/web/icon/instagram.png"></a></li>
									</ul>

								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="address">
									<h3>Courses</h3>
									<ul class="Menu_footer">
										<li class="active"> <a href="#">Masters Degree</a> </li>
										<li><a href="#">Post GraduateU</a> </li>
										<li><a href="#">Ndergraduate</a> </li>
										<li><a href="#">Engineering</a> </li>
										<li><a href="#">Ph.D Degree</a> </li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="address">
									<h3>Information</h3>
									<ul class="Links_footer">
										<li class="active"><a href="#">Campus Tour</a> </li>
										<li><a href="#">Student Lifes</a> </li>
										<li><a href="#">Cholarship</a> </li>
										<li><a href="#"> Admission</a> </li>
										<li><a href="#">Leadership</a> </li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6 ">
								<div class="address">
									<a href="index.html"> <img src="<?= base_url() ?>assets/web/images/logo1.jpg" alt="logo"></a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<div class="copyright">
				<div class="container">
					<p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	<!-- Javascript files-->
	<script src="<?= base_url() ?>assets/web/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/web/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/web/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/web/js/jquery-3.0.0.min.js"></script>
	<script src="<?= base_url() ?>assets/web/js/plugin.js"></script>
	<!-- sidebar -->
	<script src="<?= base_url() ?>assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url() ?>assets/web/js/custom.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
