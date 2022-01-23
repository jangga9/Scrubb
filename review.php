<?php include("header.php");
include'config.php';
$sql = "SELECT * FROM tbl_service";
$result = $conn->query($sql);

?>	


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Client Review</h2>
                        <p>Here are what our customers have to say about our services!</p>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
            
           

            <!-- Add testimony Start -->
            
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
                                          <label>Service ID:</label>
                                        </td>
                                        <td>
                                        <?php while($row = $result->fetch_assoc()){ ?>
<option><?php echo ($row['service_title']); ?></option>
 <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Full Name:</label>
                                        </td>
                                        <td>
                                            <input type="text" class="fname-input" name="customerName">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Message:</label>
                                        </td>
                                        <td>
                                            <input type="text" class="message-input" name="customerMessage">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Type of Service:</label>
                                        </td>
                                        <td>
                                            <select class="choose-type" id="type" name="serviceType">
                                                <option name="chooseoption" value="0">None</option>
                                                <option name="chooseoption" value="1">option 1</option>
                                                <option name="chooseoption" value="2">option 2</option>
                                                <option name="chooseoption" value="3">option 3</option>
                                                <option name="chooseoption" value="4">option 4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Rating:</label>
                                        </td>
                                        <td>
                                            <input type="text" name="rating">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                             <button type="submit" class="submit-button">Submit</button>
                                        </td>
                                    </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Add testimony End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Klang Valley, Selangor</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>hello@scrubb.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-whatsapp"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">About Us</a>
                                <a href="">Be Our Team</a>
                                <a href="">Our Services</a>
                                <a href="">Inquiries</a>
                                <a href="">Gift Cards</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">Our Clients</a>
                                <a href="">Clients Reviews</a>
                                <a href="">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Get Connected</h2>
                                <p>
                                    Don't missed out on any important updates from us!
                                </p>
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2021, Scrubb Home Improvement and Maintenance</p>
                        </div>
                        <div class="col-md-6">
                            <p>All Rights Reserved</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
