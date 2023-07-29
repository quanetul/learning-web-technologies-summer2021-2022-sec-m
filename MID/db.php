<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'patientdb';


$con = mysqli_connect($server,$username,$password,$db);


if($con)
	//echo "Connection Successful";
	?>

	<script>
		alert('Connection Successful')
	else{
	
	echo "No Connection";

	}
