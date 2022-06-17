<?php
session_start();

// Alert Messages
require 'inc/_alert.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>UoS Bus | Bus Ticket Reservation System</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!--All Css Here-->

	<!-- Material Design Iconic Font CSS-->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<!-- Font Awesome CSS-->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<!-- Animate CSS-->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- Bootstrap CSS-->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<!-- google fonts -->
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet"> -->
	<!-- Font-awesome -->
	<script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/css/bootstrap-v5.0.2.min.css">
	<!-- Custom styles from Admin Dashboard-->
	<link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.html"></script>

</head>

<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<header>
			<!--Default Header Area Start-->
			<div class="default-header-area header-sticky">
				<div class="container">
					<div class="row align-items-center">
						<!--Header Logo Start-->
						<div class="col-lg-3 col-md-6">
							<div class="header-logo">
								<a href="index.php"><img src="img/logo/logo.png" alt=""></a>
							</div>
						</div>
						<!--Header Logo End-->
						<!--Header Menu Start-->
						<div class="col-lg-7  d-none d-lg-block">
							<div class="header-menu-area">
								<nav>
									<ul class="main-menu">
										<li class="active"><a href="index.php">HOME</a>
											<!--Dropdown Menu Start-->
											<ul>
												<li><a href="index.html">Home Page 1</a></li>
												<li><a href="index-2.html">Home Page 2</a></li>
											</ul>
											<!--Dropdown Menu End-->
										</li>
										<li><a href="blog.html">Blog</a>
											<!--Dropdown Menu Start-->
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Blog details</a></li>
												<li><a href="blog-no-sidebar.html">Blog NO Sidebar</a></li>
												<li><a href="blog-left-sidebar.html">Blog Left</a></li>
											</ul>
											<!--Dropdown Menu End-->
										</li>
										<li><a href="contact.html">Contact</a></li>
										<?php
										// show menu only if not logged in
										if (!isset($_SESSION['loggedIn'])) {
											echo '<li><a href="login.php">Login</a></li>
											<li><a href="register.php">Register</a></li>';
										}
										?>
										<?php
										// show menu only when logged in
										if (isset($_SESSION['loggedIn'])) {
											echo '<li><a href="blog.html">My Account</a>
											<!--Dropdown Menu Start-->
											<ul>
												<li><a href="bookings.php">My Bookings</a></li>
												<li><a href="newbooking.php">New Booking</a></li>
												<li><a class="logoutBtn" href="#">Logout</a></li>
												<li><a href="forgot-password.php">Forgot Password</a></li>
											</ul>
											<!--Dropdown Menu End-->
										</li>';
										}

										?>

									</ul>
								</nav>
							</div>
						</div>
						<!--Header Menu End-->
						<!-- Content Wrapper -->

						<!-- End of Content Wrapper -->
						<!--Book Now Area Start-->
						<div class="col-lg-2 col-md-6">
							<div class="book-now-btn text-right">
								<a href="#">Book Now</a>
							</div>
						</div>
						<!--Book Now Area Start-->
					</div>
					<div class="row">
						<div class="col-12">
							<!--Mobile Menu Area Start-->
							<div class="mobile-menu d-lg-none d-xl-none"></div>
							<!--Mobile Menu Area End-->
						</div>
					</div>
				</div>
			</div>
			<!--Default Header Area End-->
		</header>
		<!--Header Area Start-->
		<!--Slider Area Start-->
		<div class="slider-area">
			<div class="hero-slider owl-carousel">
				<!--Single Slider Start-->
				<div class="single-slider" style="background-image: url(img/slider/slider1.jpg)">
					<div class="hero-slider-content">
						<h1>welcome to hotel Picklu</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim </p>
					</div>
				</div>
				<!--Single Slider End-->
				<!--Single Slider Start-->
				<div class="single-slider" style="background-image: url(img/slider/slider2.jpg)">
					<div class="hero-slider-content">
						<h1>welcome to hotel Picklu</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim </p>
					</div>
				</div>
				<!--Single Slider End-->
			</div>
		</div>
		<!--Slider Area End-->
		<!--Booking Area Start-->
		<div class="booking-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="#" method="post" class="search-form">
							<div class="form-container fix">
								<div class="box-select">
									<div class="select date">
										<input name="user-select-date" id="user-select-date" data-select="datepicker" placeholder="Select Date" type="text">
									</div>
									<div class="select date">
										<input name="user-select-to-date" id="user-select-to-date" data-select="datepicker" placeholder="Select Date" type="text">
									</div>
									<div class="select arrow">
										<select name="adults">
											<option>ADULTS</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
									<div class="select arrow">
										<select name="children">
											<option>CHILDREN</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<button type="submit" class="search default-btn">Check Availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Booking Area End-->
		<!--About Area Start-->
		<div class="about-area pt-100 pb-95">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-container">
							<h3>Welcome to <span>Picklu <br> the haven</span> of your weekend</h3>
							<p><span>Picklu</span> luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
								consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
								quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
								quia non numquam eius</p>
							<p><span>Picklu</span> luptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
								consequuntur magni dolores eos qui ratione voluptatem</p>
							<a href="#">EXPLORE</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="welcome-image-area">
							<div class="first-welcome-image">
								<img src="img/about/about2.png" alt="">
							</div>
							<div class="secound-iamge-area">
								<img src="img/about/about1.png" alt="">
								<div class="welcome-title">
									<h3>WELCOME TO “PICKLU”</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--About Area End-->
		<!--Our Favorite Room Area Start-->
		<div class="our-favorite-room-area pb-95">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>our favorite rooms</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
			</div>
			<!--Room Colection Area Start-->
			<div class="collection__wrapper collection__activation owl__dot--cus owl-carousel owl-theme">

				<div class="list__categories">
					<div class="thumb__catrgories">
						<a href="#">
							<img src="img/room/room1.jpg" alt="post images">
						</a>
					</div>
					<div class="desc__categories">
						<div class="categories__content">
							<h6><a href="room-details.html"> Royal Suit</a></h6>
							<p>Discover five of our favourite dresses from our new collection that are destined to be
								worn and loved immediately</p>
							<div class="p-amount">
								<span>$220</span>
								<span class="count">Per Night</span>
							</div>
							<div class="cat__btn">
								<a class="shopbtn" href="room-details.html">Book now</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list__categories">
					<div class="thumb__catrgories">
						<a href="#">
							<img src="img/room/room2.jpg" alt="post images">
						</a>
					</div>
					<div class="desc__categories">
						<div class="categories__content">
							<h6><a href="room-details.html"> Deluxe Suit</a></h6>
							<p>Discover five of our favourite dresses from our new collection that are destined to be
								worn and loved immediately.</p>
							<div class="p-amount">
								<span>$150</span>
								<span class="count">Per Night</span>
							</div>
							<div class="cat__btn">
								<a class="shopbtn" href="room-details.html">Book now</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list__categories">
					<div class="thumb__catrgories">
						<a href="#">
							<img src="img/room/room3.jpg" alt="post images">
						</a>
					</div>
					<div class="desc__categories">
						<div class="categories__content">
							<h6><a href="room-details.html"> Single Room</a></h6>
							<p>Our stunning shoe collection is crafted from the finest leathers and super-soft suede's.
								You’ll find a style for you in these new arrivals to the L.K.Bennett shoe collection.
							</p>
							<div class="p-amount">
								<span>$100</span>
								<span class="count">Per Night</span>
							</div>
							<div class="cat__btn">
								<a class="shopbtn" href="room-details.html">Book now</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list__categories">
					<div class="thumb__catrgories">
						<a href="#">
							<img src="img/room/room4.jpg" alt="post images">
						</a>
					</div>
					<div class="desc__categories">
						<div class="categories__content">
							<h6><a href="room-details.html">Double Room</a></h6>
							<p>Our stunning shoe collection is crafted from the finest leathers and super-soft suede's.
								You’ll find a style for you in these new arrivals to the L.K.Bennett shoe collection.
							</p>
							<div class="p-amount">
								<span>$180</span>
								<span class="count">Per Night</span>
							</div>
							<div class="cat__btn">
								<a class="shopbtn" href="room-details.html">Book now</a>
							</div>
						</div>
					</div>
				</div>

				<div class="list__categories">
					<div class="thumb__catrgories">
						<a href="#">
							<img src="img/room/room5.jpg" alt="post images">
						</a>
					</div>
					<div class="desc__categories">
						<div class="categories__content">
							<h6><a href="room-details.html">Luxury Suit</a></h6>
							<p>Our stunning shoe collection is crafted from the finest leathers and super-soft suede's.
								You’ll find a style for you in these new arrivals to the L.K.Bennett shoe collection.
							</p>
							<div class="p-amount">
								<span>$220</span>
								<span class="count">Per Night</span>
							</div>
							<div class="cat__btn">
								<a class="shopbtn" href="room-details.html">Book now</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--Room Colection Area End-->
		</div>
		<!--Our Favorite Room Area End-->
		<!--Our Awesome Services Area Start-->
		<div class="our-awesome-services pb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>our awesome services</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
				<div class="row align-items-center no-gutters service-bg-color">
					<div class="col-lg-7">
						<!--Service Area Start-->
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="spa" role="tabpanel">
								<div class="service-img img-fuul">
									<img src="img/service/service1.png" alt="">
								</div>
							</div>
							<div class="tab-pane fade" id="restaurent" role="tabpanel">
								<div class="service-img img-fuul">
									<img src="img/service/service2.png" alt="">
								</div>
							</div>
							<div class="tab-pane fade" id="swimming" role="tabpanel">
								<div class="service-img img-fuul">
									<img src="img/service/service3.png" alt="">
								</div>
							</div>
							<div class="tab-pane fade" id="conference" role="tabpanel">
								<div class="service-img img-fuul">
									<img src="img/service/service6.png" alt="">
								</div>
							</div>
						</div>
						<!--Service Area End-->
					</div>
					<div class="col-lg-5 service-bg">
						<!--Service Tab Menu Area Start-->
						<div class="service-menu-area">
							<ul class="nav">
								<li>
									<a class="active" data-bs-toggle="tab" href="#spa">
										<span class="service-icon">
											<img src="img/icon/service-icon1.png" alt="">
										</span>
										<span class="service-title">Spa, beauty & Health</span>
										<span class="text"><span>Spa and beauty</span> luptatem quia voluptas sit
											aspernatur aut odit aut fugit, sed quia </span>
									</a>
								</li>
								<li>
									<a class="" data-bs-toggle="tab" href="#restaurent">
										<span class="service-icon">
											<img src="img/icon/service-icon2.png" alt="">
										</span>
										<span class="service-title">Restaurant</span>
										<span class="text"><span>Restaurant</span> lup provide grro tatem quia voluptas
											sit aspernatur aut odit aut fugit, sed quia </span>
									</a>
								</li>
								<li>
									<a data-bs-toggle="tab" href="#swimming">
										<span class="service-icon">
											<img src="img/icon/service-icon3.png" alt="">
										</span>
										<span class="service-title">Swimming Pool</span>
										<span class="text"><span>Swimming</span> pool luptatem quia voluptas sit
											aspernatur aut odit aut fugit, sed quia </span>
									</a>
								</li>
								<li>
									<a data-bs-toggle="tab" href="#conference">
										<span class="service-icon">
											<img src="img/icon/service-icon4.png" alt="">
										</span>
										<span class="service-title">Conference Hall</span>
										<span class="text"><span>Conference</span> luptatem quia voluptas sit aspernatur
											aut odit aut fugit, sed quia </span>
									</a>
								</li>
							</ul>
						</div>
						<!--Service Tab Menu Area End-->
					</div>
				</div>
			</div>
		</div>
		<!--Our Awesome Services Area End-->
		<!--Fun Factor Area Start-->
		<div class="fun-factor-area fun-bg mb-95">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="single-funfactor mb-30 text-center">
							<div class="icon">
								<i class="zmdi zmdi-account-o"></i>
							</div>
							<div class="fun-facttor-number">
								<h2><span class="counter">869</span>+</h2>
							</div>
							<h4 class="counter-title">Happy Clients</h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-funfactor mb-30 text-center">
							<div class="icon">
								<i class="zmdi zmdi-accounts-outline"></i>
							</div>
							<div class="fun-facttor-number">
								<h2><span class="counter">769</span></h2>
							</div>
							<h4 class="counter-title">new friendships</h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-funfactor mb-30 text-center">
							<div class="icon">
								<i class="zmdi zmdi-star-outline"></i>
							</div>
							<div class="fun-facttor-number">
								<h2><span class="counter">179</span></h2>
							</div>
							<h4 class="counter-title">five start ratings</h4>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-funfactor mb-30 text-center">
							<div class="icon">
								<i class="zmdi zmdi-drink"></i>
							</div>
							<div class="fun-facttor-number">
								<h2><span class="counter">745</span></h2>
							</div>
							<h4 class="counter-title">served breakfast</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Fun Factor Area End-->
		<!--Team Area Start-->
		<div class="team-area pb-65">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>our special staff</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<!--Single Team Area Start-->
						<div class="single-team-area mb-30">
							<div class="team-img">
								<img src="img/team/team3.jpg" alt="">
							</div>
							<div class="team-info">
								<h4><a href="#">Shirley Gibson</a></h4>
								<span>Manager</span>
								<ul class="social-network">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<!--Single Team Area End-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<!--Single Team Area Start-->
						<div class="single-team-area mb-30">
							<div class="team-img">
								<img src="img/team/team2.jpg" alt="">
							</div>
							<div class="team-info">
								<h4><a href="#">Ronald Long</a></h4>
								<span>Chif Reciption Officer</span>
								<ul class="social-network">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<!--Single Team Area End-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<!--Single Team Area Start-->
						<div class="single-team-area mb-30">
							<div class="team-img">
								<img src="img/team/team6.jpg" alt="">
							</div>
							<div class="team-info">
								<h4><a href="#">Ashley Sanchez</a></h4>
								<span>Master Chef</span>
								<ul class="social-network">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<!--Single Team Area End-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<!--Single Team Area Start-->
						<div class="single-team-area mb-30">
							<div class="team-img">
								<img src="img/team/team4.jpg" alt="">
							</div>
							<div class="team-info">
								<h4><a href="#">Jessica Watson</a></h4>
								<span>Housekeeping</span>
								<ul class="social-network">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<!--Single Team Area End-->
					</div>
				</div>
			</div>
		</div>
		<!--Team Area End-->
		<!--Our Gallery Area Start-->
		<div class="our-gallery-area pb-95">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>our gallery</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="hp__portfolio__area gallery__masonry__activation ptb--110 text-center">
							<div class="gallery__menu">
								<button data-filter="*" class="is-checked">ALL</button>
								<button data-filter=".cat--1" class="">BRANDING</button>
								<button data-filter=".cat--2" class="">DESIGN</button>
								<button data-filter=".cat--3" class="">MARKETING</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row masonry__wrap g-0">
					<!-- Start Single Portfolio -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 gallery__item cat--1">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/1.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/2.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/3.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 gallery__item cat--3 cat--2">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/4.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/5.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfoloi">
							<div class="portfoloi-content">
								<div class="portfoloi__inner">
									<h2><a href="portfolio-details.html">Poster Design </a></h2>
									<p>Ui / Ux Design</p>
								</div>
							</div>
							<img src="img/portfolio/6.jpg" alt="portfolio images">
						</div>
					</div>
					<!-- End Single Portfolio -->
				</div>
			</div>
		</div>
		<!--Our Gallery Area End-->
		<!--Pricing Area Start-->
		<div class="pricing-area pb-65">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>Our Pricing</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<!--Single Pricing Start-->
						<div class="single-pricing mb-30">
							<div class="pricing-head">
								<h4>Economic</h4>
							</div>
							<div class="pricing-body">
								<ul>
									<li>Flight Ticket(2)</li>
									<li>Music Concert (30% Off)</li>
									<li>Restaurant (Snacks)</li>
									<li>Face Make(No)</li>
								</ul>
								<h5 class="table-price">$150<span class="desc-price">/Night</span></h5>
								<a class="pricing-button" href="#">Sgin Up </a>
							</div>
						</div>
						<!--Single Pricing End-->
					</div>
					<div class="col-lg-3 col-md-6">
						<!--Single Pricing Start-->
						<div class="single-pricing mb-30">
							<div class="pricing-head">
								<h4>The Best</h4>
							</div>
							<div class="pricing-body">
								<ul>
									<li>Flight Ticket(3)</li>
									<li>Music Concert (45% Off)</li>
									<li>Restaurant (Lunch)</li>
									<li>Face Make</li>
								</ul>
								<h5 class="table-price">$190<span class="desc-price">/Night</span></h5>
								<a class="pricing-button" href="#">Sgin Up </a>
							</div>
						</div>
						<!--Single Pricing End-->
					</div>
					<div class="col-lg-3 col-md-6">
						<!--Single Pricing Start-->
						<div class="single-pricing mb-30">
							<div class="pricing-head">
								<h4>Pro</h4>
							</div>
							<div class="pricing-body">
								<ul>
									<li>Flight Ticket</li>
									<li>Music Concert (45% Off)</li>
									<li>Restaurant (Lunch)</li>
									<li>Face Make</li>
								</ul>
								<h5 class="table-price">$220<span class="desc-price">/Night</span></h5>
								<a class="pricing-button" href="#">Sgin Up </a>
							</div>
						</div>
						<!--Single Pricing End-->
					</div>
					<div class="col-lg-3 col-md-6">
						<!--Single Pricing Start-->
						<div class="single-pricing mb-30">
							<div class="pricing-head">
								<h4>Ultra</h4>
							</div>
							<div class="pricing-body">
								<ul>
									<li>Flight Ticket</li>
									<li>Music Concert (50% Off)</li>
									<li>Restaurant (Yes)</li>
									<li>Face Make</li>
								</ul>
								<h5 class="table-price">$250<span class="desc-price">/Night</span></h5>
								<a class="pricing-button" href="#">Sgin Up </a>
							</div>
						</div>
						<!--Single Pricing End-->
					</div>
				</div>
			</div>
		</div>
		<!--Pricing Area End-->
		<!--Blog Area Start-->
		<div class="blog-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!--Section Title Start-->
						<div class="section-title text-center">
							<span>We Are “PICKLU”</span>
							<h3>our Blog</h3>
						</div>
						<!--Section Title End-->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<!--Single Blog Area Strat-->
						<div class="single-blog">
							<div class="blg-img">
								<a href="single-blog.html"><img src="img/blog/small/blog1.jpg" alt=""></a>
							</div>
							<div class="blog-content">
								<div class="blog-text">
									<h5><a href="single-blog.html">Relax Zone</a></h5>
									<div class="blog-post-info">
										<span><a href="#">By admin</a></span>
										<span>February 18, 2018</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.</p>
									<a href="single-blog.html" class="read-more"><i class="zmdi zmdi-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<!--Single Blog Area End-->
					</div>
					<div class="col-lg-6 col-md-6">
						<!--Single Blog Area Strat-->
						<div class="single-blog">
							<div class="blg-img">
								<a href="single-blog.html"><img src="img/blog/small/blog2.jpg" alt=""></a>
							</div>
							<div class="blog-content">
								<div class="blog-text">
									<h5><a href="single-blog.html">Daily Walk</a></h5>
									<div class="blog-post-info">
										<span><a href="#">By admin</a></span>
										<span>February 18, 2018</span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.</p>
									<a href="single-blog.html" class="read-more"><i class="zmdi zmdi-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<!--Single Blog Area End-->
					</div>
				</div>
			</div>
		</div>
		<!--Blog Area End-->
		<!--Brand Area Start-->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="brand-active owl-carousel">
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand1.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand2.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand3.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand4.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand5.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand6.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand1.png" alt=""></a>
							</div>
							<!--Single Brand End-->
							<!--Single Brand Start-->
							<div class="single-brand">
								<a href="#"><img src="img/brand/brand2.png" alt=""></a>
							</div>
							<!--Single Brand End-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Brand Area End-->
		<!--Footer Area Start-->
		<footer>
			<div class="footer-container">
				<!--Footer Top Area Start-->
				<div class="footer-top-area black-bg pt-90 pb-50">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-12">
								<!--Single Footer Widget Start-->
								<div class="single-footer-widget mb-35">
									<div class="footer-title">
										<h3>Hotel Location</h3>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
										laoreet pharetra....</p>
									<div class="contact-info">
										<ul>
											<li><i class="fa fa-home"></i> No. 96, Jecica City, NJ 07305, New York, USA
											</li>
											<li><i class="fa fa-phone"></i> <a href="#"> +1 222 3333</a></li>
											<li><i class="fa fa-envelope-o"></i> <a href="#"> info@example.com</a></li>
										</ul>
									</div>
								</div>
								<!--Single Footer Widget End-->
							</div>
							<div class="col-lg-3 col-md-6 col-12">
								<!--Single Footer Widget Start-->
								<div class="single-footer-widget mb-35">
									<div class="footer-title">
										<h3>Demo Links</h3>
									</div>
									<ul class="link-widget">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Our Office</a></li>
										<li><a href="#">Delivery</a></li>
										<li><a href="#">Our Store</a></li>
										<li><a href="#">Guarantee</a></li>
										<li><a href="#">Buy Gift Card</a></li>
										<li><a href="#">Return Policy</a></li>
									</ul>
								</div>
								<!--Single Footer Widget End-->
							</div>
							<div class="col-lg-3 col-md-6 col-12">
								<!--Single Footer Widget Start-->
								<div class="single-footer-widget mb-35">
									<div class="footer-title">
										<h3>More Links</h3>
										<ul class="link-widget">
											<li><a href="#">Tracking Your Order</a></li>
											<li><a href="#">Terms & Condition</a></li>
											<li><a href="#">Contact us</a></li>
											<li><a href="#">Manufactureres</a></li>
											<li><a href="#">New Brands</a></li>
											<li><a href="#">News & Blog</a></li>
											<li><a href="#">Trending Products</a></li>
										</ul>
									</div>
								</div>
								<!--Single Footer Widget End-->
							</div>
							<div class="col-lg-3 col-md-6 col-12">
								<!--Single Footer Widget Start-->
								<div class="single-footer-widget mb-35">
									<div class="footer-title">
										<h3>Newsletter</h3>
									</div>
									<div class="footer-mailchimp">
										<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="popup-subscribe-form validate" target="_blank" novalidate>
											<div id="mc_embed_signup_scroll">
												<div id="mc-form" class="mc-form subscribe-form">
													<input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here" />
													<span class="icon"><i class="fa fa-angle-right"></i></span>
													<button id="mc-submit">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
									<div class="footer-title">
										<h3>Stay Connected</h3>
									</div>
									<ul class="social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
								<!--Single Footer Widget End-->
							</div>
						</div>
					</div>
				</div>
				<!--Footer Top Area End-->
				<!--Footer Bottom Area Start-->
				<div class="footer-bottom-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-copyright">
									<p>Copyright &copy; <a href="#">Picklo.</a> All Rights Reserved</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-design-by text-right">
									<p>Designed by HasTech.company</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Footer Bottom Area End-->
			</div>
		</footer>
		<!--Footer Area End-->
	</div>





	<!--All Js Here-->

	<!--Jquery 1.12.4-->
	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="js/vendor/jquery-3.6.0.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
	<!--Popper-->
	<script src="js/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="js/plugins.js"></script>
	<!--Ajax Mail-->
	<script src="js/ajax.mail.js"></script>
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Core plugin JavaScript-->
	<!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
	<!-- Custom scripts from Admin Dashboard-->
	<!-- <script src="admin/js/sb-admin-2.js"></script> -->
	<!--Main Js-->
	<script src="js/main.js"></script>
	<script>

	</script>
</body>

</html>