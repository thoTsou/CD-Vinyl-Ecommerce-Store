<?php
session_start();
?>

<?php 

include "config.php";

	while( true ){ //generate unique order id
		
	$orderID = mt_rand(1,100000000);
	
	$sql100 = "SELECT order_ID FROM orders WHERE order_ID='$orderID'";
	$result100 = $conn->query($sql100);
	
	if($result100->num_rows != 0){
		continue;
	}else{
		break;
	}
	
	}
	
	
	if(isset($_POST['ID1']))
	{
		$product = $_POST['ID1'];
		$quantity = $_POST['quantity1'];
		$username = $_SESSION["username"];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
	
		
		$sql1 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result1 = $conn->query($sql1);
		
	}
	
	if(isset($_POST['ID2']))
	{
		$product = $_POST['ID2'];
		$quantity = $_POST['quantity2'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		$sql2 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result2 = $conn->query($sql2);
		
	}
	
	if(isset($_POST['ID3']))
	{
		$product = $_POST['ID3'];
		$quantity = $_POST['quantity3'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql3 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result3 = $conn->query($sql3);
		
	}
	
	if(isset($_POST['ID4']))
	{
		$product = $_POST['ID4'];
		$quantity = $_POST['quantity4'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql4 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result4 = $conn->query($sql4);
		
	}
	
	if(isset($_POST['ID5']))
	{
		$product = $_POST['ID5'];
		$quantity = $_POST['quantity5'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql5 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result5 = $conn->query($sql5);
		
	}
	
	if(isset($_POST['ID6']))
	{
		$product = $_POST['ID6'];
		$quantity = $_POST['quantity6'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql6 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result6 = $conn->query($sql6);
		
	}
	
	if(isset($_POST['ID7']))
	{
		$product = $_POST['ID7'];
		$quantity = $_POST['quantity7'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql7 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result7 = $conn->query($sql7);
		
	}
	
	if(isset($_POST['ID8']))
	{
		$product = $_POST['ID8'];
		$quantity = $_POST['quantity8'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql8 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result8 = $conn->query($sql8);
		
	}
	
	if(isset($_POST['ID9']))
	{
		$product = $_POST['ID9'];
		$quantity = $_POST['quantity9'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql9 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result9 = $conn->query($sql9);
		
	}
	
	if(isset($_POST['ID10']))
	{
		$product = $_POST['ID10'];
		$quantity = $_POST['quantity10'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql10 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result10 = $conn->query($sql10);
		
	}
	
	if(isset($_POST['ID11']))
	{
		$product = $_POST['ID11'];
		$quantity = $_POST['quantity11'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql11 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result11 = $conn->query($sql11);
		
	}
	
	if(isset($_POST['ID12']))
	{
		$product = $_POST['ID12'];
		$quantity = $_POST['quantity12'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql12 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result12 = $conn->query($sql12);
		
	}
	
	if(isset($_POST['ID13']))
	{
		$product = $_POST['ID13'];
		$quantity = $_POST['quantity13'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql13 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result13 = $conn->query($sql13);
		
	}
	
	if(isset($_POST['ID14']))
	{
		$product = $_POST['ID14'];
		$quantity = $_POST['quantity14'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql14 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result14 = $conn->query($sql14);
		
	}
	
	if(isset($_POST['ID15']))
	{
		$product = $_POST['ID15'];
		$quantity = $_POST['quantity15'];
		$username = $_SESSION['username'];
		if(isset($_POST['express']))
		{
			$express = $_POST['express'];
		}else{
			$express = no;
		}
		
		
		$sql15 = "INSERT INTO orders VALUES('$orderID','$username',CURRENT_TIMESTAMP,'$product','$quantity','24.99','$express')";
		$result15 = $conn->query($sql15);
		
	}
	
	
	
	
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$address = $_POST['address'];
		$adressNum = $_POST['addressNum'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$Country = $_POST['country'];
		$phoneNum = $_POST['phoneNum'];
		$postCode = $_POST['postCode'];
		
	
		
		$sql200 = "INSERT INTO user_details VALUES('$username','$orderID','$name','$surname','$address','$adressNum','$city','$region','$Country','$phoneNum','$postCode')";
		$result1200 = $conn->query($sql200);
	
	

	header("Location: HomePage.html");
    $conn->close();
	
?>