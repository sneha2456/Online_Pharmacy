<?php include_once('connection.php');


$sql = "select * from tbl_cart c, tbl_product p where c.reg_id =".$_SESSION['UserID']." and c.p_id = p.p_id";
$result = mysqli_query($conn,$sql);

if(!isset($_SESSION['UserID']))
{header("location:login.php");}

?>
<?php
if(isset($_POST['btnSubmit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $street = $_POST['street'];
    $apartment = $_POST['apartment'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    

    $sql = "insert into tbl_checkout(first_name,last_name,country,street_addr,apartment,city,state,zip_code,phone_no,email_id) values('$firstname','$lastname','$country','$street','$apartment','$city','$state','$zip','$phone','$email')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Billing address updated !')</script>";
    }
    else
    {
        echo mysqli_error($conn);
        echo "<script>alert('Billing address updated!') </script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/checkout.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
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
                                <h1 class="title">Checkout</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.html.htm" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                        <span>Checkout</span>
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

        <!-- checkout-section -->
        <section class="ttm-row checkout-section break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        <form name="checkout" method="post" class="checkout row" action="#">
                            <div class="col-lg-6">
                                <div class="billing-fields">
                                    <h3>Billing details</h3>
                                    <p class="form-row">
                                        <label>First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-tex" name="firstname" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="lastname" placeholder="" value="">
                                    </p>
                                    
                                    <p class="form-row">
                                        <label>Country&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="country" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text" name="street" placeholder="House number and street name" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Apartment, suite, or unit.&nbsp;
                                            <span class="optional">(optional)</span>
                                        </label>
                                        <input type="text" class="input-text " name="apartment" placeholder="Apartment, suite, unit etc. (optional)" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="city" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>State / County&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="state" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="zip" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Phone&nbsp;<span class="optional"></span></label>
                                        <input type="tel" class="input-text " name="phone" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="email" placeholder="" value="">
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <input type="submit" name="btnSubmit" value="Submit">
                                    </div></div><br>
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12">
                                <table class="shop_table shop_table_responsive">
                                <thead>
                                    <tr>


                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity
                                        </th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo'<tr class="cart_item">
                                        
                                        <td class="product-thumbnail">
                                            <a href="product-details.html.htm">
                                                <img class="img-fluid" src="'.$row['p_img'].'" alt="product-img">
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="product-details.php">'.$row['p_name'].'</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="Price-amount">
                                                <span class="Price-currencySymbol">Rs.</span>'.$row['p_price'].'
                                            </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="number" class="input-text" value="1" min="0" title="Qty" size="4">
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="Price-amount">
                                                <span class="Price-currencySymbol">Rs.</span>'.$row['p_price'].'
                                            </span>
                                        </td>
                                    </tr>'
                                    ;
                                    }
                                    
                                    ?>
                                </tbody>

                            </table></div>
                                    <div id="payment" class="checkout-payment">
                                        <ul class="payment_methods">
                                            <li class="payment_method_ppec_paypal">
                                                <label>
                                                    PayPal <img src="images/paypal.png" alt="PayPal">
                                                </label>
                                                <div class="payment_box">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <button type="submit" class="button" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Continue to payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->


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