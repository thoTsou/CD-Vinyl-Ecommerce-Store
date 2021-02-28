<?php
session_start();
?>


<?php

include "config.php";
	
	$username = $_SESSION["username"];
	$rating = $_POST['rating'];
	$comment = $_POST['comment'];
	$photo_ID = $_POST['photo_ID'];
			
		$sql1 = "INSERT INTO ratings VALUES('$username','$photo_ID','$comment','$rating')";
		$result1 = $conn->query($sql1);
		

	header("Location: photos.php");
    $conn->close();


?>