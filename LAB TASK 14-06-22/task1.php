<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr =  "";
         $name =  "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
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
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
            
         </table>
			
      </form>
      
     
   
   </body>
</html>