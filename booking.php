<?php include("header.php");


include'config.php';
$service_title=$_POST['service_type'];
$sql = "SELECT service_price, service_title FROM tbl_service WHERE service_title='$service_title'";
$result = $conn->query($sql);
?>			
			
			
			<div class="container">
<form method="post" action="insert_booking.php" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Service</div>
<div style="padding-bottom: 18px;"><span style="color: red;"> *</span><br/>
<select id="service_type" name="service_type" style="max-width : 450px;" class="form-control">
<option><?php echo ($_POST['service_type']);?></option>
 
</select>
</div>

<div style="padding-bottom: 18px;font-size : 24px;">Price</div>
<?php while($row = $result->fetch_assoc()){ ?>
<div style="padding-bottom: 18px;"><span style="color: red;"> *</span><br/>
<select id="booking_price" name="booking_price" style="max-width : 450px;" class="form-control">
<option><?php echo ($row['service_price']); ?></option>
</select>
</div>
<?php } ?>

<div style="padding-bottom: 18px;font-size : 24px;">Tell Us About Your Home</div>
<div style="padding-bottom: 18px;">Type of Residence<span style="color: red;"> *</span><br/>
<select id="residence_type" name="residence_type" style="max-width : 450px;" class="form-control">
<option VALUE="Semi-Detached">Semi-Detached</option>
<option VALUE="Terrace">Terrace</option>
<option VALUE="Bungalow">Bungalow</option>
<option VALUE="Apartment">Apartment</option>
<option VALUE="Condominium">Condominium</option>
</select>
</div>
<div style="padding-bottom: 18px;">No. of Bedroom(s)<span style="color: red;"> *</span><br/>
<input type="number" id="bedroom_num" name="bedroom_num" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">No. of Bathroom(s)<span style="color: red;"> *</span><br/>
<input type="number" id="bathroom_num" name="bathroom_num" style="max-width : 450px;" class="form-control"/>
</div>

<div style="padding-bottom: 18px;">Extra Service<span style="color: red;"> *</span><br/>
<select id="extra_service" name="extra_service" style="max-width : 450px;" class="form-control">
<option VALUE="Clean Window">Clean Window</option>
<option VALUE="Bed Cleaning">Bed Cleaning</option>
<option VALUE="Sanitize Room">Sanitize Room</option>
</select>
</div>

<div style="padding-bottom: 18px;">Additional Notes<span style="color: red;"> *</span><br/>
<textarea id="additional_notes" false name="additional_notes" style="max-width : 450px;" rows="6" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Choose hours and dates</div>
<div style="padding-bottom: 18px;">Start Time<span style="color: red;"> *</span><br/>
<select id="start_time" name="start_time" style="max-width : 450px;" class="form-control">
<option VALUE="8.00 AM">8.00 AM</option>
<option VALUE="9.00 AM">9.00 AM</option>
<option VALUE="10.00 AM">10.00 AM</option>
<option VALUE="11.00 AM">11.00 AM</option>
<option VALUE="12.00 PM">12.00 PM</option>
<option VALUE="1.00 PM">1.00 PM</option>
<option VALUE="2.00 PM">2.00 PM</option>
<option VALUE="3.00 PM">3.00 PM</option>
<option VALUE="4.00 PM">4.00 PM</option>
<option VALUE="5.00 PM">5.00 PM</option>
<option VALUE="6.00 PM">6.00 PM</option>
<option VALUE="7.00 PM">7.00 PM</option>
<option VALUE="8.00 PM">8.00 PM</option>
</select>
</div>
<div style="padding-bottom: 18px;">Date<span style="color: red;"> *</span><br/>
<input type="text" id="start_date" name="start_date" style="max-width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Payment Method</div>
<div style="padding-bottom: 18px;">Name as on card<span style="color: red;"> *</span><br/>
<input type="text" id="card_holder" name="card_holder" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Card Number<span style="color: red;"> *</span><br/>
<input type="text" id="card_num" name="card_num" style="max-width : 450px;" class="form-control"/>
</div>
<div style="display: flex; padding-bottom: 18px;max-width : 450px;">
<div style=" margin-left: 0; margin-right: 1%; width: 49%;">MM/YY<span style="color: red;"> *</span><br/>
<input type="text" id="mm_yy" name="mm_yy" style="max-width: 100%;" class="form-control"/>
</div>
<div style=" margin-left: 1%; margin-right: 0; width: 49%;">CVV<span style="color: red;"> *</span><br/>
<input type="text" id="cvv" name="cvv" style="max-width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;font-size : 24px;">Contact details</div>
<div style="padding-bottom: 18px;">Customer Name<span style="color: red;"> *</span><br/>
<input type="text" id="customer_name" name="customer_name" style="max-width: 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email Address<span style="color: red;"> *</span><br/>
<input type="text" id="email" name="email" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Phone Number<span style="color: red;"> *</span><br/>
<input type="text" id="phone_num" name="phone_num" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Home Address<span style="color: red;"> *</span><br/>
<input type="text" id="address" name="address" style="max-width : 450px;" class="form-control"/>
</div>



<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>

</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('bedroom_num').value.trim())) {
alert('No. of Bedroom(s) is required!');
return false;
}
if (isEmpty(document.getElementById('bathroom_num').value.trim())) {
alert('No. of Bathroom(s) is required!');
return false;
}
if (isEmpty(document.getElementById('additional_notes').value.trim())) {
alert('Additional Notes is required!');
return false;
}
if (isEmpty(document.getElementById('start_date').value.trim())) {
alert('Date is required!');
return false;
}
if (isEmpty(document.getElementById('card_holder').value.trim())) {
alert('Name as on card is required!');
return false;
}
if (isEmpty(document.getElementById('card_num').value.trim())) {
alert('Card Number is required!');
return false;
}
if (isEmpty(document.getElementById('mm_yy').value.trim())) {
alert('MM/YY is required!');
return false;
}
if (isEmpty(document.getElementById('cvv').value.trim())) {
alert('CVV is required!');
return false;
}
if (isEmpty(document.getElementById('customer_name').value.trim())) {
alert('Customer Name is required!');
return false;
}
if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email Address is required!');
return false;
}
if (!validateEmail(document.getElementById('email').value.trim())) {
alert('Email Address must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('phone_num').value.trim())) {
alert('Phone Number is required!');
return false;
}
if (isEmpty(document.getElementById('address').value.trim())) {
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
