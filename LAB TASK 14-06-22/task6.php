<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $bloodGroupErr =  "";
         $bloodGroup
            
            if (empty($_POST["bloodGroup"])) {
               $genderErr = "bloodGroup is required";
            }else {
               $gender = test_input($_POST["bloodGroup"]);
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
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "bloodGroup" value = "A+">A+
                 
                  <span class = "error">* <?php echo $bloodGroupErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>
                   <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>

         </table>
         
      </form>
      
      
   
   </body>
</html>