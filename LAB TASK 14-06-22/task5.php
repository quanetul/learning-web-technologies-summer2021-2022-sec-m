<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $degreeErr =  "";
         $degree
            
            if (empty($_POST["degree"])) {
               $genderErr = "degree is required";
            }else {
               $gender = test_input($_POST["degree"]);
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
                  <input type = "radio" name = "degree" value = "ssc">SSC
                  <input type = "radio" name = "degree" value = "hsc">HSC
                  <input type = "radio" name = "degree" value = "bsc">BSc
                  <input type = "radio" name = "degree" value = "msc">MSc
                  <span class = "error">* <?php echo $degreeErr;?></span>
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