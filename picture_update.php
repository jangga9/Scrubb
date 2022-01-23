<?php
include'config.php';
 
if(isset($_POST['save'])){
    session_start();

    $id=$_SESSION['CustomerID'];
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
	}
	$sql = "SELECT * FROM customer_detail WHERE CustomerID='$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
    	$i="INSERT INTO customer_detail (Image, CustomerID) VALUES('$img','$id')";  
    	$result = mysqli_query($conn, $i);
    	if($result){
    			header("Refresh: 0.1; url= Manageprofile.php");
                echo "<script>alert('You have successfully Update your profile picture.')</script>";
	        }
	        else{
	            header("Refresh: 0.1; url= Manageprofile.php");
                echo "<script>alert('Update your profile picture FAILED.')</script>";
	        }
	}
	else{
	    	$j="update customer_detail set Image='$img'WHERE CustomerID='$id'"; 
            $result = mysqli_query($conn, $j);
            if($result){
    			header("Refresh: 0.1; url= Manageprofile.php");
                echo "<script>alert('You have successfully Update your profile picture.')</script>";
	        }
	        else{
	            header("Refresh: 0.1; url= Manageprofile.php");
                echo "<script>alert('Update your profile picture FAILED.')</script>";
	        }
		}
}	
?>
