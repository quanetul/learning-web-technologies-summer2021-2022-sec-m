<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body background="patient.jpg"  >>
<fieldset>
	<center class="content">
		<p><b><h1>Patient Dashboard</h1></b></p>
		<a href="profile.php"> Profile </a><br>
		<a href="healthInfo.php"> Health Information </a><br>
		<a href="doctorAppointment.php"> Doctor Appointment </a><br>
		<a href="doctorConsult.php"> Doctor Consult </a><br>
		<a href="insurance.php"> Insurance </a><br>
		<a href="payment.php"> Payment </a><br>
		<a href="query.php"> Query </a><br>
		
		<a href="logout.php"> logout </a>
	</center>
</body>
</html>
<?php 
	}else{
		echo "invalid request";
	}  
?>