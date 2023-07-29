
<?php 
	session_start();
		if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpass = $_POST['confirmpass'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		//echo "Please fill all" ;



		if($id == null || $username == null || $password == null || $confirmpass == null || $email == null || $address == null)

			{

				echo "";
			}

	   else
		{
			$user = $id."|".$username."|".$password."|".$email."|".$address."\r\n";
			$file = fopen('patient.txt', 'a');
			fwrite($file, $user);

			if($id == 'create')
		{
			header('location: reg.html');
		}
		else{
			header('location: login.html');
		}

		}
	
}

		
?>



