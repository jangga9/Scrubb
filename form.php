<?php

  $conn = mysqli_connect("localhost", "root", "", "scrubb");
  if(isset($_POST['save_profile'])){

	//code for image uploading
	if($_FILES['profileImage']['name']){
		move_uploaded_file($_FILES['profileImage']['tmp_name'], "images/".$_FILES['profileImage']['name']);
		$img="images/".$_FILES['profileImage']['name'];
	}
 
	$i="insert into customer(image)values('$img')";
		if(mysqli_query($con, $i)){
		echo "inserted successfully..!";
	}
}
?>