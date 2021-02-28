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
<link rel="stylesheet" type="text/css" href="adminHome.css">
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
	
	<form method="post" action="adminHome.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		
		
		<div class="cardDetails" id="cardDetails">
		<form method="post" action="redirectToAdminPage.php" id="finishForm2" >
			<span id="cardDet">Admin Credentials</span><br><br>
			Username: <input type="text" name="adminName" /><br><br>
			Passsword: <input type="password" name="adminPassword" />
			<br><br>
			<button id="cardDetButton" >Submit</button>
		</form>
		</div>
		
		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		
</body>


</html>