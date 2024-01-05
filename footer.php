<style>
        /* Add custom CSS styles for the cookie notice */
        #cookie-notice {
            position: fixed;
            z-index: 10000;
            bottom: 0;
            left: 0;
            right: 0;
            background: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>

    <!-- Cookie Notice -->
    <div id="cookie-notice">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies.
                </div>
                <div class="col-md-4 text-right">
                    <button id="accept-cookies" class="btn btn-primary" style="border-radius:20px;">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Check if the user has accepted cookies
        if (localStorage.getItem('cookiesAccepted') === 'true') {
            // User has already accepted cookies
            hideCookieNotice();
        }

        // Handle cookie acceptance
        document.getElementById('accept-cookies').addEventListener('click', function() {
            // Set a flag in local storage to remember the user's choice
            localStorage.setItem('cookiesAccepted', 'true');
            hideCookieNotice();
        });

        function hideCookieNotice() {
            document.getElementById('cookie-notice').style.display = 'none';
        }
    </script>
</footer>
<!--Start Footer V4-->
<footer class="dark-footer dg-bg--1 pt60 nshape dark-footer-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-sm-6  ftr-brand-pp">
                <a class="navbar-brand mb30 mt30" href="#"> <img src="images/logo.png" alt="Logo" width="100"></a>
                <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your
                    email</p>
                <div class="ff-social-icons mt30">
                    <a href="javascript:void(0)" target="blank"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fa fa-twitter"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fa fa-linkedin"></i></a>
                    <a href="javascript:void(0)" target="blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h5 class="mb30 mt30">Contact Us</h5>
                <ul class="footer-address-list ftr-details">
                    <li>
                        <span><i class="fas fa-envelope"></i></span>
                        <p>Email <span> <a href="mailto:info@devsytech.com">info@devsytech.com</a></span></p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone-alt"></i></span>
                        <p>Phone <span> <a href="tel:+254745805901">+254745805901</a></span></p>
                    </li>
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Address <span> We are Remote</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h5 class="mb30 mt30">Company</h5>
                <ul class="footer-address-list link-hover">
                    <li><a href="contact-us">Contact</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                    <li><a href="javascript:void(0)">License & Copyright</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer-blog-">
                <h5 class="mb30 mt30">Instagram</h5>
               
            </div>
        </div>
        <div class="row end-footer-">
            <div class="col-lg-6">
                <div class="footer-copyrights-">
                    <p>Copyright &copy; 2023 <a href="./">DevsyTech</a>. All rights reserved. </p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="footer-link-- link-hover">
                    <li><a href="#">Privace &amp; Policy.</a></li>
                    <li><a href="faq.html">Faq.</a></li>
                    <li><a href="#">Terms.</a></li>
                </ul>
            </div>
        </div>
    </div>
    

<!--End Footer V4-->
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
</body>

</html>