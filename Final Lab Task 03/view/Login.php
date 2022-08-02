    
      <html>

<body>
   

    <form action="login.php" method="post" enctype="">


       
        <h3>Paitent Login</h3>

           


            Username<input type="text" name="name" value="">
    
                
             
                 Password<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
           
                <input type="submit" name="submit" value="submit">

             <br><a href="reg.php">Register</a>
               
            
              </form>
              
        
<script>
             
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
 
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }


  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }


  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
            
        <style>
        
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
  }
  
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
  }

  .loginatt {
    background-color: #f2f2f2;
    padding: 20px;
  }
  
   #message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
  }
  
  #message p {
    padding: 10px 35px;
    font-size: 18px;
  }
  
  
  .valid {
    color: green;
  }
  
  .valid:before {
    position: relative;
    left: -35px;
    content: "&#10004;";
  }
  
 
  .invalid {
    color: red;
  }
  
  .invalid:before {
    position: relative;
    left: -35px;
    content: "&#10006;";
  }
        </style>
            

    <body>

</html>
<?php

    if(isset($_POST['login']))
    {

        $username = $_REQUEST['name'];
        $password = $_REQUEST['password'];
        
        if($username != null && $password != null)
        {
        
            $file = fopen('management_user.txt', 'r');

            while(!feof($file))
            {
                $data = fgets($file);

                $user = explode('|', $data);
               

                if($username == $user[0] && $password == $user[1] )
                {
                    echo "Login Successful";
                    

                    
                    setcookie('name', $username, time()+3600, '/');
                    header('Location: home.php');



               
                        
                 
               
                }
                else{
                    echo "<h1>Wrong user name or password</h1>";
                    ?>
                    
                    <script>
                    function change(){
                   document.getElementsByTagName('h1')[0].innerHTML = "Login failed";
                        }


                    </script>

              <?php  }

                
            }


        }

        else
        { echo '
        
      
        <h2>Back to<a href=home.php>Login</a>?</h2>
        
        ';
    }
}
?>