<?php

include("connection.php");

$quantity = $_GET['quant'];
$cid = $_GET['cid'];
$total = 0;
$sql = "update tbl_cart set Quantity =$quantity  where cart_id=$cid";

if(mysqli_query($conn,$sql))
{
	$sql1 = "select * from tbl_cart c, tbl_product p where c.reg_id =".$_SESSION['UserID']." and c.p_id = p.p_id";
	$result1 = mysqli_query($conn,$sql1);

	echo '<form class="ttm-cart-form" action="#" method="post">
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
                                <tbody>';
                                    
                                    while($row = mysqli_fetch_assoc($result1))
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
                                    
                                echo '
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
                                                    <label name="Total">';
                                                        echo $total; 
                                                   echo '</label>
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
                        </div>';

}


?>