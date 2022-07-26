<?php 
	session_start();
	
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpass = $_POST['confirmpass'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		echo $id;

		if($id != null && $username != null && $password != null && $confirmpass != null && $email != null && $address != null)

			{

				echo "null";
			}


			else
			{
		if($username == "" && $password == "")
		{
			$_SESSION['status'] = true;
			header('location: reg.html');
		}
	   else
		{
			$user = $id."|".$username."|".$password."|".$confirmpass."|".$email."|".$address."\r\n";
			$file = fopen('paitent.txt', 'a');
			fwrite($file, $user);
			header('location: login.html');
		}
	
		echo "Null insertion. Please fillup all the fields";
	
}
}
		
?>