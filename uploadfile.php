     <?php
	 
	 	@$a=$_POST['relocate'];  
		@$b=$_POST['emptype']; 
       if(isset($_POST['submit'])){
		session_start();
		//get data from the session
		$id=$_SESSION['CustomerID'];
        $firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
        $email = $_POST['email'];
		$pno = $_POST['pno'];
        $portfolio= $_POST['portfolio'];
		$position= $_POST['position'];
		$salary= $_POST['salary'];
		$starttime= $_POST['starttime'];
		$dob= $_POST['dob'];
		
		$lastwork= $_POST['lastwork'];
        
			$file = rand(1000,100000)."-".$_FILES['file']['name'];
			$file_loc = $_FILES['file']['tmp_name'];
			$file_size = $_FILES['file']['size'];
			$file_type = $_FILES['file']['type'];
			$folder="upload/";
 
			/* new file size in KB */
				$new_size = $file_size/1024;  
			/* new file size in KB */
 
			/* make file name in lower case */
				$new_file_name = strtolower($file);
			/* make file name in lower case */
 
				$final_file=str_replace(' ','-',$new_file_name);
 
			 if(move_uploaded_file($file_loc,$folder.$final_file))
			{
				$sql = "INSERT INTO user (CustomerID,file_name, type, size, fname, lname, email, pno, portfolio, position, salary, starttime, dob, relocate, lastwork, emptype)
				VALUES ('$id','$final_file','$file_type','$new_size','$firstname','$lastname','$email', '$pno', '$portfolio', '$position', '$salary', '$starttime', '$dob', '$a', '$lastwork', '$b')";
				
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  }
 else
 {
  
  echo "Error.Please try again";
		
		}
			    
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "career.php";
        </script>
        <?php
             }              
?>                		