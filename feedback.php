<?php include_once("connection.php");

if(isset($_POST['btnSend']))
{
    $name = $_POST['name'];
    $message = $_POST['message'];
    $user = $_SESSION['UserID'];
    

    $sql = "insert into tbl_feedback(reg_id,feed_desc,feed_name) values($user,'$message','$name')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Feedback sent !')</script>";
    }
    else
    {
        echo mysqli_error($conn);
        echo "<script>alert('Feedback not sent!') </script>";
    }

}


?>
<!DOCTYPE html>
<html lang="en">

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


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

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
 <?php include_once('header.php');?>
    <!--page start-->
    <div class="page">

        <div class="section-title with-desc text-center clearfix">
         <section class="ttm-row multi-section break-991-colum bg-img3 clearfix">
            <div class="container">
                <div class="row res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
                    <div class="col-md-5">
                        <!-- col-bg-img-three -->
                        <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                            </div>
                        </div><!-- col-bg-img-three end -->
                        <img src="images/doctor1.png" class="ttm-equal-height-image" alt="bg-image">
                    </div>
                    <div class="col-md-7">
                        <div class="spacing-4 ttm-bgcolor-white">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h2 class="title">Tell us what you feel.</h2>
                                </div>
                                <div class="title-desc">Contact us with all your feedback so we can provide you better.</div>
                            </div><!-- section title end -->
                            <form id="ttm-make-feedback-form" class="ttm-make-feedback-form wrap-form mt_15 clearfix" method="post">
                                <div class="row">
                                    
                                        <label>
                                        <span class="text-input">
                                            <label><input name="name" type="text" value="" placeholder="Name*:" required="required"></span>
                                            </label>
                                        </span>
                                    </label>
                                    
                                </div>
                                <div class="row">
                                    
                                        <label>
                                            <span class="text-input">
                                               
                                                <label>
                                        <span class="text-input"><textarea name="message" cols="40" rows="3" placeholder="Message*:" aria-required="true"></textarea></span>
                                    </label>
                                            </span>
                                        </label>
                                    
                                    
                                </div>
                                
                                <input type="submit" id="submit" name="btnSend" class="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

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