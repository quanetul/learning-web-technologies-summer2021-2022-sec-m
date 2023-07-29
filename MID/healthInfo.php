

<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Form Validation</title>
   <style>
    body {
        padding: 10px 50px;
    }

    .formdesign {
        font-size: 20px;

    }

    .formdesign input {
        width: 25%;
        padding: 6px 10px;
        border: 1px solid blue;
        margin: 7px;
        border-radius: 4px;
        font-size: 8px;
    }

    .formerror {
        color: red;
    }

    .but {
        border-radius: 9px;
        width: 100px;
        height: 50px;
        font-size: 25px;
        margin: 22px 20px;
    }
</style> 

</head>

<body background="patient.jpg">
    <form aciton ="healthInfo.php" name="myForm" onsubmit="return validateForm()" method="post">
    <center>
   
  
   <div class="formdesign" id="bloodgrp">
    Blood_Group: <br>
    <input type="text" name="fbloodgrp" required><b><span class="formerror"> </span></b>
</div>
        <div class="formdesign" id="dob">
           DOB: <br>
            <input type="dob" name="fdob" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="email">
            Email: <br>
            <input type="email" name="femail" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="phone">
            Phone: <br>
            <input type="phone" name="fphone" required><b><span class="formerror"></span></b>
        </div>

        <div class="formdesign" id="mediCon">
            Medical Condition: <br>
                  <select name= "Medical Condition"multiple size="7">
                                <option value="">No Medical Condition</option>  
                                <option value="">Asthma/COPD</option>   
                                <option value="">Bleeding Disorder</option> 
                                <option value="">Diabetes/ Insulin Dependent</option>   
                                <option value="">Heart Problems</option>    
                                <option value="">Hypertension</option>  
                                <option value="">Stroke</option>

                         </select>
            
            <input type="select" name="fmediCon" required><b><span class="formerror" ></span></b>
        </div>

        <div class="formdesign" id="gender">
            Gender: <br>
            <input type="gender" name="fgender" required><b><span class="formerror"></span></b>
        
            
        </div>


        <input class="but" type="submit" value="Submit">
        
          <a href="patientHome.php">Back</a>
      
    </fieldset>
    </form>
</body>
<script>
function clearErrors(){

errors = document.getElementsByClassName('formerror');
for(let item of errors)
{
    item.innerHTML = "";
}


}
function seterror(id, error){
//sets error inside tag of id 
element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
var returnval = true;
clearErrors();

//perform validation and if validation fails, set the value of returnval to false
var bloodgrp = document.forms['myForm']["fbloodgrp"].value;

if (bloodgrp.length == 0){
    seterror("Blood_Group", "*Please select!");
    returnval = false;
}
var dob = document.forms['myForm']["fdob"].value;

if (dob.date == 0){
    seterror("DOB", "*Please select!");
    returnval = false;
}

var mediCon = document.forms['myForm']["fmediCon"].value;
if (mediCon.select == 0){
    seterror("mediCon", "*Please select");
    returnval = false;
}

var phone = document.forms['myForm']["fphone"].value;
if (phone.length != 11){
    seterror("phone", "*Phone number should be of 11 digits!");
    returnval = false;
}

var gender = document.forms['myForm']["fgender"].value;
if (gender.select == 0){

    seterror("gender", "*Please select!");
    returnval = false;
}


return returnval;
}


</script>

</html>

