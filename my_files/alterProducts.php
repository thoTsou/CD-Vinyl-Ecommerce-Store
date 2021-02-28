<?php
session_start();
?>


<?php

	include 'config.php';
	
	if(isset($_POST['productName']))
	{
		$productName = $_POST['productName'];
		$productImage = $_POST['productImage'];
		$productPrice = $_POST['productPrice'];
		$productCatID =  $_POST['productCatID'];
	
		$sql1 = "INSERT INTO products(Category_ID,Name,Price,image) VALUES('$productCatID','$productName','$productPrice.php','$productImage')";
		$result1 = $conn->query($sql1);
		
	}
	
	if(isset($_POST['deleteProduct']))
	{
		$product = $_POST['deleteProduct'];
	
		$sql2 = "DELETE FROM products WHERE Name='$product' ";
		$result2 = $conn->query($sql2);
		
	}
	
	if(isset($_POST['updateProduct']))
	{
		$update = $_POST['updateProduct'];
	
		$sql3 = $update;
		$result3 = $conn->query($sql3);
		
	}
	
	header("Location: adminPage.php");

	$conn->close();
	
?>