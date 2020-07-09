<?php include_once("connection.php");

if(isset($_POST['btnSubmit']))
{
    $name = $_POST['name'];
    $content = $_POST['content'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    
    

    $sql = "insert into tbl_blog(name,content,subject,date) values('$name','$content','$subject','$date')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Blog sent !')</script>";
    }
    else
    {
        echo mysqli_error($conn);
        echo "<script>alert('Blog not sent!') </script>";
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

                    <div class="row">
                    <div class="col-md-12">
                    <div class="spacing-4 ttm-bgcolor-white">
                    <div class="comment-respond">
                                                <h3 class="blog-title" align="center">Write your Blog</h3>
                                                <form action="#" method="post" id="blogform" class="blog-form">
                                                    
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
                                                    <label><input name="subject" type="text" value="" placeholder="Subject*:" required="required"></span>
                                                    </label>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="row"
                                                    <lable>
                                                        <span class="text-input"><label>
                                                        <input name="date" type="date"  placeholder="Date" name="date" type="text" value="" size="30">
                                                    </label>
                                                </span></lable></div>
                                                     <div class="row"><label>
                                                    <span class="text-input">
                                                        <textarea name="content" placeholder="Content" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                    </span>
                                                    </label>
                                                </div>
                                                    <div class="row"><input type="submit" id="submit" name="btnSubmit" class="submit" value="Submit">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        <!-- post end -->
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