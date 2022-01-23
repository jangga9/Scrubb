<?php
include'config.php';

if(isset($_POST["Submit"])){
    session_start();
    //obtain data 
$id=$_SESSION['CustomerID'];   
$service_type = $_POST['service_type'];
$booking_price = $_POST['booking_price'];
$residence_type = $_POST['residence_type'];
$bedroom_num = $_POST['bedroom_num'];
$bathroom_num = $_POST['bathroom_num'];
$extra_service = $_POST['extra_service'];
$additional_notes = $_POST['additional_notes'];
$start_time = $_POST['start_time'];
$card_holder = $_POST['card_holder'];
$card_num = $_POST['card_num'];
$mm_yy = $_POST['mm_yy'];
$cvv = $_POST['cvv'];
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$phone_num = $_POST['phone_num'];
$address = $_POST['address'];


    $query1 = "INSERT INTO tbl_booking (`CustomerID`,`service_type`,`booking_price`,`residence_type`,`bedroom_num`,`bathroom_num`,`extra_service`,`additional_notes`,`start_time`,`card_holder`,`card_num`,`mm_yy`,`cvv`,`customer_name`,`email`,`phone_num`,`address`) 
	VALUES ('$id','$service_type','$booking_price','$residence_type','$bedroom_num','$bathroom_num','$extra_service','$additional_notes','$start_time','$card_holder','$card_holder','$card_num','$mm_yy','$customer_name','$email','$phone_num','$address');";

    if(mysqli_query($conn,$query1)){

        
		header("Location: confirm_booking.php");
    }

   

	}

?>

