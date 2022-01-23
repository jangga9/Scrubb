<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['CustomerID'])) {
    header("Location: Home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['Email'];
	$password = md5($_POST['Pass']);

	$sql = "SELECT * FROM customer WHERE Email='$email' AND Pass='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        $id = $row["CustomerID"];
        $firstname = $row["Firstname"];
        $lastname = $row["Lastname"];
        $email = $row["Email"];
        $phone = $row["Phone"];
        $password = $row["Pass"];
        $image = $row["Image"];
        $address = $row["Addrss"];
        $_SESSION['CustomerID'] = $row['CustomerID'];
		$_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lastname'] = $row['Lastname'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Phone'] = $row['Phone'];
        $_SESSION['Pass'] = $row['Pass'];
        $_SESSION['Image'] = $row['Image'];
        $_SESSION['Addrss'] = $row['Addrss'];

		header("Location: Home.php");
       
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!-- Prevent Back button in Browser after Logout -->
<script type = "text/javascript" >
               function preventBack(){window.history.forward();}
                setTimeout("preventBack()", 0);
                window.onunload=function(){null};
        </script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/SCRUBB.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/SCRUBB.png">
        <link rel="stylesheet" href="css/customersignup.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
	
    <body>
    

        <div class="split left" style='background-color: #F8E192;' >
            <div> 
	            <img src = "img/SCRUBB.png" width="200" 
     height="220"style='position:absolute; top:0; left:0; ' alt="Shop Logo"> 
           </div> 
            <div class = "centered">
                <img src = "img/ScrubbMainPage.png" alt="Shop Logo">
            </div>
        </div>

        <div class="split right">
            <div class="centered">

                <div class="wrapper" style='background-color: #FFFBE9;'>
                    <div class="title-text">
                        
                        <div class ="title signup"> Sign in with your email today! </div>
                    </div>
					<div class ="form-container">
                    <div class="form-inner">
                    <form action="" method="POST" class="login-email">

<div class="field">
    <input type="email" placeholder="Email" name="Email" value="<?php echo $email; ?>" required>
</div>
<div class="field">
    <input type="password" placeholder="Password" id="id_password" name="Pass" value="<?php echo $_POST['Password']; ?>" required>
    <i class="far fa-eye" id="togglePassword" style="
     position:absolute;left:330px; top:165px;"></i>
</div>
<div class="field">
  <button style="background-color:#FFD662;color:black;width:100%;height:80%;font-size:15px;cursor:pointer;border-radius:5px;text-align:center;"name="submit" class="btn"><b>Login</b></button>
</div>

<p class="login-register-text">Don't have an account? <a style="color: #FFD662;" href="register.php">Register Here</a>.</p>
</form>
	</div>
	</div>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
        
</body>

</html>