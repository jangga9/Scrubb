<?php 

session_start();
session_destroy();

header("Refresh: 0.1; url= Login.php");
				echo "<script>alert('You have successfully logout !')</script>";
?>