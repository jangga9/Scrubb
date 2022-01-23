<?php include("header.php");
include'config.php';




$sql = "SELECT * FROM tbl_booking ORDER BY booking_id DESC LIMIT 1";
$result = $conn->query($sql);



if ($result){ 
while($row = $result->fetch_assoc()){ 


 
$customer_name = ($row['customer_name']);
$email = ($row['email']);
$phone_num = ($row['phone_num']);
$address = ($row['address']);
$residence_type = ($row['residence_type']);
$bedroom_num = ($row['bedroom_num']);
$bathroom_num = ($row['bathroom_num']);
$extra_service =($row['extra_service']);
$service_type = ($row['service_type']);
$booking_price = ($row['booking_price']);
}
}
?>
 <!-- Page Header Start -->
 <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                           <h2>CART</h2>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/cart2.css" rel="stylesheet">
    <script src="js/cart.js"></script>
</head>

<body>
    <main>
        <div class="basket">
            
            <div class="basket-labels">
                <ul>
                    <li class="item item-heading">Service</li>
                    <li class="price">Price</li>
                    <li class="subtotal">Subtotal</li>
                </ul>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-details">
                        <h1><strong><?php echo $service_type;?></strong> </h1>
                        <p><strong><?php echo $residence_type;?></strong></p>
                        <p>Extra Service: <?php echo $extra_service;?></p>
                    </div>
                </div>
                <div class="price"><?php echo $booking_price;?></div>
           
                <div class="subtotal"><?php echo $booking_price;?></div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
            
        </div>
        <aside>
            <div class="summary">
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal"><?php echo $booking_price;?></div>
                </div>
				<div>Payment Method</div><br>
                <div class="summary-delivery">
                    <select name="delivery-collection" class="summary-delivery-selection">
                  <option value="0" selected="selected">Cash</option>
                 <option value="collection">Touch N Go</option>
                 <option value="first-class">GrabPay</option>
                 <option value="second-class">Boost</option>
                 <option value="signed-for">Online Banking</option>
              </select>
                </div>
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total"><?php echo $booking_price;?></div>
                </div>
                <div class="summary-checkout">
                    <button onclick="myFunction()" class="checkout-cta">Checkout</button>
					<br>
					<button onclick="document.location='pdf/generate.php'" class="checkout-cta">print receipt</button>
                </div>
            </div>
        </aside>
    </main>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

   \
    <script>
function myFunction() {
    
  alert("You Have Succesfully Checkout");
  document.location= 'Home.php'

  
				
}
</script>

            
</body>

</html>











