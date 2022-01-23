<!-- Start the session--> 
<?php session_start();

/* block user to enter this page after logout */
    if(!isset($_SESSION['CustomerID'])){
        header("Refresh: 0.1; url= Login.php");
        echo '<script>alert("Please Log In Again, Thank You")</script>)';
    }

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Scrubb Home Improvement and Maintenance</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/SCRUBB.png">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Template Stylesheet -->
        <link href="css/header.css" rel="stylesheet">
        <link href="css/service.css" rel="stylesheet">
      
    </head>

    <body>
    <div class="wrapper">
        <!-- Header Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="header-top row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand">
                            <a href="Home.php">
                                <img src="img/SCRUBB.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                            </div>
                           
                            
                            <div class="topbar-col">
                                <a href="mailto:hello@scrubb.com"><i class="fa fa-envelope"></i>helloscrubb@gmail.com</a>
                            </div>
                            <div class="topbar-col">
                                <?php echo "<b>Welcome, " . $_SESSION['Firstname'] . "</b>"; ?>
                            </div>

                        </div>
                        <div class="navbar navbar-expand-lg bg-light navbar-light">
                            <a href="#" class="navbar-brand">MENU</a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="service.php" class="nav-item nav-link active">Services</a>
                                    <a href="CustomerServRev.php" class="nav-item nav-link">Reviews</a>
                                    <a href="contact.php" class="nav-item nav-link">Inquiries</a>
                                    <a href="About.php" class="nav-item nav-link">About</a>

                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Explore</a>
                                        <div class="dropdown-menu">
                                            <a href="career.php" class="dropdown-item">Career</a>
                                            <a href="GiftCard.php" class="dropdown-item" >Gift Card</a>
                                        </div>
                                    </div>

                                    <a href="Manageprofile.php" class="nav-item nav-link"><i class="fa fa-user"></i></a>
                                    
                                    <a href="cart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="logout.php" class="nav-item nav-link"><i class="iconify" data-icon="ci:log-out" data-width="30" data-height="20"></span></i></a>
                        
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    


    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="js/load-more-button.js"></script>
		
    </body>
</html>
                    
 
		
		
       