<?php include_once("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/aboutus-1.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
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
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">About Us</h1>
                                <h3 class="subtitle"> About Our Hospital</h3>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.html.htm" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                        <span>About Us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--experiance-section-->
        <section class="ttm-row experiance-section bg-layer break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span pt-95 pb-100 res-991-pt-50 res-991-pb-50">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-grey"></div>
                            <div class="layer-content">
                                <div class="ttm_single_image-wrapper mr_240 res-1199-mr-0">
                                    <img class="img-fluid" src="images/single-img-four.png" width="800" height="300" alt="">
                                </div><!-- ttm_single_image-wrapper end -->
                            </div>
                        </div>
                        <!-- about-img end -->
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <div class="pt-105 pb-30 res-1199-plr-15 res-991-pt-50">
                                    <!-- section title -->
                                    <div class="section-title with-desc clearfix">
                                        <div class="title-header">
                                            <h5>WHAT WE DO</h5>
                                            <h2 class="title">We Have 25 Years Experience</h2>
                                        </div>
                                        <div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievement of our stpatients for recovery</div>
                                    </div><!-- section title end -->
                                    <!-- acadion -->
                                    <div class="accordion">
                                        <!-- toggle -->
                                        <?php
                            $sel="select * from tbl_aboutus";
                            $Exe=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                            while($fetch=mysqli_fetch_array($Exe))
                            {

                        ?>
                                        <div class="toggle">
                                            <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Our Mission</a></div>
                                            <div class="toggle-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="toggle-figure res-991-mb-15">
                                                            <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p><?php echo $fetch['mission'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- toggle end -->
                                        <!-- toggle -->
                                        <div class="toggle">
                                            <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Our Vision</a></div>
                                            <div class="toggle-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="toggle-figure res-991-mb-15">
                                                            <img class="img-fluid" src="images/portfolio/post-two-1200x800.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p><?php echo $fetch['vision'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- toggle end -->
                                        <!-- toggle -->
                                        <div class="toggle">
                                            <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Our Stratagies</a></div>
                                            <div class="toggle-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="toggle-figure res-991-mb-15">
                                                            <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p><?php echo $fetch['strat'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- toggle end -->
                                    </div><!-- acadion end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <?php
    }
    ?>
      
       
        <!-- testimonial-section -->
        <section class="ttm-row broken-section bg-layer break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-5">
                       <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-5">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>CLIENTS</h5>
                                        <h2 class="title">Happy Patients & Clients</h2>
                                    </div>
                                    
                                </div><!-- section title end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- testimonial-box -->
                        <div class="testimonial-box">
                            <div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-darkgrey spacing-6">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <!-- wrap-testimonial -->
                                    <div class="testimonial-slide owl-carousel" data-item="1" data-nav="true" data-dots="false" data-auto="true">
                                        <!-- testimonials -->
                                        <?php
                            $sel="select * from tbl_feedback";
                            $Exe=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                            while($row=$Exe->fetch_array())
                               {
                                    $feed_id=$row['feed_id'];
                                    $feed_name=$row['feed_name'];
                                    $feed_desc=$row['feed_desc'];
                                    



                            ?>
                                         <div class="testimonials ttm-testimonial-box-view-style1">
                                        <div class="testimonial-avatar">
                                            
                                             <div class="testimonial-caption">
                                                <h5><?php echo $feed_name;?></h5>
                                                <label>Patient</label>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <blockquote class="ttm-testimonial-text"><?php echo $feed_desc;?></blockquote>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                    </div><!-- wrap-testimonial end-->
                                </div>
                            </div>
                        </div><!-- testimonial-box end-->
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- testimonial-section end-->



    </div><!--site-main end-->
    <br><br<br>

   <?php include_once('footer.php');?>
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
<!-- Copied from http://themetechmount.com/html/delmont/aboutus-1.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
</html>