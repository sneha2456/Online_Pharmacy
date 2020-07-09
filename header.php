<?php include_once("connection.php");

    ob_start();

?>
<html>
<header id="masthead" class="header ttm-header-style-classicinfo">
            
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="themifyicon ti-location-pin"></i>Dp Road, Kothrud PUNE</li>
                            <li><i class="themifyicon ti-timer"></i>Mon - Sat 8.00am - 10.00pm. Sunday CLOSED</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            
                                if(isset($_SESSION['UserID']))
                                { //echo $_SESSION['UserID'];

                            ?>
                                    
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="Logout.php">Logout</a> 
                            <?php
                                }
                                else
                                {
                            ?>

                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="login.php">Login</a>
                                   
                            <?php   
                                }                          
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.php" title="Delmont" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <!-- header-icons -->
                                    <div class="ttm-header-icons ">
                                        <!--<span class="ttm-header-icon ttm-header-cart-link">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a>
                                        </span>-->
                                        <div class="ttm-header-icon ttm-header-search-link">
                                            <a href="#"><i class="ti ti-search"></i></a>
                                            <div class="ttm-search-overlay">
                                                <div class="ttm-search-outer">
                                                    <div class="ttm-form-title">Hi, How Can We Help You?</div>
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- header-icons end -->
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form">
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li><a href="index.php">Home</a>
                                            </li>
                                            <li><a href="#">Drug Store</a>
                                                <ul>
                                                    <li><a href="shop.php">Shop</a>
                                                    </li>
                                                    <li><a href="cart.php">Cart</a>
                                                    </li>
                                                    <li><a href="checkout.php">Checkout</a>
                                                    </li>
                                                </ul>
                                            <li><a href="aboutus.php">About Us</a></li> 
                                            </li>
                                            <li><a href="blog-grid-view.php">Blog</a>
                                                <ul>
                                                    <li><a href="blog-grid-view.php">Blog</a>
                                                    </li>
                                                    <li><a href="writeblog.php">Write a blog</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="appointment1.php">Make an Appointment</a>
                                            </li>
                                            <li><a href="feedback.php">Feedback</a>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
            <div class="ttm-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ttm-info-widget-->
                            <div class="ttm-info-widget">
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-hospital-o"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>One of the Best Clinic</h3>
                                        <p>In India</p>
                                    </div>
                                </div>
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-user-md"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>Personal Cabinet</h3>
                                        <p>Qualified Staff</p>
                                    </div>
                                </div>
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>Safe Pharmacy</h3>
                                        <p>Drug Stores</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ttm-info-widget end -->
                            <div class="ttm-contact">
                                <span class="icon"><i class="fa fa-phone"></i></span>Toll Free : +91 8999826792
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--header end-->
</html>