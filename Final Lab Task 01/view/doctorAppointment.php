<?php
        if(isset($_COOKIE['status'])){
                 
?>

<html>
  <head>
    <title>Doctor Appointment</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
          <center>
            <legend><h1><b>Doctor Appointment</b></h1></legend>
            <div class="content">
            <table>

            <h5>Select Time Slot:</h5><br>
            <input type="radio" name="time" value="9-11">09.00 a.m-11.00 a.m <br>
            <input type="radio" name="time" value="11-1">11.00 a.m-01.00 p.m <br>
            <input type="radio" name="time" value="6-8">06.00 p.m-08.00 p.m <br>
            <input type="radio" name="time" value="8-10">08.00 p.m-10.00 p.m<br>

                    <h5>Select Disease Type:</h5><br>
                    <input type="radio" name="disease" value="mild">Simple Problem <br>
                        <input type="radio" name="disease" value="serious">Serious Problems <br>
                        <input type="radio" name="disease" value="emergency">Very Emergency Problems<br>


                <br><button type='submit' name='doctorAppointment' value='$id'>Save</button>

                <a href="paitentHome.php">Back</a>


               
 </table>
 </fieldset>
</body>

</html>
<?php
        }
                 
?>