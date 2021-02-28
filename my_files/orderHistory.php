<?php
session_start();
?>

<?php
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$_SESSION = array();
				session_destroy();
				header("Location: HomePage.html");
			}
			
			
		?>

<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="order.css">
<style>
.footer{
	text-align:center;
	background:white;
	color:red;
	height:3%;
	padding:10% 0% 0% 0%;
	margin:0% 0% 0% 0%;
}

.logOut{
			margin:0% 0% 0% 90%;
		}
		
.logOut > button{
		border-radius: 12px;
		color:white;
		background-color:#4CAF50;
		border-radius: 12px;
		border-color:#4CAF50;
		margin:3% 0% 0% 0%;
		font-size:large;
		}
		
button:hover{
			background-color: #f44336;
			border-color:#f44336;
			cursor:pointer;
		}
</style>

<script>
function makeQuestion()
{
	var answer = window.confirm("Are you sure about logging out ?");
	
	if(answer==true)
	{
		return true;
	}
	
	return false;
}

function makeQuestion2()
{
	var answer = window.confirm("Are you sure about deleting this order ?");
	
	if(answer==true)
	{
		return true;
	}
	
	return false;
}
</script>
</head>




<body>

<form method="post" action="CategoriesNew.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		

	<div id="header">Your Order History</div><br>
	
	<div class="box">
	
		
		<?php
		
			include "config.php";
			
			$username = $_SESSION["username"];
			
			$sql = "SELECT order_ID,Username,product_ID,timestamp,Quantity FROM orders WHERE Username='$username' ORDER BY order_ID ASC";
			$result = $conn->query($sql);
			
			
			if($result->num_rows == 0){  
			echo "No purchases have been made";
		}else  
		{
			
			while($row = $result -> fetch_assoc()){
				
				$productId = $row["product_ID"];
				$sql2 = "SELECT Name FROM products WHERE ID='$productId' ";
				$result2 = $conn->query($sql2);
				$row2 = $result2 -> fetch_assoc();
				
			echo "<div class='product'>
						
					<span id='orderId'>Order ID: ".$row["order_ID"]."</span><br><br>
					 ".$row["timestamp"]."<br><br>
					 Product: ".$row2['Name']." <br><br>
					 Quantity: ".$row["Quantity"]."
					 
					 <br><br>
					
					<form action='DeleteOrder.php' method='post'>
					<input class='hiddenInput' type='text' value=".$row["order_ID"]." name='order_ID'/>
					<input class='hiddenInput' type='text' value=".$row["product_ID"]." name='product_ID'/>
					<button type='submit' class='remove' onclick='return makeQuestion2()' >Remove Order</button>
					</form>
					
					</div>";
			}
		}
		
		$conn->close();
		
		?>
		
		
	
	</div>

	<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>


</body>

</html>