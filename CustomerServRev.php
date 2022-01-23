<?php include("header.php");

include'config.php';

$sql = "SELECT * FROM review ORDER BY Review_ID DESC LIMIT 4";
$result = $conn->query($sql);
?>
<link href="css/review1.css" rel="stylesheet">
<!-- Page Header Start -->
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>REVIEWS</h2>
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
                   <img style="height:150px;width:150px;display: block;margin-left: auto;margin-right: auto;" src="img/avatar.png" id="profilePic" class="pic"><br>
                  <?php echo ($row['Firstname']); ?>
                    <p>
                    <?php echo ($row['service_type']);?>
                    </p>
                    <p>
                    <?php echo ($row['Rating']);?><i class="bi bi-star"></i>
                    </p>
                    <p>
                    <?php echo ($row['Msg']); ?>
                    </p>
                  
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
            
           

            <!-- Add testimony Start -->
            <div class="split left">
            <div class="blog">
                <div class="section-header">
                    <p>Recently had a service done by us? Give us your thoughts!
                        We would love to hear them!</p>
                </div>
                <div class="form-container">
                    
                    <div class="deco-pic">
                        <img src="img/blog-3.jpg" alt="">
        
                    </div>
                    <div class="feedback-container">
                        <div class="table-form">
                            <table>
                                <form action="SendReview.php" method="post">
                                    <tr>
                                        <td>
                                          <label>Service Type:</label>
                                        </td>
                                        <td>
                                        <select id="service_type" name="service_type" style="max-width : 450px;" class="form-control">
                                        <?php 

                                                include'config.php';

                                                $sql = "SELECT * FROM tbl_service";
                                                $result = $conn->query($sql);
                                                ?>
                                                <?php while($row = $result->fetch_assoc()){ ?>
                                                <option><?php echo ($row['service_title']); ?></option>
                                                <?php } ?>

                                                </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Full Name:</label>
                                        </td>
                                        <td>
                                            <input type="text" class="fname-input" name="customerName" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Message:</label>
                                        </td>
                                        <td>
                                        <textarea class="message-input" name="customerMessage"></textarea>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>
                                            <label>Rating:</label>
                                        </td>
                                        <td>
                                        <select name="rating" id="rating">
                                            <option value="None">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                             <button name="Submit" id="Submit" value="Submit" type="submit" class="submit-button">Submit</button>
                                        </td>
                                    </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Add testimony End -->
  <!-- Footer Start -->
  <?php include 'footer.php';?>  
            <!-- Footer End -->
            
    </body>
</html>
