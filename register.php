<?php
include_once("connection.php");
?>

<?php
    if(isset($_REQUEST['rsubmit'])){
        $full_name=$_REQUEST['rname'];
        $email_id=$_REQUEST['remail'];
        $ph_no=$_REQUEST['rphone'];
        $address=$_REQUEST['addr'];
        $password=$_REQUEST['password'];

        $query="insert into tbl_register(full_name,email_id,phone_no,address,password)values('$full_name','$email_id',
        '$ph_no','$address','$password')";
        $run=mysqli_query($conn,$query);

        if($run){

    ?>
    <script type="text/javascript">alert("Data inserted successfully");</script>
    <?php{
        header("location:index.php");
    }?>
    <?php        
    }
    else{
        echo"error;",mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/index.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
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

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        
        <?php include_once('header.php');?>
    <!--<form>
       <div id="page">
        <div class="cfield">
            <i class="flaticon-form"></i>
            First Name<input type="text" name="firstname">
        </div>
        <div class="cfield">
            <i class="flaticon-form"></i>
             Last Name<input type="text" name="lastname">
        </div>
        <div class="cfield">
            <i class="flaticon-form"></i>
            Password<input type="password" name="********">
        </div>
        <div class="cfield">
            <i class="flaticon-form"></i>
             Confirm Password<input type="password" name="confirm password">
        </div>
        <div class="cfield">
            <i class="flaticon-form"></i>
            Email ID<input type="text" name="Email">
        </div>
    </div>
</form>-->
<!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header" style="margin-top: 50px;">
                                    <h2 class="title">Register</h2>
                                </div>
                                
                            </div><!-- section title end -->
                            <form id="ttm-make-appoint-form" class="ttm-make-appoint-form wrap-form mt_15 clearfix" method="post"  style="margin-left: 350px; margin-right: 350px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-user"></i>
                                                <input name="rname" type="text" value="" placeholder="Full Name" required="required">
                                            </span>
                                        </label><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-email"></i>
                                                <input name="remail" type="text" value="" placeholder="Email Address" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-mobile"></i>
                                                <input name="rphone" type="number" maxlength="10" value="" placeholder="Phone Number" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-location-pin"></i>
                                                <input name="addr" type="text" value="" placeholder="Address" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-timer"></i>
                                                <input name="password" type="password" value="" placeholder="Password" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <center><input name="rsubmit" type="submit" id="submit" class="submit" value="Register" style="width: 100px; "></center>
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
                <br />
                <br />





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




