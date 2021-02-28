<?php
session_start();
?>


<?php

	include 'config.php';
	
	if(isset($_POST['categoryName']))
	{
		$category = $_POST['categoryName'];
		$image = $_POST['categoryImage'];
	
		$sql1 = "INSERT INTO products_categories(Name,image) VALUES('$category','$image')";
		$result1 = $conn->query($sql1);
		
	}
	
	if(isset($_POST['deleteCategory']))
	{
		$category = $_POST['deleteCategory'];
	
		$sql2 = "DELETE FROM products_categories WHERE Name='$category' ";
		$result2 = $conn->query($sql2);
		
	}
	
	if(isset($_POST['update']))
	{
		$update = $_POST['update'];
	
		$sql3 = $update;
		$result3 = $conn->query($sql3);
		
	}
	
	header("Location: adminPage.php");

	$conn->close();
	
?>