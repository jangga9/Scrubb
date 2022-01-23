<?php include("header.php");
include'config.php';
?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>GIFT CARD</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->



        <!-- Gift Card Page Start -->
        <a href="PurchaseHistory.php"  style="background-color:#FFD662;cursor:pointer;border-radius:5px;text-align:center;" class="btn"><b>See Purchase History</b></a>
        <div class="single">
            <div class="container">
                <div class="section-header">
                    <p>Scrubb E-Gift Card</p>
                    <h2>A Gift Card for Anyone</h2>
                
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">

                            <h3>Specially for you</h3>

                            <img class="gift" src="img/GiftCard.png">
                            <p>Get a gift for your loved ones today!</p><br>
                            <p>
                                The Gift Cards are delivered via email and contains instructions on how to redeem them upon checkout. Our gift cards have no additional processing fees and will expire one year from the purchase date.
                            </p>
                            <p>
                                This is an ONLINE ONLY gift card. It can be redeem and used on our Scrubb Website ONLY.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <h3>Personalise your Gift Card</h3>

                            <form action="email-script.php" method="post" class="recipient" onsubmit = "return verifyPassword()">
                                <p>Select Your Amount:</p>
                                <div class="gcard">
                                    <input type="radio" name="select" id="option-1" value="RM50" checked>
                                    <input type="radio" name="select" id="option-2" value="RM75">
                                    <input type="radio" name="select" id="option-3" value="RM125">
                                    <input type="radio" name="select" id="option-4" value="RM150">
                                    <input type="radio" name="select" id="option-5" value="RM200">

                                    <label for="option-1" class="option option-1">
                                                    <span>RM 50</span>
                                            </label>
                                    <label for="option-2" class="option option-2">
                                                    <span>RM 75</span>
                                            </label>
                                    <label for="option-3" class="option option-3">
                                                <span>RM 125</span>
                                            </label>
                                    <label for="option-4" class="option option-4">
                                                <span>RM 150</span>
                                            </label>
                                    <label for="option-5" class="option option-5">
                                                <span>RM 200</span>
                                            </label>
                                </div>
                              
                                <label for="tname">From</label>
                                <input type="text" placeholder="Recipient's Name" id="tname" name="tname"value="helloscrubb@gmail.com" readonly required autofocus><br><br>

                    
                                
                                <label for="remail">To</label>
                                <input type="email" placeholder="Recipient's Email" id="remail" name="remail">
                                <label for="rname"></label>
                                <input type="text" placeholder="Recipient's Name" id="rname" name="rname"><br><br>
                                
                               
                                <label for="rmessage">Message</label>
                                <textarea placeholder="Your Personal Message" id="rmessage" name="rmessage"></textarea><br><br>


                              

           

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 55%;border: 1px solid blue;padding:30px;border-radius:10px;">
    <h1>CHECKOUT</h1>
            <p>Fill in your Payment Details</p>
            <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cardName">Card Holder Name</label>
                        <input type="text" class="form-control" name="cardName" id="cardName" placeholder="John Doe" required>
                        <span id = "message" style="color:orange"> </span> <br><br>   
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cardNum">Card Number</label>
                        <input type="password" class="form-control" name="cardNum" id="cardNum" placeholder="1234567890098765" required>
                    </div>
                </div><p>Expiration Date</p>
                <div class="form-row">
                
                    <div class="form-group col-md-6">
                        <label for="endDate">Month</label><br>
                        <select name="endmonth"id="endDate" class="form-control" required>
                                <option selected>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
              </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="endDate">Year</label>
                        <select  name="endyear" id="endDate" class="form-control" required>
                            <option selected>2021</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cVV">CVV</label>
                        <input name="CCV" type="text" class="form-control" id="cVV" placeholder="123"required>
                    </div>
                </div><br><br>

                                <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Send</button>
                            </form>
                        </div>
                        </div>
    <!-- Gift Card Page End -->


    <?php include 'footer.php';?>   
</body> 

</html>