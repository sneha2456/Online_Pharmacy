<?php include_once('connection.php');

if(isset($_GET['id']))
{   
    static $c_id=0;
    $c_id=$_GET['id'];
}
if(isset($_REQUEST['ProductID']))
{   
    $c_id = $_REQUEST['cid'];
     $que="insert into tbl_cart values(null,'".$_REQUEST['ProductID']."','".$_SESSION['UserID']."',1)";
    $Exe=mysqli_query($conn,$que) or die(mysqli_error($conn));


}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/shop.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
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
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Products</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Go to Delmont." href="index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span><span>Products</span></span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        
                        <div class="products row">
                            <!-- product -->

                            
                               <?php
                            $sel="select * from tbl_product where c_id=$c_id";
                            $Exe=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                            while($row=$Exe->fetch_array())
                               {
                                    $p_id=$row['p_id'];
                                    $p_name=$row['p_name'];
                                    $p_price=$row['p_price'];
                                    $p_rating=$row['p_rating'];
                                    $p_img=$row['p_img'];
                                    $c_id=$row['c_id'];



                            ?>
                            <div class="product col-md-4 col-sm-6 col-xs-12">
                             <div class="ttm-product-box" >
                            
                                    <!-- ttm-product-box-inner -->
                                    <div class="ttm-product-box-inner" >
                                        <div class="ttm-shop-icon">
                                            <div class="product-btn"><a href="?ProductID=<?php echo $p_id;?>&cid=<?php echo $c_id;?>" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a>
                                            </div>
                                            
                                        </div>
                                        <div class="ttm-product-image-box">
                                            <img class="img-fluid" src="<?php echo $row['p_img'];  ?>" alt="image" height="150 px;" width="">
                                        </div>
                                    </div><!-- ttm-product-box-inner end -->
                           
                                    <div class="ttm-product-content">
                                        <a class="ttm-product-title" href="product-details.php">
                                            <h2><?php echo $p_name; ?></h2>
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
                                        <span class="price"><span class="product-Price-amount">
                                            <span class="product-Price-currencySymbol">Rs.</span><?php echo $p_price; ?></span>
                                        </span>
                                    </div>
                                </div>
                                </div> <!-- product end -->
                             
                                <?php
                               }
                            ?>
                           
                        </div>

                        <div class="col-lg-12">
                            <div class="ttm-pagination text-center">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#">
                                <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-search">
                            
                                
                                <a href="shop.php"><center><input type="button"   value="Back" style="width: 100px; background-color: cyan;  "></center></a>
                        </aside>

                       <!-- <form>
                       <center><a href="shop.php"><input type="submit" id="submit"  value="Back to all Categories" style="width: 100px; "></a></center>
                            </form>-->
        
                        
                    </div>
                    >
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div><!--site-main end-->

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
<!-- Copied from http://themetechmount.com/html/delmont/shop.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
</html>