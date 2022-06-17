<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>My Bookings | UoS Bus</title>
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
	<!-- Custom styles for this page -->
	<link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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

	<div class="container-fluid">
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
											<li><a href="blog.html">My Account</a>
												<!--Dropdown Menu Start-->
												<ul>
													<li class="active"><a href="bookings.php">My Bookings</a></li>
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

			<!-- DataTales Start -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">My Bookings</h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
								</tr>
								<tr>
									<td>Jonas Alexander</td>
									<td>Developer</td>
									<td>San Francisco</td>
									<td>30</td>
									<td>2010/07/14</td>
									<td>$86,500</td>
								</tr>
								<tr>
									<td>Shad Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
								</tr>
								<tr>
									<td>Michael Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
								</tr>
								<tr>
									<td>Donna Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Data tables End -->
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
	<!-- Page level plugins -->
	<script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="admin/js/demo/datatables-demo.js"></script>
	<!--Main Js-->
	<script src="js/main.js"></script>
	<script>

	</script>
</body>

</html>