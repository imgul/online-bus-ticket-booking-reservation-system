<header>
    <!--Default Header Area Start-->
    <div class="default-header-area header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!--Header Logo Start-->
                <div class="col-lg-3 col-md-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/img/logo/uosbus.png" alt=""></a>
                    </div>
                </div>
                <!--Header Logo End-->
                <!--Header Menu Start-->
                <div class="col-lg-7  d-none d-lg-block">
                    <div class="header-menu-area">
                        <nav>
                            <ul class="main-menu">
                                <li class="<?php if ($page == 'index') echo 'active'; ?>"><a href="index.php">HOME</a>
                                    <!--Dropdown Menu Start-->
                                    <!-- <ul>
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                    </ul> -->
                                    <!--Dropdown Menu End-->
                                </li>
                                <!-- <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Blog details</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog NO Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left</a></li>
                                    </ul>
                                </li> -->
                                <li class="<?php if ($page == 'contact') echo 'active'; ?>"><a href="contact.php">Contact</a></li>
                                <?php
                                // show menu only if not logged in
                                if (!isset($_SESSION['loggedIn'])) {
                                    echo '<li class="';
                                ?>
                                <?php
                                    echo '"><a href="login.php">Login</a></li>
											<li><a href="register.php">Register</a></li>';
                                }
                                ?>
                                <?php
                                // show menu only when logged in
                                if (isset($_SESSION['loggedIn'])) {
                                    echo '<li class=""><a href="blog.html">My Account</a>
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
                        <a href="newbooking.php">Book Now</a>
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