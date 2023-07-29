<?php
        if(isset($_COOKIE['status'])){
                 
?>
<html>
    <head>

    </head>
    <body>
        <form action="uploadCheck.php" method="post" enctype="multipart/form-data">
          <center>
            Upload: <input type="file" name="myfile" > <br>

            <br><input type="submit" name="Submit" value="Submit">

            <a href="patientHome.php">Back</a>

        </form>
    </body>
</html>

<?php
  
  }
                 
?>