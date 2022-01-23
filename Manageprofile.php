<?php include("header.php");
include'config.php';

$sql="select * from customer_detail where CustomerID='$_SESSION[CustomerID]'";
$result = mysqli_query($conn, $sql);
$f=mysqli_fetch_assoc($result);

?>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link href="css/manageprofile.css" rel="stylesheet">
	
    <!-- Page Header Start -->
	<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>MANAGE PROFILE</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
		<a href="bookinghistory.php"  style="background-color:#FFD662;cursor:pointer;border-radius:5px;text-align:center;" class="btn"><b>See Booking History</b></a>
		
        <div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
			<div style="text-align: center; font-weight: bold;"> <?php
   echo "<p>Hello, ".$_SESSION['Firstname']."</p>";
?></div>
			<div class="profile-pic-wrapper">
  <div class="pic-holder">
			<tr>
				
				<td><img style=" background-size:155px 155px; background-position: center;background-image: url(img/avatar.png);" id="profilePic" class="pic"src="<?php echo $f['Image'];?>">
				<label for="newProfilePhoto" class="upload-file-block">
      <div class="text-center">
        <div class="mb-2">
          <i class="fa fa-camera fa-2x"></i>
        </div>
        <div class="text-uppercase">
          Update <br /> Profile Photo
        </div>
      </div>
    </label>
	<form action="picture_update.php" method="POST" enctype="multipart/form-data">
<Input class="uploadProfileInput"  type="file"  name="f1" value="submit" id="newProfilePhoto" onchange="loadFile(event)"accept="image/*" style="display: none;" />

</td>
</div>
<td>
						<input style="" class="btn btn-primary" type="submit" value="Update" name="save">
						
					</td>
										
</form></div>
			
			</div>
			<div class="about">
			<span class="iconify" data-icon="bi:whatsapp" style="color: green;" data-width="50" data-height="50"></span>
				<p style="font-size: 15px;padding:10px" class="mb-2 text-primary">
				 Have questions or concerns   
                 regrading your account  
                 Our experts are here to help!</p>
				<a href="https://wa.me/0168200308" style="display: inline-block; padding:10px; border-radius: 8px; background-color: #25D366; color: #fff; text-decoration: none; font-size: 16px;">Contact Us</a>
                                        
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 style="font-weight: bold;" class="mb-2 text-primary">ACCOUNT DETAILS<br>
</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"><br>
            <form action="account_update.php" method="POST" onsubmit = "return verifyPassword()">
				<div class="form-group">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $_SESSION["Firstname"]?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"><br>
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $_SESSION["Lastname"]?>">
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                <label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION["Email"]?>">
				</div>
			</div>
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="phone" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION["Phone"]?>">
				</div>
			</div>
			<div class="col-xl-24 col-lg-12 col-md-12 col-sm-12 col-24">
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control"placeholder="Enter Address" id="address" name="addrss" value="<?php echo $_SESSION["Addrss"]?>">
				</div>
			</div>	
			
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
				
					<label for="phone">Change Password</label>
					<input id="Password"type="password" placeholder="Enter New Password"class="form-control" name="pass" value="">
					<span id = "message" style="color:blue"> </span> <br><br>   
				</div>
			</div>
		
					
		</div><br><br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="reset" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button>
					<button type="submit" id="submit" name="update" class="btn btn-primary">Update</button>    
				</div>
			</div>
		</div>
</form><br><br>



	</div>
   
   
</div>
</div>
</div>
</div>
                <!-- Footer Start -->
				<?php include 'footer.php';?>  
            <!-- Footer End -->
            
	<script>

function verifyPassword() {  
  var pw = document.getElementById("Password").value;
  
   
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password!";  
     return false;  
  }       
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "** Password length must be atleast 8 characters";  
     return false;  
  }     

  if(pw.search(/[a-z]/) < 0) {  
     document.getElementById("message").innerHTML = "** Password need one lower case letter";  
     return false;  
  }   

  if(pw.search(/[A-Z]/) < 0) {  
     document.getElementById("message").innerHTML = "** Password need one upper case letter";  
     return false;  
  }   
  if(pw.search(/[#?!@$%^&*-]/) < 0) {  
     document.getElementById("message").innerHTML = "** Password need one special character";  
     return false;  
  }     
  if(pw.search(/[0-9]/) < 0) {  
     document.getElementById("message").innerHTML = "** Password need one number";  
     return false;  
  }  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "** Passwordlength must not exceed 15 characters";  
     return false;  
  } else {  
	document.getElementById("message").innerHTML = "";  
  }  
}  
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('profilePic');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
 
</body>

</html>