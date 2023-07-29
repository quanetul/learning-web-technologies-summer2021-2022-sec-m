<html>
  <head>
    <title>Payment</title>
  </head>
  <body >
    <form method="post">
      <fieldset>
          <center>
            <legend><h1><b>Payment</b></h1></legend>
            <div class="content">
            <table>

            <h5>Choose Payment Method:</h5><br>
            <input type="radio" name="text" value="Card Payment">Visa/Master Card<br>
            <input type="radio" name="text" value="Bkash">Bkash <br>
            <input type="radio" name="text" value="Rocket">Rocket <br>
            <input type="radio" name="text" value="Nagad">Nagad<br>

            

               <br> <button type='submit' name='payment' value='$id'>Pay</button>

                <a href="patientHome.php">Back</a>


               
 </table>
 </fieldset>
</body>

</html>
<?php 
  session_start();
    if(isset($_POST['submit'])){
       $text = $_POST['text'];

      if($text == null )

      {

        echo "";
      }

     else
    {
      $user = $text ;
      $file = fopen('patient.txt', 'a');
      fwrite($file, $user);

      if($text == 'create')
    {
      header('location: reg.html');
    }
    else{
      header('location: login.html');
    }

    }             
?>


<?php
        }
                 
?>