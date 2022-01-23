
<?php include("header.php");

include'config.php';

$sql = "SELECT * FROM tbl_service";
$result = $conn->query($sql);
?>
 
<?phpif ($result){ ?>
  <!-- Page Header Start -->
  <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <b><h2>SERVICES</h2></b>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->
<div class="gallery"> 
<div class="service">
<div class="container">
<div class="row">

<?php while($row = $result->fetch_assoc()){ ?>
 

<div class="col-lg-3 col-md-6">
                <div class="service-item">
                   <br>
                   <img style="height=100px; width:100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['service_image']); ?>" />
                    <h3><?php echo ($row['service_title']); ?></h3>
                    <p>
                        <?php echo ($row['service_description']) ; ?>
                    </p>
                    <p>
                        <?php echo ($row['service_price']); ?>
                    </p>
                    <button onclick="document.location='service_booking.php'" id="myBtn" class="btn">Book Now</button>
                </div>
            </div>
            
            
            

<?php } ?>
</div>
</div>
</div>
</div>

<?php
$conn->close();
?>
<!-- Book End -->
   

    </body>
    <?php include 'footer.php';?>    
</html>
