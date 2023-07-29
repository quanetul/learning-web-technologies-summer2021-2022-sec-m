<?php

    $src = $_FILES['myfile']['tmp_name'];
    $des = "upload/".$_FILES['myfile']['name'];

    if(move_uploaded_file($src, $des)){
        echo "SUCCESSFUL";
        
    }else{
        echo "Error";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
    <br>
    <a href="query.php">Back</a>

</body>
</html>
