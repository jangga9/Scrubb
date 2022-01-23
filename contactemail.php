<?php
if (isset($_POST['submit'])) {
    $fromEmail = $_POST['fname'];
	$fromEmail2 = $_POST['lname'];
    $toEmail = $_POST['email'];
    $subjectName = $_POST['pno'];
    $message = $_POST['message'];
    $select_value = $_POST['subject'];

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/SCRUBB.png">
        <link rel="stylesheet" href="Customersignup.css">
        <link href="css/profile.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<title>Document</title>
			</head>
			<body>

                 
        <div class="thanks">

        <i class="fa fa-gift" style="font-size:48px;color:red"></i>
        <h1>Your Inquiries sent successfully !</h1>
        <h4>Thank you for leaving your message with us! </h4>

        <br>
		<h1>'.$subjectName.'</h1><br/>
		<h1>'.$select_value.'</h1><br/>
        <h1>'.$message.'</h1><br/>
        
        
          Regards<br/>


        <a href="Home.php" class="btn btn-primary">Back to Home</a>

    </div>
    <!-- Checkout Page End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>
        
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="contact.php";</script>';
}