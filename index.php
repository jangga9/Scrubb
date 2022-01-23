<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/SCRUBB.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Welcome To Scrubb Home Improvment and Maintenance</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
        
        body,
        html {
            height: 100%;
            line-height: 1.8;
        }
        /* Full height image header */
        
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url(img/Scrubb\ home.png);
            min-height: 100%;
        }
        
        .w3-bar .w3-button {
            padding: 16px;
            background-color: #FFD662;
        }
        .w3-top {
            padding: 16px;
            background-color: #FFD662;
        }
    </style>
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div  class="w3-bar w3-" id="myNavbar">
        <a href="#">
                                <img style="float:left;width:80px;height:80px;"src="img/SCRUBB.png" alt="Logo">
                            </a>

            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
            
                <a href="Login.php" class="w3-bar-item w3-button"><b>CUSTOMER</b></a>
                <a href="admin/Adminlogin.php" class="w3-bar-item w3-button"><b>ADMIN</b></a>

            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="Login.php" onclick="w3_close()" class="w3-bar-item w3-button">CUSTOMER</a>
        <a href="Adminlogin.php" onclick="w3_close()" class="w3-bar-item w3-button">ADMIN</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">We create a better living space for you.</span><br>
            <span class="w3-large">Book a service with us, and we will deliver our best right at your doorstep.</span>
            <p><a href="#" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more</a></p>
        </div>
    </header>

    <!-- About Section -->
    
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT SCRUBB</h3>
        <p class="w3-center w3-large">Key features of Scrubb Home Improvement and Maintenance</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-money w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Affordable</p>
                <p>Affordable service for anyone to improve the quality of their home environment.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-handshake-o w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Efficient</p>
                <p>We make sure that every services booked are done quickly and with the best quality assured.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Professional</p>
                <p>Our team are professional individuals who has more than 5 years of experiences.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-comments w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Support</p>
                <p>We provide support for customer everyday and anywhere and always ready to assist in any way.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #FFD662;"class="w3-center w3- w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <p>©Scrubb Home Improvement and Maintenance | 2021</p>
    </footer>

    <script>
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>
</body>

</html>