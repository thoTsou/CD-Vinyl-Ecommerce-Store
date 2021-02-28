<?php
session_start();
?>

<?php 

	include 'config.php';
	
	$password = $_POST['adminPassword'];
	$username = $_POST['adminName'];
	
	
	$sql = "SELECT Password FROM admins WHERE Password = '$password'";
	$result = $conn->query($sql);
	
	if($result->num_rows == 0){  
			echo "<br>";
			echo "No Admin with these credentials.Please go back and try again";
			echo "<br><br>";
			echo "<a href='adminHome.php'>=>Try Again</a>";
		}else  
		{
			header("Location: adminPage.php");
		}
	
	$conn->close();
	
?>