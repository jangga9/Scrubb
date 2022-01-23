<?php
$connection = mysqli_connect("localhost", "id18196736_root", "oP5eJF%E7u3s<zQ1", "id18196736_scrubbdb");
	
	if($connection === false){
		die("Error: Fail to connect. " . mysqli_connect_error());
	}
	
if(isset($_POST["Submit"])){
session_start();
$id=$_SESSION['CustomerID']; 
$booking_id = $_POST['booking_id'];
$service_name = $_POST['service_name'];
$amount_paid = $_POST['amount_paid'];
$tm = $_POST['tm'];
$dt = $_POST['dt'];

    
	
	
	$query ="INSERT INTO tbl_payment (`CustomerID`,`booking_id`, `service_name`, `amount_paid`, `tm`, `dt`) VALUES ( '$id','$booking_id','$service_name', '$amount_paid', '$tm', '$dt')";

	
	

if(mysqli_query($connection,$query)){

        
		header("Location: cart.php");
    }

   
    mysqli_close($connection);
	}

?>












