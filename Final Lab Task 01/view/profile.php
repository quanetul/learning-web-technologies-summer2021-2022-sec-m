<?php
		if(isset($_COOKIE['status'])){
        
			
?>
<html>
<head>
    <center><title>My Profile</title>
</head>
<h2>My Profile</h2>
<body>
		<form>
			<br/>
			<br/>
			<table border="3" align="center">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>password</th>
					<th>email</th>
					<th>address</th>
				</tr>
				<?php
					
					$file = fopen('paitent.txt', 'r');
					while (!feof($file)) {
							$data=fgets($file);
							$user = explode('|', $data);
							
							if(isset($user) && sizeof($user) > 1)
							{
								if($user[0]== $_COOKIE['myId'])
								{
									$id = trim($user[0]);
									$username = trim($user[1]);
									$password = trim($user[2]);
									$email = trim($user[4]);
									$address = trim($user[5]);
									echo "<tr>";
									echo "<td>".$id."</td>";
									echo "<td>".$username."</td>";
									echo "<td>".$password."</td>";
									echo "<td>".$email."</td>";
									echo "<td>".$address."</td>";
									echo "</tr>";
									break;
								}
								
							}

						}
				?>
				
						
				
			</table>
		</form>

			<center>
					<a href="changePass.php">Change Password</a><br />
					<a href="changeProfile.php">Change Profile</a><br />

					<a href="paitentHome.php">Back</a><br />
</body>
</html>
<?php
		}
			

?>