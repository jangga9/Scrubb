<?php include("header.php");
include'config.php';
?> 
<link href="css/careerstyle.css" rel="stylesheet">



    <body>

            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <b><h2>WORK WITH US</h2></b>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!--page intro-->
            <div class="section-header">
                <p>Be a part of our team to help improve the living quality of others!</p>

            </div>


            <!--position available-->
            <div class="container">
                <h3 style="color: black; margin-top: 10px; margin-bottom: 10px;">POSITIONS AVAILABLE :</h3>
                <div>
                    <div class="grid-container" style="color: black; ">
                        <div class="item1">ADMINISTRATOR </div>
                        <div class="item2">GENERAL WORKER</div>
                        <div class="item3">MARKETING MANAGER</div>  
                        <div class="item4">ACCOUNTANT</div>
                        <div class="item5">HOUSEKEEPER</div>
                          
                    </div>

                </div>


            </div>


            <!-- Work Start -->

            <div class="container">
                
                <div class="work">

            <form action="career.php" method="post" enctype="multipart/form-data">

                <script type="text/javascript">
                function ValidateForm(frm) {
                if (frm.First_Name.value == "") { alert('First name is required.'); frm.First_Name.focus(); return false; }
                if (frm.Last_Name.value == "") { alert('Last name is required.'); frm.Last_Name.focus(); return false; }
                if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
                if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
                if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
                if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
                return true; }
                </script>
                
                <table border="0" cellpadding="10" cellspacing="10">
                <tr> 
                    <td style="width: 50%">
                        <label><b>First name<span style="color: red;"> *</span></b></label><br />
                        <input name="fname" type="text" required="required" maxlength="50" style="width:100%;max-width: 260px" required>
                    </td> 
                
                    <td style="width: 50%">
                        <label><b>Last name <span style="color: red;"> *</span></b></label><br />
                        <input name="lname" type="text" maxlength="50" style="width:100%;max-width: 260px" required>
                    </td> 
                </tr> 
                
                <tr> 
                    <td colspan="2">
                        <label><b>Email <span style="color: red;"> *</span></b></label><br />
                        <input name="email" type="email" placeholder="E.g: xxx@gmail.com" required="required" maxlength="100" style="width:100%;max-width: 535px" required>
                    </td> 
                </tr> 

                <tr>
                    <td colspan="2">
                        <label><b>Phone<span style="color: red;"> *</span></b></label><br />
                        <input name="pno" type="tel" placeholder="+60 (Malaysia)" required="required" maxlength="100" style="width:100%;max-width: 535px" required>
                    </td>
                </tr>
                                
                <tr> 
                    <td colspan="2">
                        <label><b>Portfolio website</b></label><br />
                        <input name="portfolio" type="text" maxlength="255" value="http://" style="width:100%;max-width: 535px" required>
                    </td> 
                </tr> 
                
                <tr> 
                    <td colspan="2">
                        <label><b>Position you are applying for<span style="color: red;"> *</span></b></label><br />
                        <input name="position" type="text" placeholder="E.g: administrator" required="required" maxlength="100" style="width:100%;max-width: 535px" required>
                    </td> 
                </tr>
                
                
                <tr> 
                    <td>
                        <label><b>Salary requirements</b></label><br /> 
						<input name="salary" type="text" placeholder="E.g: RM 1000" maxlength="50" style="width:100%;max-width: 260px" required> </td> <td>
                        
						<label><b>When can you start?</b></label><br />
                        <input name="starttime" type="text" placeholder="E.g:  1 January 2021" maxlength="50" style="width:100%;max-width: 260px" required>
                    </td> 
                </tr> 
                                
                <tr>                 
                    <td colspan="2">
                        <label><b>Date of Birth</b></label><br />
                        <input name="dob" type="date" maxlength="100" style="width:100%;max-width: 535px" required>
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="2">
                        <label><b>Are you willing to relocate?</b></label><br />
                        <input style="display: inline-block;width: 10px;height: 10px;background: transparent;vertical-align: middle;border-radius: 50%;padding: 2px;margin:0 5px;" name="relocate" type="radio" value="Yes" checked="checked" /> Yes  

                        <input style="display: inline-block;width: 10px;height: 10px;background: transparent;vertical-align: middle;border-radius: 50%;padding: 2px;margin:0 5px;" name="relocate" type="radio" value="No" style="margin-left: 50px;" /> No  

                        <input style="display: inline-block;width: 10px;height: 10px;background: transparent;vertical-align: middle;border-radius: 50%;padding: 2px;margin:0 5px;" name="relocate" type="radio" value="NotSure" style="margin-left: 50px;" /> Not sure
                    </td> 
                </tr> 
                
                
                <tr> 
                    <td colspan="2">
                        <label><b>Last company you worked for</b></label><br />
                        <input name="lastwork" type="text" maxlength="100" style="width:100%;max-width: 535px" required>
                    </td> 
                </tr> 
                
                <tr> 
                    <td colspan="2">
                        <label><b>Employment Type</b></label><br />
                        <input style="display: inline-block;width: 10px;height: 10px;background: transparent;vertical-align: middle;border-radius: 50%;padding: 2px;margin:0 5px;" name="emptype" type="radio" value="Yes" checked="checked" /> Part Time  

                        <input style="display: inline-block;width: 10px;height: 10px;background: transparent;vertical-align: middle;border-radius: 50%;padding: 2px;margin:0 5px;" name="emptype" type="radio" value="No" style="margin-left: 50px;" /> Full Time  
                    </td> 
                </tr> 

                <tr>
                    <td colspan="2">
                        <br/><label><b> Upload Resume / CV</b></label><br/>
                        
                            <input type="file" name="file" value="fileupload" id="fileupload" size="40" required>

                          
                    </td>
                </tr>
                
                <tr> 
                    <td colspan="2">
                        <br><input class="btn btn-primary" name="submit" type="submit" value="Send Application" required>
						
						<?php include 'uploadfile.php'; include 'careeremail.php';?>
						
                    </td>
                </tr>
				
				
                </table>

				</form>

            </div>
        </div>
            <!-- work End -->
              <!-- Footer Start -->
              <?php include 'footer.php';?>  
            <!-- Footer End -->
            
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

