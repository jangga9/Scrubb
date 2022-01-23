<?php include("header.php");

include'config.php';
$sql="select * from customer where CustomerID='$_SESSION[CustomerID]'";
$result = mysqli_query($conn, $sql);
$f=mysqli_fetch_assoc($result);

$sql = "SELECT * FROM tbl_service LIMIT 4";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <body>   
    <div class="wrapper">
            <!-- Header Start -->
            <div class="header home">
            <div class="col-md-12">
            
            </div>
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                        <b><h2>Assuring, Improving & Maintaining your</h2></b>
                        <b> <h2>Personal Space</h2></b>
                         <p>We have experts ready to cater your needs.</p>
                            <a class="btn" href="service.php">Explore Services Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="col-md-5">
                            <img style="float:right" class="cleaning" src="img/Cleaning.png" alt="Logo">
                        </div>
                    </div>
                </div>
                </div>

        
            <!-- Header End -->

                
            <!-- Service Start -->
                    <div class="section-header">
                        <p>OUR SERVICES</p>
                        <h2>Services for You</h2>
                        
                       
                    </div>
                     
                    <?phpif ($result){ ?>
 
 <div class="gallery"> 
   <div class="service">
     <div class="container">
	   <div class="row">
	   
 <?php while($row = $result->fetch_assoc()){ ?>
	 
	 
	 
	 <div class="col-lg-3 col-md-6">
         
                            <div class="service-item">
							   <br>
                               <img style="height=100px; width:100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['service_image']); ?>" />
                                <h3><?php echo ($row['service_title']); ?></h3>
                                <p>
                                    <?php echo ($row['service_description']) ; ?>
                                </p>
								<p>
                                    <?php echo ($row['service_price']); ?>
                                </p>
                                <button onclick="document.location='service_booking.php'" id="myBtn" class="btn">Book Now</button>
                            </div>
                        </div>
						
						
						
    
 <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="section-header">
                       
                        <a href="service.php"  style="background-color:#FFD662;cursor:pointer;border-radius:5px;text-align:center;" class="btn"><b>See More</b></a>
                       
                    </div>
                     

<?php
$conn->close();
  ?>
            <!-- Book End -->
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                                <!-- About Start -->
             <div class="section-header">
                    <p>Scrubb Company</p>
                    <h2>Know More About Us </h2>
                </div>
     <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">
                        <h3>Company Introduction</h3>
                        <p>
                            Established in 2017, Scrubb Home Improvement and Maintenance Company is a startup 
                            small business that caters wide range of services to homeowners and coporate 
                            organizations. We believe in keeping our standards high and deliver a satisfactory service for 
                            all clients.
                        </p>
                        <h3>Company Vision</h3>
                        <p>
                            We envision clean, healthy, and hygiene spaces all around. We hope to change the face of 
                            the cleaning industry by creating an environment of trust, faith and respect amongst clients 
                            and helpers. We want to go full circle by providing employment to the right people and using 
                            their skill sets for the benefit of the society. Because we truly care!
                        </p>
                        
                    </div><br>
                    <a style="float:right" class="btn" href="About.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
                            
                       
                </div>
            </div>
            <!-- Feature End -->

            <!-- Newsletter Start -->
            <form method="post" action="quotemail.php" >
            <div class="newsletter">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2>GET A QUOTATION!</h2>
                            <p>
                                Provide us with your email address and we will send you a quotation made specially for you. 
                            </p>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form">
                                <input type="hidden" name="tname" value="helloscrubb@gmail.com">
                                <input type="hidden" name="pos" value="scrubb">
                                <input name="email"class="form-control" placeholder="Email here">
                                <button type="submit" name="submit"class="btn">Submit</button>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
             </form>
            <!-- Newsletter End -->


                       <!-- Contact Start -->
                       <div class="contact">
                <div class="container">
                    <div class="section-header">
                    <h2>Inquiries</h2>
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

            <div class="section-header">
                       
                        <a href="contact.php"  style="background-color:#FFD662;cursor:pointer;border-radius:5px;text-align:center;" class="btn"><b>See More</b></a>
                       
                    </div>
            <!-- Contact End -->
            


            <!-- Call to Action Start -->
            <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>COMMUNICATE WITH US!</h2>
                            <p>
                                If you have any inquiries, please fell free to contact us.
                                We are always ready to reply and assist you!
                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->

            <!--How it works Start-->

            <div class="how">
                <div class="container">
                    <div class="section-header">
                        <p>SELF NAVIGATION</p>
                        <h2>How it works</h2>
                    </div>
                    <div class="work">
                        <div class="row">
                            <div class="column">
                              <i class="fa fa-calendar"></i>
                              <h2>Book a service</h2>
                              <p>Select your desired service, click on the booking button, and then set your schedule.</p>
                            </div>
                            <div class="column">
                                <i class="fa fa-lock"></i>
                              <h2>Confirm Appointment</h2>
                              <p>We will confirm your booking with the necessary instructions as you finish the transaction.</p>
                            </div>
                            <div class="column">
                                <i class="fa fa-thumbs-up"></i>
                              <h2>Let us do the rest</h2>
                              <p>Our trusted and experience staffs will come to you on time and perform the service diligently.</p>
                            </div>
                          </div>
                          

                    </div>
                </div>
            </div>

            <!--How it works Ends-->

            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <p>CLIENT REVIEWS</p>
                        <h2>What our clients have to say</h2>
                    </div>
                    <?php
                    include'config.php';

$sql = "SELECT * FROM review ORDER BY Review_ID DESC LIMIT 4";
$result = $conn->query($sql);
?>
<link href="css/review1.css" rel="stylesheet">
            <div class="gallery"> 
<div class="service">
<div class="container">
<div class="row">

<?php while($row = $result->fetch_assoc()){ ?>
 

<div class="col-lg-3 col-md-6">
                <div class="service-item">
                   <br>
                   <img style="height:150px;width:150px;display: block;margin-left: auto;margin-right: auto;" src="img/avatar.png" id="profilePic" class="pic"><br>
                  <?php echo ($row['Firstname']); ?>
                    <p>
                    <?php echo ($row['service_type']);?>
                    </p>
                    <p>
                    <?php echo ($row['Rating']);?><i class="bi bi-star"></i>
                    </p>
                    <p>
                    <?php echo ($row['Msg']); ?>
                    </p>
                  
                </div>
            </div>
            
            
            

<?php } ?>
</div>
</div>
</div>
</div>

<?php
$conn->close();
?>
<!-- Book End -->
                </div>
            </div>
            <!-- Testimonial End -->



            
        <?php include 'footer.php';?>        
    </body>
</html>
