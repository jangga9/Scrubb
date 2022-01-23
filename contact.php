<?php include("header.php");
include'config.php';
?>

    <body>
        <div class="wrapper">
            <!-- Header Start -->


            <!-- Header End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <b><h2>INQUIRIES</h2></b>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <p>Have inquiries regarding our company and services? Do refer to our FAQs / simply send us a message!</p>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="faqs">
                                <b><u><h4 style="color: black;">FREQUENTLY ASKED QUESTIONS</h4></u></b>
                                <br>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <span>1</span> What are your operating hours?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Our services starts from 8am to 8pm.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                <span>2</span> Do you provide your services throughout Malaysia?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                For now, our company only provides services around Petaling Jaya and Klang Valley.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                <span>3</span> What if I cancel my booking before/on the day itself?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Deposit paid will not be refunded.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>4</span> How long does the service takes to be completed?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Standard time of services will be minimum of 2 hours per slot.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                                <span>5</span> Any upcoming promotions for the services offered?
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                New customer registered will get a 5% discount upon first booking of services. T&C apply.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapsesix">
                                                <span>6</span> What payment methods does the company accept?
                                            </a>
                                        </div>
                                        <div id="collapsesix" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Cash, Credit Card, Online Payment and e-payment are accepted.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-md-6">
                            <div class="contact-form">
                                <b><u><h4>SEND US A MESSAGE</h4></u></b>
                                <br>
                                <form method="post" action="contact.php" >
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="fname" placeholder="Your First Name" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="lname" placeholder="Your Last Name" required="required"/>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="pno" placeholder="Your Phone Number" required="required"  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"  required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message" ></textarea>
                                    </div>
                                    <div style="padding-left: 420px;">
									
									<input type="submit" name="submit" class="btn btn-primary"><br>
									</div>
    <?php
	include 'contactemail.php';
      if(isset($_POST['submit'])){
        $id=$_SESSION['CustomerID'];
        $firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
        $pno = $_POST['pno'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
		$message = $_POST['message'];
		$sql = "INSERT INTO inquiries (CustomerID,fname, lname, email, pno, subject, message)
					VALUES ('$id','$firstname','$lastname','$email', '$pno', '$subject', '$message')";
					if (mysqli_query($conn, $sql))
					{
						echo "Message sent successfully ! " ;
					}
					else
					{
						echo "Error: " . $sql . "" . mysqli_error($conn);
					}
					mysqli_close($conn);
                         
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "contact.php";
        </script>
        <?php
             include 'contactemail.php'; 
			 }              
?>                                 </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Contact End -->
			

<!--maps-->
<div class="maps">
    <div class="container">
        <h4>CONTACT US</h4>
        <div class="row">
            
            <div class="column left" style="background-color:rgb(252, 252, 252); ">
                <b><h6>Address</h6></b>
                <span>Scrubb Home Improvement & Maintenance, 

                    B-9-12, Perdana Exclusive Condo, 
                    
                    Damansara Perdana, 
                    
                    Petaling Jaya, 
                    
                    Selangor</span>
                <br><br>
                <b><h6>Phone</h6></b>
                <p>+60 17 871 1655</p>
                
                <b><h6>Email us at</h6></b>
                <p>hello@scrubb.com</p>                
                <br>
                <b><h6>Operating Hours </h6></b>
                <span>Monday Friday | 8.00am 8.00pm Public Holiday | Close for Business</span>


            </div>
            <div class="column right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.1527252674653!2d101.60443865366796!3d3.169816144916571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4f37839843f5%3A0x5bc032361e89ff47!2sPerdana%20Exclusive%20-%20Block%20A%20condo!5e0!3m2!1sen!2smy!4v1639594999698!5m2!1sen!2smy" 
                width="750px" height="450" style="border: white;" allowfullscreen="" loading="lazy"></iframe>

            <script>
                function myMap() 
                {
                var mapProp= 
                {
                    center:new google.maps.LatLng(51.508742,-0.120850),zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>
            </div>
        </div>



    </div>
</div>








            <!-- Footer Start -->
    <?php include 'footer.php';?>  
            <!-- Footer End -->
            
            

    </body>
</html>
