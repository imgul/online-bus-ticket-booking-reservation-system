<footer>
    <div class="footer-container">
        <!--Footer Top Area Start-->
        <div class="footer-top-area black-bg pt-90 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!--Single Footer Widget Start-->
                        <div class="single-footer-widget mb-35">
                            <div class="footer-title">
                                <h3><?= $website_name; ?> Bus System</h3>
                            </div>
                            <p><?= $website_name; ?> dior sit amet, consectetur adipiscing elit. Duis dignissim erat ut
                                laoreet pharetra....</p>
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fa fa-home"></i> <?php echo $address; ?></li>
                                    <li><i class="fa fa-phone"></i> <a href="#"> <?php echo $phone_number; ?></a></li>
                                    <li><i class="fa fa-envelope-o"></i> <a href="#"> <?php echo $email; ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Single Footer Widget End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!--Single Footer Widget Start-->
                        <div class="single-footer-widget mb-35">
                            <div class="footer-title">
                                <h3>Importatn Links</h3>
                            </div>
                            <ul class="link-widget">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="newbooking.php">Book Seat</a></li>
                                <li><a href="bookings.php">My Bookings</a></li>
                            </ul>
                        </div>
                        <!--Single Footer Widget End-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!--Single Footer Widget Start-->
                        <div class="single-footer-widget mb-35">
                            <div class="footer-title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-mailchimp">
                                <form action="inc/_newsletterHandler.php" method="POST" id="mc-embedded-subscribe-form" class="popup-subscribe-form validate">
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form">
                                            <input id="mc-email" name="mc-email" type="email" placeholder="Enter your email here" required>
                                            <span class="icon"><i class="fa fa-angle-right"></i></span>
                                            <button type="submit" name="mc-email-btn" id="mc-submit">Subscribe</button>
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
                            <p>Copyright &copy; <a href="#"><?= $website_name; ?>.</a> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-design-by text-right">
                            <p>Designed and Developed by: <?= $developer_name; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom Area End-->
    </div>
</footer>