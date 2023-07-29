<?php
        if(isset($_COOKIE['status'])){
                 
?>

<html>
  <head>
    <title>Doctor Consult Online</title>
  </head>
  <body background="patient.jpg">
    <form method="post">
      <fieldset>
          <center>
            <legend><h1><b>Doctor Consult Online</b></h1></legend>
            <div class="content">
            <table>

            <h5>Select Time Slot:</h5><br>
            <input type="radio" name="time" value="9-11">Dentist >>>09.00 a.m-11.00 a.m <br>
            <input type="radio" name="time" value="11-1">Surgeon >>>11.00 a.m-01.00 p.m <br>
            <input type="radio" name="time" value="6-8">Gynecologist >>>06.00 p.m-08.00 p.m <br>
            <input type="radio" name="time" value="8-10">Cardiologist >>>08.00 p.m-10.00 p.m <br>

            

               <br> <button type='submit' name='doctorConsult' value='$id'>Save</button>

                <a href="patientHome.php">Back</a>


               
 </table>
 </fieldset>
</body>

</html>
<?php
        }
                 
?>