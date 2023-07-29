<?php 
    require_once "db.php";

    function add($bloodgroup,$dob,$email,$phone,$mediCon,$gender){
        $conn = getConnection();
        $sql = "insert into registration values('{$bloodgroup}','{$dob}','{$email}','{$phone}','{$mediCon}','{$gender}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>