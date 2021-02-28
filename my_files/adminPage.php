<?php
			
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$_SESSION = array();
				session_destroy();
				header("Location: HomePage.html");
			}
			
			
		?>

<?php
session_start();
?>

<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" type="text/css" href="adminPage.css">
<script src="adminPage.js"> </script>

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
</script>
</head>


<body >
	
	<form method="post" action="adminPage.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		
		
		<div class="cardDetails" id="cardDetails">
		
			<span id="cardDet">Alter Categories</span><br><br>
			<span id="cardDet2" >Insert </span><br>
			<div id="div1"> 
			<br>
				<form action="alterCategories.php" method="post">
				Type name for NEW category: <input type="text" name="categoryName" /><br><br>
				Type category image name : <input type="text" name="categoryImage" placeholder="ex Image.jpg" /><br><br>
				<button type="submit">Submit</button>
				</form>
			</div>
			<span id="cardDet2">Update </span><br>
			<div id="div2"> 
			<br>
				<form action="alterCategories.php" method="post">
				<br>
				Type SQL UPDATE query:<br>
				<textarea name="update" rows="4" cols="50" placeholder="Query here">  </textarea><br><br>
				<button type="submit">Submit</button>
				</form>
			</div><br>
			<span id="cardDet2" >Delete </span>
			<br>
			<div id="div3"> 
			<br>
				<form action="alterCategories.php" method="post">
				Type Category name: <input type="text" name="deleteCategory" /><br><br>
				<button type="submit">Submit</button>
				</form>
			</div>
		
		</div>
		
		
		
		<div class="cardDetails" id="cardDetails">
		
			<span id="cardDet">Alter Products</span><br><br>
			<span id="cardDet2" >Insert </span><br>
			<div id="div1"> 
			<br>
				<form action="alterProducts.php" method="post">
				Type name for NEW product: <input type="text" name="productName" /><br><br>
				Type product category ID: <input type="text" name="productCatID" /><br><br>
				Type product Price: <input type="text" name="productPrice" /><br><br>
				Type product image name : <input type="text" name="productImage" placeholder="ex Image.jpg" /><br><br>
				<button type="submit">Submit</button>
				</form>
			</div>
			<span id="cardDet2">Update </span><br>
			<div id="div2"> 
			<br>
				<form action="alterProducts.php" method="post">
				<br>
				Type SQL UPDATE query:<br>
				<textarea name="updateProduct" rows="4" cols="50" placeholder="Query here">  </textarea><br><br>
				<button type="submit">Submit</button>
				</form>
			</div><br>
			<span id="cardDet2" >Delete </span>
			<br>
			<div id="div3"> 
			<br>
				<form action="alterProducts.php" method="post">
				Type Product name: <input type="text" name="deleteProduct" /><br><br>
				<button type="submit">Submit</button>
				</form>
			</div>
		
		</div>
		
		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		
</body>


</html>