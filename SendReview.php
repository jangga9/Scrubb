<?php
  if(empty($_POST['service_type']) || empty($_POST['customerName']) || empty($_POST['customerMessage']) || $_POST['rating']=="None" ){
      header("Refresh: 0.1; url= CustomerServRev.php");
      echo '<script>alert("Fill/select all the information")</script>)';
  }else{
include'config.php';
if(isset($_POST["Submit"])){
    session_start();
    //obtain data 
    $id=$_SESSION['CustomerID'];   
    $service_type = $_POST['service_type'];
    $name = $_POST['customerName'];
    $message = $_POST['customerMessage'];
    $rating = $_POST['rating'];

    $query1 = "INSERT INTO review (CustomerID, service_type, Firstname, Msg, Rating) VALUES ('$id', '$service_type', '$name', '$message', '$rating');";

    if(mysqli_query($conn,$query1)){

      header("Refresh: 0.1; url= CustomerServRev.php");
      echo "<script>alert('You have successfully submitted a review!.')</script>";
    }

   
    mysqli_close($conn);
	}
}
?>
