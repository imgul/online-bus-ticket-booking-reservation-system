<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Register | UoS Bus</title>
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
	<link rel="stylesheet" href="admin/vendor/fontawesome-free/css/all.min.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="admin/css/sb-admin-2.min.css">
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.html"></script>

</head>

<body class="bg-gradient-primary">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

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
									<li><a href="index.php">HOME</a>
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
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li class="active"><a>My Account</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li><a href="bookings.php">My Bookings</a></li>
											<li><a href="newbooking.php">New Booking</a></li>
											<li><a class="logoutBtn" href="#">Logout</a></li>
											<li><a href="forgot-password.php">Forgot Password</a></li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!--Header Menu End-->
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

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
							</div>
							<form class="user needs-validation" novalidate>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" required>
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" required>
									</div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
									</div>
									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
									</div>
								</div>
								<button type="submit" name="register" class="btn btn-primary btn-user btn-block">
									Register Account
								</button>
								<hr>
								<a href="#" class="btn btn-google btn-user btn-block">
									<i class="fab fa-google fa-fw"></i> Register with Google
								</a>
								<a href="#" class="btn btn-facebook btn-user btn-block">
									<i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
								</a>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="forgot-password.php">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="login.php">Already have an account? Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
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





	<!--All Js Here-->

	<!--Jquery 1.12.4-->
	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="js/vendor/jquery-3.6.0.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
	<!--Popper-->
	<script src="js/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/d8cfbe84b9.js"></script>
	<!--Plugins-->
	<script src="js/plugins.js"></script>
	<!--Ajax Mail-->
	<script src="js/ajax.mail.js"></script>
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--Main Js-->
	<script src="js/main.js"></script>
</body>

</html>