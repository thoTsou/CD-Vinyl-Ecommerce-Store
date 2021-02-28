<?php
session_start();
?>

<?php

include "config.php";

	$username = $_SESSION["username"];
	$product_ID = $_POST["product_ID"];
	$order_ID = $_POST["order_ID"];
	
	$sql = "DELETE FROM orders WHERE Username='$username' AND product_ID='$product_ID' AND order_ID='$order_ID'";
	$result = $conn->query($sql);
	
	
	header("Location: orderHistory.php");
    $conn->close();

?>