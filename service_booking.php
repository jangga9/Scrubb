<?php include("header.php");
include'config.php';

$sql = "SELECT * FROM tbl_service";
$result = $conn->query($sql);

?>			
			
			
			<div class="container">
<form method="post" action="booking.php" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Select Service</div>
<div style="padding-bottom: 18px;"><span style="color: red;"> *</span><br/>
<select id="service_type" name="service_type" style="max-width : 450px;" class="form-control">

 <?php while($row = $result->fetch_assoc()){ ?>
<option><?php echo ($row['service_title']); ?></option>
 <?php } ?>
 
</select>
</div>


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
            
            


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Klang Valley, Selangor</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>hello@scrubb.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-whatsapp"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">About Us</a>
                                <a href="">Be Our Team</a>
                                <a href="">Our Services</a>
                                <a href="">Inquiries</a>
                                <a href="">Gift Cards</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">Our Clients</a>
                                <a href="">Clients Reviews</a>
                                <a href="">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Get Connected</h2>
                                <p>
                                    Don't missed out on any important updates from us!
                                </p>
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2021, Scrubb Home Improvement and Maintenance</p>
                        </div>
                        <div class="col-md-6">
                            <p>All Rights Reserved</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
		
		<script src="js/load-more-button.js"></script>
		

    </body>
</html>
