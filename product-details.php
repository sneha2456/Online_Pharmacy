<?php include_once('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/product-details.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template">
<meta name="author" content="https://www.themetechmount.com/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Delmont &#8211; Medical, Health and Hospital Html Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css">

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- twentytwenty -->
<link rel="stylesheet" type="text/css" href="css/twentytwenty.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css">

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

    <!--page start-->
    <div class="page">

  <?php include_once('header.php');?>
        <?php
    $pID=$_REQUEST['pID'];

    $sel="select * from tbl_product where p_id=".$_REQUEST['pID'];
    $exe=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $fetch=mysqli_fetch_array($exe);

?>
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Single Product Details</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Go to Delmont." href="index.html.htm" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span><span>Single Product Details</span></span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right products ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <div class="ttm-single-product-details product">
                            <div class="ttm-single-product-info clearfix">
                                
                                <div class="product-gallery images">
                                    <figure class="ttm-product-gallery__wrapper">
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-one.jpg" alt="product-img">
                                        </div>
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-one.jpg" alt="product-img">
                                        </div>
                                    </figure>
                                </div>
                                <div class="summary entry-summary">
                                    <h1 class="product_title entry-title"><?php echo $fetch['p_name'];?></h1>
                                    <div class="product-rating clearfix">
                                        <ul class="star-rating clearfix">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <a href="#reviews" class="review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                    </div>
                                    <p class="price">
                                        <del><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol">$</span>20.00
                                            </span>
                                        </del>
                                        <ins><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol">$</span>18.00
                                            </span>
                                        </ins>
                                    </p>
                                    <div class="product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                    </div>
                                    <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                        <div class="quantity"><label class="screen-reader-text">Quantity</label>
                                            <input type="number" id="quantity_5c357ca137d75" class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty" size="4">
                                        </div>
                                        <button id="submit" name="add-to-cart" type="submit" class="cart_button" title="Submit now">Add to cart</button>
                                    </form>
                                    <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                        <div class="product_meta">
                                            <span class="sku_wrapper">SKU: 
                                                <span class="sku">Woo-beanie-logo</span>
                                            </span>
                                            <span class="posted_in">Category: 
                                                <a href="#" rel="tag">Medical Devices</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Description</a></li>
                                    <li class="tab"><a href="#">Additional information</a></li>
                                    <li class="tab"><a href="#">Reviews (1)</a></li>
                                </ul>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Description</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Additional information</h2>
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr><th>Dimensions</th><td class="product_dimensions">6 × 4 × 1 in</td></tr>
                                                <tr><th>color</th><td><p>Blue</p></td></tr>
                                            </tbody>
                                        </table>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">1 review for <span>Ladder</span></h2>
                                                <ol class="commentlist">
                                                    <li class="review">
                                                        <div class="comment_container">
                                                            <img class="avatar" src="images/blog/blog-comment-01.jpg" alt="comment-img">
                                                            <div class="comment-text">
                                                                <ul class="star-rating">
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                </ul>
                                                                <p class="meta">
                                                                    <strong class="eview__author">Cherie </strong><span class="review__dash">–</span>
                                                                    <time class="woocommerce-review__published-date" datetime="2018-11-01T04:58:58+00:00">Apr 1, 2019</time>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante<br>Very good product and amazing quality.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">Add a review
                                                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancel reply</a></small>
                                                    </span>
                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label for="rating">Your rating</label>
                                                            <ul class="stars">
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                            </ul>
                                                            <select name="rating" id="rating" required="" tabindex="-1">
                                                                <option value="">Rate…</option>
                                                                <option value="5">Perfect</option>
                                                                <option value="4">Good</option>
                                                                <option value="3">Average</option>
                                                                <option value="2">Not that bad</option>
                                                                <option value="1">Very poor</option>
                                                            </select>
                                                        </div>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review&nbsp;<span class="required">*</span></label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="" required="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email&nbsp;<span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="" required="">
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" class="submit" value="Submit">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="input-text" placeholder="Search Products…" value="" name="s">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </aside>
                        <aside class="widget products top-rated-products">
                            <h3 class="widget-title">Featured Products</h3>
                            <ul class="product-list-widget">
                                <li>
                                    <a href="#"><img src="images/product/product-four.jpg" alt="">
                                        <span class="product-title">Tonometer</span>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>90.00</span>
                                </li>
                                <li>
                                    <a href="#"><img src="images/product/product-five.jpg" alt="">
                                        <span class="product-title">Accu Check</span>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>12.00</span>
                                </li>
                                <li>
                                    <a href="#"><img src="images/product/product-four.jpg" alt="">
                                        <span class="product-title">ECG Machine</span>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">
                                        <span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>20.00
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <a href="#"><img src="images/product/product-seven.jpg" alt="">
                                        <span class="product-title">Panthenol</span>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">
                                        <span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">$</span>18.00
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <a href="#"><img src="images/product/product-one.jpg" alt="">
                                        <span class="product-title">Stethoscope</span>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">
                                        <del><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol">$</span>18.00
                                            </span>
                                        </del>
                                        <ins><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol">$</span>16.00
                                            </span>
                                        </ins>
                                    </span>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Product Categories</h3>
                            <ul>
                                <li><a href="#">Cardiac Care</a></li>
                                <li><a href="#">Medical Devices</a></li>
                                <li><a href="#">Skin Care</a></li>
                                <li><a href="#">Stomach Care</a></li>
                                <li><a href="#">Thermometer & Mask</a></li>
                                <li><a href="#">Uncategorized</a></li>
                                <li><a href="#">Weight Loss</a></li>
                                <li><a href="#">Women's Care</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-text">
                            <div class="ttm_info_widget">
                                <div class="icon"><i class="themifyicon ti-headphone"></i></div>
                                <div class="title"><h3>Let's Help You!</h3></div>
                                <div class="content">14 Tottenham Court Road<br>Bulls Stadium, Califorina <br>1234, USA <br>
                                    <a href="mailto:info@example.com.com">info@example.com</a>
                                </div><br>
                                <a class="view_more" href="#">View More</a>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div><!--site-main end-->

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer ttm-bgcolor-skincolor">
            <div class="container">
                <div class="row">
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>+123 456 78910 / 11</h5>
                                    <h4>Have a question? call us now</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>info@domainname.com</h5>
                                    <h4>Need support? Drop us an email</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>Mon – Sat 07:00 – 21:00</h5>
                                    <h4>We are open on</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
         <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">About Delmont</h3>
                            <div class="textwidget widget-text">
                                Our Clinic has grown to provide a world class facility for the clinic advanced restorative dentistry.
                                <br><br>We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.
                                <br><br>
                                <div class="social-icons social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Quick Links</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="index.html.htm">Make Appointments</a></li>
                                <li><a href="services-1.html">Before & After</a></li>
                                <li><a href="about-1.html">Customer Treatments</a></li>
                                <li><a href="single-style-1.html.htm">Our Doctors Team</a></li>
                                <li><a href="blog.html.htm">Departments Services</a></li>
                                <li><a href="our-team.html.htm">About our Clinic</a></li>
                                <li><a href="faq.html.htm">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                           <h3 class="widget-title">Latest News</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="single-blog.html.htm"><img src="images/blog/01.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="single-blog.html.htm">How much aspirin to take for stroke</a>
                                </li>
                                <li>
                                    <a href="single-blog.html.htm"><img src="images/blog/02.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="single-blog.html.htm">Implant Surgical equipment technology</a>
                                </li>
                                <li>
                                    <a href="single-blog.html.htm"><img src="images/blog/03.jpg" alt="post-img"></a>
                                    <span class="post-date">April 05, 2019</span>
                                    <a href="single-blog.html.htm">The Benefits of Middle-Age Fitness</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu menu-footer-services-menu clearfix">
                            <h3 class="widget-title">Our Services</h3>
                            <ul id="menu-footer-services-menu" class="menu">
                                <li><a href="#">Surgery</a></li>
                                <li><a href="#">Psychological</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Orthopedics</a></li>
                                <li><a href="#">Pediatric</a></li>
                                <li><a href="#">Oncology</a></li>
                                <li><a href="#">Anesthesiology</a></li>
                                <li><a href="#">Dermatology</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-text clearfix">
                           <h3 class="widget-title">Newsletter</h3>
                            <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                                <div class="ttm_subscribe_form">
                                    <input type="email" name="EMAIL" placeholder="Enter Your Email" required="">
                                    <button class="btn" type="submit"> <i class="fa fa-envelope-o"></i> </button>
                                </div>
                                <div class="subscribe-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12">
                        <span>Copyright © 2019 Delmont Theme by <a href="https://themetechmount.com/">ThemetechMount</a></span>
                    </div>
                    <div class="col-md-12">
                        <ul id="menu-footer-menu" class="footer-nav-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script src="js/booked-calendar.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->

</body>
<!-- Copied from http://themetechmount.com/html/delmont/product-details.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
</html>