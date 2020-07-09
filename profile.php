<?php include_once('connection.php');
if(!isset($_SESSION['UserID']))
{header("location:login.php");}

if(isset($_POST['btnMessage']))
{
    $msg = $_POST['your-message'];
    $sub = $_POST['your-subject'];
    $user = $_SESSION['UserID'];
    $doc = $_POST['doc'];
    $sql = "insert into tbl_cont_doc(doc_id,dcont_message,dcont_subject,reg_id) values($doc,'$msg','$sub',$user)";

    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Message has been sent to Doctor!')</script>";
    }
    else{
        echo "<script>alert('Message has been sent to Doctor!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/team-details.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
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

<?php
    $DocID=$_REQUEST['DocID'];

    $sel="select * from tbl_doctor where Doc_id=".$_REQUEST['DocID'];
    $exe=mysqli_query($conn,$sel) or die(mysqli_error($conn));
    $fetch=mysqli_fetch_array($exe);

?>
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
                                <h1 class="title"><?php echo $fetch['doc_name'];?></h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                        <span>Dr. Amit Shah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main single">

        <section class="ttm-row overview-section clearfix">
            <div class="ttm-team-member-single-content-wrapper ttm-team-member-view-default">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-team-member-single-content">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons">
                                        <li class="social-facebook">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus">
                                            <a class="tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-12">
                                        <!-- ttm-featured-wrapper -->
                                        <div class="ttm-featured-wrapper"> 
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid" src="images/<?php echo $fetch['doc_img'];?>" alt="image">
                                            </div> 
                                        </div><!-- ttm-featured-wrapper end--> 
                                    </div>
                                    <div class="ttm-team-member-single-content-area col-md-12 col-lg-7">
                                        <div class="ttm-team-member-content shadow-box">
                                            <div class="ttm-team-member-single-list">
                                                <h2 class="ttm-team-member-single-title"><?php echo $fetch['doc_name'];?></h2>
                                                <h5 class="ttm-team-member-single-position"><?php echo $fetch['doc_pos'];?></h5>
                                                
                                                <div class="ttm-team-data">
                                                    <div class="ttm-team-details-wrapper">
                                                        <ul class="ttm-team-details-list clearfix">
                                                            <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="fa fa-phone"></i> Phone :
                                                                </div>
                                                                <div class="ttm-team-list-value"><a href="tel:9028472558"> <?php echo $fetch['doc_contact'];?></a></div>
                                                            </li>
                                                            <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="ti ti-email"></i> Email :
                                                                </div>
                                                                <div class="ttm-team-list-value">
                                                                    <a href="mailto:info@example.com" tabindex="0"> <?php echo $fetch['doc_email'];?></a>
                                                                </div>
                                                            </li>
                                                             <li>
                                                                <div class="ttm-team-list-title">
                                                                    <i class="ti ti-location-pin"></i> Address Info :
                                                                </div>
                                                                <div class="ttm-team-list-value"> <?php echo $fetch['doc_addr'];?></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-team-member-single-content">
                                <div class="ttm-team-member-content">
                                    <h2>Overview</h2>
                                    <div class="pt-5 row">
                                        <div class="col-sm-8">
                                            <div class="pr-20">
                                                <p><?php echo $fetch['doc_desc'];?></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm_single_image-wrapper -->
                                            <!-- ttm_single_image-wrapper end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- expertise-section -->
        <section class="ttm-row expertise-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-40">
                            <h3>Honors and Awards</h3>
                        </div>
                        <!--featured-icon-box-->
                        <div class="featured-icon-box left-icon icon-align-top">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                    <i class="fa fa-trophy"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>2018 World Health Oraganized Award</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Dr.Amit Shah was presented with an award for his contribution in medical history of radiology.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                        <!--featured-icon-box-->
                        <div class="featured-icon-box left-icon icon-align-top">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                    <i class="fa fa-medkit"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>2016 Doctor's Choice Award</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Awarded with an award as the best radiologist in 2016. We are proud of his achievments.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ttm-tabs ttm-tab-color-grey ttm-tab-style-classic res-991-mt-30 clearfix">
                            <!-- tabs -->
                            <ul class="tabs">
                                <li class="tab active"><a href="#">Education</a></li>
                                
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <h5>Practical Degree From NY</h5>
                                    <span class="ttm-textcolor-skincolor">1997-2001</span>
                                    <div class="mb-25">
                                        <p>He was a very bright student. Topper in his class and participated and many health drives across the world.</p>
                                    </div>
                                    <h5>Medical University of South Carolina</h5>
                                    <span class="ttm-textcolor-skincolor">2001-2003</span>
                                    <div class="mb-25">
                                        <p>.</p>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- expertise-section end -->

        <!-- cta-form-section -->
        <section class="ttm-row cta-form-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pb-10">
                            <h3>Contact Me</h3>
                        </div>  
                        <form class="wrap-form clearfix" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>
                                        <span class="text-input"><input name="your-subject" type="text" value="" placeholder="Subject*:" required="required"></span>
                                    </label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>
                                        <span class="text-input"><textarea name="your-message" cols="40" rows="3" placeholder="Message*:" aria-required="true"></textarea></span>
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                <input type="hidden" name="doc" value="<?php echo $_REQUEST['DocID']; ?>"/>
                                </div>
                            </div>
                            <input type="submit" id="submit" name="btnMessage" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor mt-10" value="SEND MESSAGE">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-form-section end -->
        
    </div><!--site-main end-->


        <?php include_once('footer.php');?>

    </div><!--site-main end-->


    
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

    <!-- Revolution Slider -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Javascript end-->

</body>
<!-- Copied from http://themetechmount.com/html/delmont/index.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
</html>