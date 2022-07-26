<?php
        if(isset($_COOKIE['status'])){
                 
?>

<html>
  <head>
    <title> Health Information </title>
  </head>
  <body>
    <form method="post" action="healthInfo.php" enctype="">
      <fieldset>
      	<center>
            <legend><b>Health Information</b></legend>
            <div class="content">
            <table >
            	<tr>
                    <td>
                        Medical Condition: <br />
        
            			<select name= "Medical Condition"multiple size="7">
               				    <option value="">No Medical Condition</option>	
                				<option value="">Asthma/COPD</option>	
                				<option value="">Bleeding Disorder</option>	
                				<option value="">Diabetes/ Insulin Dependent</option>	
                				<option value="">Heart Problems</option>	
                				<option value="">Hypertension</option>	
                				<option value="">Stroke</option>

           				 </select>
    
        				</td>
                </tr>
                <tr>
                    <td>
                        Blood Group: <br />
        
            			<select name="bloodgrp">
               				    <option value="A+">A+</option>	
                				<option value="A-">A-</option>	
                				<option value="AB+">AB+</option>	
                				<option value="B+">B+</option>	
                				<option value="B-">B-</option>	
                				<option value="O+">O+</option>	
                				<option value="O-">O-</option>	
           				 </select>
    
        				</td>
                </tr>
                <tr>
                	<td>
                    Gender:<br />
       				 
            			<input type="radio" name="gender" value="Male">Male
           				<input type="radio" name="gender" value="Female">Female
           	 			<input type="radio" name="gender" value="Other">other
       		 		</td>
                </tr>  
                <tr>
                    <td>
                        DOB:<br />
                        <input type="date" name="dob" value="" /><br />
                    </td>
                </tr>
                <tr>
                	 <td>
                    Nationality: <br />
       
            		<select name="nationality">
            			<option value="Bangladesh">Bangladesh</option>
                		<option value="Bhutan">Bhutan</option>	
                		<option value="India">India</option>	
               			<option value="Srilanka">Srilanka</option>	
                		<option value="Nepal">Nepal</option>		
                		<option value="USA">USA</option>	
            		</select>
        			</td>
                </tr>
                <br />

                <tr>
                	<td>
                <br> <button type='submit' name='healthInfo' value='$id'>Save</button>

                <a href="paitentHome.php">Back</a>
            </td>
        </tr>

            </table>
            </div>
    
         
        
      </fieldset>
    </form>
</body>

</html>
<?php
        }
                 
?>