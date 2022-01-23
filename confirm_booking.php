<?php include("header.php");

include'config.php';

$sql = "SELECT * FROM tbl_booking where CustomerID='$_SESSION[CustomerID]' ORDER BY booking_id DESC LIMIT 1";
$result = $conn->query($sql);

?>
			
			
			<div class="container">
<form method="post" action="insert_payment.php" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Summary Booking Confirmation</div>



<div style="padding-bottom: 18px;">Customer ID<br/>
<select id="customer_id" name="customer_id" style="max-width : 450px;" class="form-control">

 
<option><?php echo $_SESSION["CustomerID"]?></option>

 
</select>
</div>

<?php while($row = $result->fetch_assoc()){ ?>
    <div style="padding-bottom: 18px;">Booking ID<br/>
<select id="booking_id" name="booking_id" style="max-width : 450px;" class="form-control">

 
<option><?php echo ($row['booking_id']); ?></option>
 
 
</select>
</div>
<div style="padding-bottom: 18px;">Service Name<br/>
<select id="service_name" name="service_name" style="max-width : 450px;" class="form-control">

 
<option><?php echo ($row['service_type']); ?></option>

 
</select>
</div>


 <?php } ?>



<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>

</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_12').value.trim())) {
alert('No. of Bedroom(s) is required!');
return false;
}
if (isEmpty(document.getElementById('data_13').value.trim())) {
alert('No. of Bathroom(s) is required!');
return false;
}
if (isEmpty(document.getElementById('data_16').value.trim())) {
alert('Additional Notes is required!');
return false;
}
if (isEmpty(document.getElementById('data_7').value.trim())) {
alert('Date is required!');
return false;
}
if (isEmpty(document.getElementById('data_21').value.trim())) {
alert('Name as on card is required!');
return false;
}
if (isEmpty(document.getElementById('data_22').value.trim())) {
alert('Card Number is required!');
return false;
}
if (isEmpty(document.getElementById('data_23').value.trim())) {
alert('MM/YY is required!');
return false;
}
if (isEmpty(document.getElementById('data_24').value.trim())) {
alert('CVV is required!');
return false;
}
if (isEmpty(document.getElementById('data_26').value.trim())) {
alert('Email Address is required!');
return false;
}
if (!validateEmail(document.getElementById('data_26').value.trim())) {
alert('Email Address must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('data_27').value.trim())) {
alert('Phone Number is required!');
return false;
}
if (isEmpty(document.getElementById('data_29').value.trim())) {
alert('Home Address is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
</div>
            <!-- Book End -->
            
            


            <?php include 'footer.php';?> 
		

    </body>
</html>
