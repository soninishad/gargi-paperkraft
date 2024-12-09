<!DOCTYPE html>

<html lang="en">
<?php include('inc/head.php'); ?>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php
    include "connection.php";
    $query="select * from header";
    $res=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($res);
?>

        <header class="site-header header-style-1  mobile-sider-drawer-menu">

            <div class="top-bar" stye="text-align: center;">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx" style="text-align: center;">
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:<?php echo $row['email_id'] ?>">&nbsp&nbsp<?php echo $row['email_id'] ?></a>
                            </li>

                        </ul>
                        <ul class="social-bx list-inline" style="text-align: center;">
                            <li><i class="fa fa-phone"></i><a
                                    href="tel:+91<?php echo $row['contact_number'] ?>"><?php echo $row['contact_number'] ?></a>
                            </li>
                        </ul>
                        <ul class="social-bx list-inline" style="text-align: center;">
                            <li><a href="https://www.facebook.com/gargipaperkraft" target="_blank"
                                    class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/gargipaperkraft/" target="_blank"
                                    class="fa fa-instagram"></a></li>
                            <li><a href="https://twitter.com/gargipaperkraft" target="_blank" class="fa fa-twitter"></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/sulekha-singh-3a2447271/" target="_blank"
                                    class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

            <!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <?php
      include "connection.php";
      $query="select * from logo";
      $res=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($res);
      ?>
                        <div class="logo-header">
                            <a href="index">
                                <img src="upload/<?php echo $row['image'] ?>" width="216" height="37" alt="">
                            </a>
                        </div>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li><a href="index">Home</a></li>
                                <li><a href="about-gargi-paperkraft">About Us</a></li>
                                <li class="active"><a href="gargi-paperkraft-products">Products</a></li>
                                <li><a href="gargi-paperkraft-media">Media</a></li>
                                <li><a href="enquiry">Contact</a></li>
                            </ul>
                        </div>
                        <div class="extra-nav">
                            <div class="extra-cell">
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>



                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/product-banner.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">PaperKraft Products</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->

            <!-- OUR SERVICES SECTION START  -->
            <div class="section-full bg-gray p-t100 p-b20 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container-fluid">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary">Our </span>Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p style="font-16">Paper bags also called paper packaging bags are more often used for packaging
                            purpose with no folds i.e. Gussets. These bags cannot carry very heavy weights but are
                            durable and ideal for small products.</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-gray p-t100 p-b20 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"></span> Types</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p style="font-16">To cater to fulfil all the needs of such bags, we manufacture these bags in
                            standard sizes due to its high demand in almost all industries. We are planning to
                            manufacture these bags also in materials like food grade and OGR paper for packaging of
                            liquid items. Hence various types of bags help us to make our product to reach all types of
                            industries.</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-gray p-t100 p-b20 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"></span> Applications</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p style="font-16">These bags are primarily used to pack eatables, food parcels, pastry boxes,
                            clothes and medicine packaging hence it’s suitable for consumption ideally for industries
                            like pharmaceuticals, apparels, cakes confectioneries, and imitation etc.</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-gray p-t100 p-b20 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary">Product </span> USP</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p style="font-16">Paper packaging bags are the best and economical option at places where
                            plastic is banned or usage of polythene bags is to be reduced. With the help of our
                            experienced craftsmen at Gargi PaperKraft, these bags are made with quality material to make
                            it more durable and strong. In this way, these bags not only are good for your budget but
                            also help to reduce pollution led through plastic.</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-gray p-t100 p-b20 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"></span> Customization</h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p style="font-16">In the new world where we need things as per our convenience, providing
                            customization is the key to make your products reach more audience. These bags are easily
                            customizable with accordance to client's requirements and can be manufactured in brown, wood
                            and off white colours and different sizes as per client requirement.</p>
                    </div>
                </div>
            </div>

            <div class="section-full bg-gray p-t100 p-b70 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1 style="color: #adc33c;"><span class="site-text-primary">PaperKraft </span>Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>|| FLAT BOTTOM BAGS || V-BOTTOM BAGS || SQUARE BOTTOM BAGS ||</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">


                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <a href="flat-bottom"><img src="upload/IMG_20230306_163846134.jpg"
                                                style="height: 322px; width: 422px;" class="radius-bx" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="flat-bottom">Flat-Bottom Bags</a></h3>
                                        <p><a href="flat-bottom">PaperKraft Bags</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <a href="v-bottom"><img
                                                src="upload/Low-Cost-Food-Full-Automatic-V-Bottom-Kraft-Paper-Bag-Production-Manufacturing-Making-Machine-Price.jpg"
                                                style="height: 322px; width: 422px;" class="radius-bx" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="v-bottom">V-Bottom Bags</a></h3>
                                        <p><a href="v-bottom">PaperKraft Bags</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <a href="square-bottom"><img src="upload/sqauere_bottom_bags.jpg"
                                                style="height: 322px; width: 422px;" class="radius-bx" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="square-bottom">Sqaure-Bottom Bags</a></h3>
                                        <p><a href="square-bottom">PaperKraft Bags</a></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>





            <?php include('inc/footer.php'); ?>



            <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

        </div>





        <!-- JAVASCRIPT  FILES ========================================= -->
        <script src="js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
        <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
        <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
        <script src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
        <script src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
        <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
        <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
        <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
        <script src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
        <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
        <script src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
        <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
        <script src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
        <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
        <script src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->

        <!-- SLIDER REVOLUTION -->
        <!-- REVOLUTION JS FILES -->
        <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
        <!-- REVOLUTION SLIDER SCRIPT -->

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script src="js/rev-script-1.js"></script>

        <!-- GetButton.io widget -->
        <script type="text/javascript">
        (function() {
            var options = {
                call: "9918280347", // Call phone number
                whatsapp: "9918280347", // WhatsApp number
                call_to_action: "GARGI PAPERKRAFT", // Call to action
                button_color: "#129BF4", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
                pre_filled_message: "Welcome to GARGI PAPERKRAFT\n\nHow May I Assist You!", // WhatsApp pre-filled message
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
        </script>
        <!-- /GetButton.io widget -->
</body>

</html>