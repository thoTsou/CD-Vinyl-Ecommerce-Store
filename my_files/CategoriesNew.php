<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CategoriesNew.css">
<script src="CategoriesNew.js"> </script>

<style>
.image{
	width:70%;
	height:80%;
	border-radius:12px;
}

#categoryName{
	color:white;
}

.category{
	height:100%;
	margin-top:0%;
}

#categoryName{
	font-size:x-large;
	background-color:#4CAF50;
	padding:1%;
	border-radius:12px;
}

.hiddenSpan{
	border-radius:12px;
	background-color:#696969;
	color:white;
	padding:0.5%;
	visibility:hidden;
}

button{
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
function display(ID)
{
	var span = document.getElementById(ID);
	
	span.style.visibility="visible";

}	

function hide(ID)
{
	var span = document.getElementById(ID);
	
	span.style.visibility="hidden";

}	

function makeQuestion()
{
	var answer = window.confirm("Are you sure about logging out ?");
	
	if(answer==true)
	{
		return true;
	}
	
	return false;
}
</script>



</head>


<body >
	
	<form method="post" action="CategoriesNew.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		<?php
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$_SESSION = array();
				session_destroy();
				header("Location: HomePage.html");
			}
			
			
		?>
		
		<div class="box">
			
			<?php
		
			include "config.php";
			
			$username = $_SESSION["username"];
			
			$sql = "SELECT ID,Name,image FROM products_categories";
			$result = $conn->query($sql);
			
			
			if($result->num_rows == 0){  
			echo "0 categories have been found";
		}else  
		{
			
			while($row = $result -> fetch_assoc()){
				
				
			echo "<div class='category'>
					<form method='post' action='Vinyls_2.php'>
					<input type='hidden' name='categoryID' value='".$row['ID']."' />
					<button type='submit'>".$row["Name"]."</button><br><br>
					 </form>
					 <img class='image' src='".$row['image']."' onmouseover=".'display("'.$row["ID"].'")'." onmouseout=".'hide("'.$row["ID"].'")'."  />
					 
					 <br><br>
					 <span class='hiddenSpan' id='".$row["ID"]."'> Check Our Awesome ".$row["Name"]." Collection </span>
					
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