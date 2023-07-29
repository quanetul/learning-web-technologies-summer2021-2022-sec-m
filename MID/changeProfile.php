<html>
  <head>
    <title>Edit Profile</title>
  </head>

  <body background="patient.jpg" >
    <form method="post" action="">
      <fieldset>
          <center>
            <legend><h3><b>Edit Profile</b></h3></legend>
            <div class="content">
            
            <table>
              <tr>
                    <td>
                        Name :<br />
                        <input type="text" name="username" value="" /><br />

                    </td>
                </tr>
                <tr>
                    <td>
                        email:<br />
                        <input type="email" name="email" value="" /><br />

                    </td>
                </tr>
                <tr>
                    <td>
                        Current Password:<br />
                        <input type="password" name="currentpass" value="" /><br />

                    </td>
                </tr>
                <tr>
                    <td>
                        New Password:<br>
                        <input type="password" name="newpass" value="" /><br />
                    </td>
                </tr> 
                <tr>
                    <td>
                        Confirm Password:<br />
                        <input type="password" name="confirmpass" value="" /><br />
                    </td>
                </tr>
                <tr> 
                <tr>
                    <td>
                        New Address:<br />
                        <input type="text" name="address" value="" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="patientHome.php"> Back </a>
                    </td>
                </tr>
            </table>
            </div>
          </center>
        
      </fieldset>
    </form>
  </body>
</html>

<?php
  if(isset($_POST['submit']))
  {
    $file = fopen('patient.txt', 'r');
    while (!feof($file)) {
        $data=fgets($file);
        $user = explode('|', $data);
        
        if(isset($user) && sizeof($user) > 1)
        {
          if($user[0] == $_COOKIE['myId'])
          {
            $id = trim($user[0]);
            $username = trim($user[1]);
            $password = trim($user[2]);
            $confirmpass = trim($user[3]);
            $email = trim($user[4]);
            $address = trim($user[5]);
            if($password!=$_POST['currentpass'])
            {
              echo "Password doesn't match";
            }
            else if($_POST['newpass'] != $_POST['confirmpass'])
            {
              echo "Recheck new password and confirm password";
            }
            else
            {
              $username = $_POST['newusername'];
              $email = $_POST['newemail'];
              $address = $_POST['newaddress'];
            
              $user = $id."|".$username."|".$password."|".$confirmpass."|".$email."|".$address."\r\n";
              $updateFile = fopen('patient.txt', 'w');
              fwrite($updateFile, $user);
              header('location: profile.php');
            }
            break;
          }
          
        }

      }
  }
  
?>