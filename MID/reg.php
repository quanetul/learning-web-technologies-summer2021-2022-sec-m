
<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRATION</title>
 	<?php include 'links.php' ?>
</head>


  <body background="patient.jpg"  >
    <style>
   .error {color: #FF0000;}
 </style>

    <form method="POST" action="reg.php" enctype="">
      <fieldset>
        <center>
            <legend><b>REGISTRATION</b></legend>
          <div class="container">
            <table>
                <tr>
                    <td>
                        Id:<span class="error">* </span><br />
                        <input type="text" name="id" value="" /><br />

                    </td>
                </tr>
                <tr>
                    <td>
                        Username:<span class="error">* </span><br>
                        <input type="text" name="username" value="" /><br />
                    </td>
                </tr>  
                <tr>
                    <td>
                        Password:<span class="error">* </span><br />
                        <input type="password" name="password" value="" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:<span class="error">*</span><br>
                        <input type="password" name="confirmpass" value="" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:<span class="error">* </span><br>
                        <input type="email" name="email" value="" /><br />
                    </td>
                </tr>  
                <tr>
                    <td>
                        Address:<span class="error">*</span><br>
                        <input type="text" name="address" value="" /><br />
                    </td>
                </tr>  
                <tr>
                    <td>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="login.html"> Login </a>
                    </td>
                </tr>
            </table>
            </div>
   
</fieldset>
</form>
</body>
</html>
 
<?php

include 'db.php';

if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confrimpass = $_POST['confrimpass'];
		$email = $_POST['email'];
		$address = $_POST['address'];

		
		

		$insertquery = "insert into patientlists(id,username,password,confrimpass,email,address) values('$id','$username','$password','$confrimpass','$email','$address')";

		$res = mysqli_query($con,$insertquery);

		if($res != null ){
			
			echo "Inserted Data";
		}else{

		echo "Not Inserted Data";
		}
		}
		

?>


