<?php

	include 'config.php';
	
	$full = $_POST['full'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	
	$sql = "SELECT Username FROM users WHERE Username='$username'";
	$result = $conn->query($sql);
		
		if($result->num_rows != 0){
			echo "<br>";
			echo "Username is taken.Please go back and try again";
			echo "<br><br>";
			echo "<a href='RegisterPage.html'>=>Try Again</a>";  //username is taken
		}
		else
		{	
	
	
		function randomPassword() { //function to genarate random string
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); 
		$alphaLength = strlen($alphabet) - 1; 
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); 
	}

		
		
			$password = randomPassword() ; 	//genarate password
			
			// the message
			$msg = "Your Log In Password is : $password ";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail($email,"Music Store Password",$msg);

		
		 //encrypt password in order to store it into the database
		 
		// Store the cipher method 
		$ciphering = "AES-128-CTR"; 
		  
		// Use OpenSSl Encryption method 
		$iv_length = openssl_cipher_iv_length($ciphering); 
		$options = 0; 
		  
		// Non-NULL Initialization Vector for encryption 
		$encryption_iv = '1234567891011121'; 
		  
		// Store the encryption key 
		$encryption_key = "ThoTsou"; 
		  
		// Use openssl_encrypt() function to encrypt the data 
		$encryption = openssl_encrypt($password, $ciphering, 
					$encryption_key, $options, $encryption_iv); 
		  
		
		$sql2 = "INSERT INTO users VALUES ('$username','$encryption','$email','$full')"; //insert new user into database
		$result2 = $conn->query($sql2);
		
		$conn->close();
	
			header("Location: HomePage.html");  //redirect to HomePage so the user can Log In
			die();
	
		}
		
	
	

?>