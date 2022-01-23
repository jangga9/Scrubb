<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['Firstname'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$address = $_POST['Addrss'];
	$password = md5($_POST['Pass']);




	if ($password) {
		$sql = "SELECT * FROM customer WHERE Email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO customer (Firstname, Lastname, Email, Pass, Phone)
					VALUES ('$firstname','$lastname', '$email', '$password','$phone')";
			$result = mysqli_query($conn, $sql);
			
			if ($result) {
				header("Refresh: 0.1; url= Login.php");
				echo "<script>alert('Thank You! User Registration Completed.')</script>";
				$email = "";
				$_POST['Password'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
		<link rel="shortcut icon" href="img/SCRUBB.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/SCRUBB.png">
        <link rel="stylesheet" href="css/customersignup.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		
		
		
    </head>
	
    <body>
    

        <div class="split left" style='background-color: #F8E192;' >
            <div> 
	            <img src = "img/SCRUBB.png" width="200" height="220"style='position:absolute; top:0; left:0; ' alt="Shop Logo"> 
           </div> 
             <div class = "centered">
                <img src = "img/ScrubbMainPage.png" alt="Shop Logo">
             </div>
        </div>

        <div class="split right">
            <div class="centered">
                  <div class="wrapper" style='background-color: #FFFBE9;'>
                    <div class="title-text">   
                   		 <div class ="title signup"> Sign up with your email today! </div>
				    </div>
					        <div class ="form-container">
                               <div class="form-inner">
		                          <form method="POST" class="login-email"  onsubmit = "return verifyPassword()">
										<div class="field">
											<input type="text" placeholder="Firstname" name="Firstname" value="<?php echo $firstname; ?>" required>
										</div>
										<div class="field">
											<input type="text" placeholder="Lastname" name="Lastname" value="<?php echo $lastname; ?>" required>
										</div>
										<div class="field">
											<input type="email" placeholder="Email" name="Email" value="<?php echo $email; ?>" required>
										</div>
										<div class="field">
											<input type="phone" placeholder="Phone" name="Phone" value="<?php echo $phone; ?>" required>
										</div>
										<div class="field">
											<input type="password" id="Password" placeholder="Password" id="Password" name="Pass" value="<?php echo $_POST['Password']; ?>" required>
											<i class="far fa-eye" id="togglePassword" style="position:absolute;left:330px; top:375px;"></i>
										</div><br>
										<span id = "message" style="color:orange"> </span> <br><br>   
					
										<div class="form-check">
													<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
													<label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions</label>
												</div>
					
										<div class="field">
  													<button id="submit"type="submit"style="background-color:#FFD662;color:black;width:100%;height:80%;font-size:15px;cursor:pointer;border-radius:5px;text-align:center;"name="submit" class="btn"><b>Register</b></button>
										</div>
								
										<p class="login-register-text">Have an account? <a style="color: #FFD662;" href="Login.php">Login Here</a>.</p>
								 </form>
						 	  </div>
							</div>
						</div>
				  </div>
		 	</div>
			 

</body>
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

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#Password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>    
</html>