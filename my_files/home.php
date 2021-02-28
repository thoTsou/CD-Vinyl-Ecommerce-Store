<?php
session_start();
?>

<?php 

	include 'config.php';
	
	
	$password = 0;
	$username = 0;
	
	if(isset($_POST['password'])  && isset($_POST['username']))
	{
	$password = $_POST['password'];
	$username = $_POST['username'];
	}
	
	
	if( $username=='admin' && $password=='admin' )
	{
		$_SESSION["username"] = $username; 
		header("Location: adminHome.php");
	}
	
	
	$sql = "SELECT Username FROM users WHERE Username='$username'";
	$result = $conn->query($sql);
		
		if($result->num_rows == 0){  //check if user with given username exists
			echo "<br>";
			echo "Wrong Credentials.Please go back and try again";
			echo "<br><br>";
			echo "<a href='HomePage.html'>=>Try Again</a>";
		}else  //if user exists check his/her password
		{
			
			$sql2 = "SELECT Password FROM users WHERE Username='$username'";
			$result2 = $conn->query($sql2);
			
			while($row = $result2 -> fetch_assoc())
			{
			$passwordDB = $row['Password'] ;
			}
		
			//decrypt password which comes from Db
			// Non-NULL Initialization Vector for decryption 
			$decryption_iv = '1234567891011121'; 
			$options = 0;
			
			// Store the cipher method 
			$ciphering = "AES-128-CTR"; 
			  
			// Store the decryption key 
			$decryption_key = "ThoTsou"; 
			  
			// Use openssl_decrypt() function to decrypt the data 
			$decryption=openssl_decrypt ($passwordDB, $ciphering,  
					$decryption_key, $options, $decryption_iv); 
			  
			
			if($password != $decryption){  //check for valid password
			echo "<br>";
			echo "Wrong Password.Please go back and try again";
			echo "<br><br>";
			echo "<a href='HomePage.html'>=>Try Again</a>";
		}else
		{
			$_SESSION["username"] = $username; 
			header("Location: HomePage_2.php");
		
		}
			
		
		}
	
	
	$conn->close();
	

?>