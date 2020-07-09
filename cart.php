<?php include_once('connection.php');


$sql = "select * from tbl_cart c, tbl_product p where c.reg_id =".$_SESSION['UserID']." and c.p_id = p.p_id";
$result = mysqli_query($conn,$sql);

if(!isset($_SESSION['UserID']))
{header("location:login.php");}
$total =0;
                                    
?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://themetechmount.com/html/delmont/cart.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template">
<meta name="author" content="https://www.themetechmount.com/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Delmont &#8211; Medical, Health and Hospital </title>

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
 <script>
                                    function getTotal(obj,cid) {
                                        
                                        if (obj == 0) {
                                                    return;
                                        } else {
                                                if (window.XMLHttpRequest) {
                                                    // code for IE7+, Firefox, Chrome, Opera, Safari
                                                    xmlhttp = new XMLHttpRequest();
                                                } else {
                                                    // code for IE6, IE5
                                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                }
                                            xmlhttp.onreadystatechange = function() {
                                             if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("cartDiv").innerHTML = this.responseText;
                                             }
                                            };
                                            xmlhttp.open("GET","getCart.php?quant="+obj+"&cid="+cid,true);
                                            xmlhttp.send();
                                            }
                                        }
                            </script>
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
                                <h1 class="title">Cart</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                        <span>Cart</span>
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

        <!-- cart-section -->
        <section class="ttm-row cart-section break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12" id="cartDiv">
                        <!-- ttm-cart-form -->
                        <form class="ttm-cart-form" action="#" method="post">
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
                                                <span class="Price-currencySymbol">Rs.</span>
                                                <label name="lblPrice" id="lblPrice">
                                                '.$row['p_price'].'
                                                </label>
                                            </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="number" class="input-text" value="'.$row['Quantity'].'" min="1" max="5" title="Qty" size="4" onchange="getTotal(this.value,'.$row['cart_id'].');">
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="Price-amount">
                                                <span class="Price-currencySymbol">Rs.</span>
                                                <label name="lblTotalPrice" id="lblTotalPrice">
                                                '.$row['p_price']*$row['Quantity'].'
                                                </label>
                                            </span>
                                        </td>
                                    </tr>'
                                    ;
                                        $total += $row['p_price']*$row['Quantity'];
                                    }
                                    
                                    ?>
                                </tbody>
                            </table>
                           
                        </form><!-- ttm-cart-form end -->
                        <!-- cart-collaterals -->
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong><span class="Price-amount">
                                                    <span class="Price-currencySymbol">Rs.</span>
                                                    <label name="Total">
                                                        <?php echo $total ?>
                                                    </label>
                                                </span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout">
                                    <a href="checkout.php" class="checkout-button button">Proceed to checkout</a>
                                </div>
                            </div>
                        </div><!-- cart-collaterals end-->
                    </div>
                </div>
            </div>
        </section><!-- cart-section end-->


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
    <!-- Javascript end -->

</body>
<!-- Copied from http://themetechmount.com/html/delmont/cart.html by Cyotek WebCopy 1.7.0.600, 11 August, 2019, 8:36:12 AM -->
</html>