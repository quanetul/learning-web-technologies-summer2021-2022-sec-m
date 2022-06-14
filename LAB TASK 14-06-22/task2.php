<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $emailErr =  "";
         $email = "";
         
        
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
   
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
           
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
            
         </table>
         
      </form>
   
   </body>
</html>
