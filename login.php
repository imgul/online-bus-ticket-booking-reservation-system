<?php
require 'inc/_functions.php';
$conn = db_connect();

if (!$conn)
	die("Oh Shoot!! Connection Failed");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Form handle
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Check if passwords match
	$msg_type = "";
	$msg_detail = "";

	// Check if user exists
	$exist_user = exist_user($conn, $email);

	if ($exist_user) {
		// echo "<h1>email: " . $email . "</h1>";
		// echo "<h1>password: " . $password . "</h1>";
		// Check if password is correct
		$sql = "SELECT * FROM `users` WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$user_password = $row["password"];
		$user_id = $row["id"];
		$user_fname = $row["fname"];
		$user_lname = $row["lname"];
		$user_email = $row["email"];
		$user_type = $row["is_admin"];

		if (password_verify($password, $user_password)) {
			// Set session variables
			session_start();
			$_SESSION["user_id"] = $user_id;
			$_SESSION["user_fname"] = $user_fname;
			$_SESSION["user_lname"] = $user_lname;
			$_SESSION["user_email"] = $user_email;
			$_SESSION["user_role"] = $user_type;
			$_SESSION["loggedIn"] = true;
			if ($user_type == 1) {
				header("location: admin/index.php?msg_type=success&msg_detail=Login Successful");
			} else {
				header("location: index.php?msg_type=success&msg_detail=Login Successful");
			}
			$msg_type = "success";
			$msg_detail = "Success: You are logged in " . $user_type;
			echo "<h1>email: " . $email . "</h1>";
			echo "<h1>password: " . $password . "</h1>";
		} else {
			$msg_type = "danger";
			$msg_detail = "Error: Password is incorrect";
		}
	} else {
		$msg_type = "danger";
		$msg_detail = "Error: User does not exist";
	}
}

// handle alert messages
require 'inc/_alert.php';
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login | UoS Bus</title>
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
									<li class="active"><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a class="logoutBtn" href="#">Logout</a></li>
									<li><a href="forgot-password.php">Forgot Password</a></li>
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

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
									</div>
									<form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
										<div class="form-group">
											<input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
										</div>
										<div class="form-group">
											<input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox small">
												<input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
												<label class="custom-control-label" for="customCheck">Remember
													Me</label>
											</div>
										</div>
										<button name="login" type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
										<hr>
										<a href="index.html" class="btn btn-google btn-user btn-block">
											<i class="fab fa-google fa-fw"></i> Login with Google
										</a>
										<a href="index.html" class="btn btn-facebook btn-user btn-block">
											<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
										</a>
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="forgot-password.php">Forgot Password?</a>
									</div>
									<div class="text-center">
										<a class="small" href="register.php">Create an Account!</a>
									</div>
								</div>
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
	<script src="js/bootstrap.min.js"></script>
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