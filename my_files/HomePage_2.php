<?php
session_start();
?>

<!DOCTYPE html>
<html>

	<head>
		<title>WelcomePage</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="p1.css">
		
		<style>
		
		#popUp{
			color:white;
			text-align:center;
			height:58%;
			width:40%;
			margin:0% 0% 0% 27%;
			border-style:solid;
			border-color:#f44336;
			border-radius: 25px;
			background-color:#F5FFFA;
			}
			
			
			 .GoToRegisterPage{
				visibility:hidden;
			 }
			
			.newB{
				  background-color: #4CAF50; /* Green */
				  border: none;
				  color: white;
				  padding: 4%;
				  text-align: center;
				  text-decoration: none;
				  display: inline-block;
				  font-size: 100%;
				  margin: 0.5% 0.5%;
				  cursor: pointer;
				  border-radius: 12px;
			}
			
			.newB:hover {
				background-color: #f44336; 
			}
			
			#echoUser{
				font-size:large;
				background-color:#f44336;
				border-radius: 10px;
				padding:1%;
			}
			
			.background>* {
				filter: blur(6px);
				}

				.disableBlur {
					filter: blur(0);
				}
			
			
		</style>
		
    </head>
	
	<body>
	
	<div class="background">
	
		<div class="information">
		This is a place where you can buy your favourite CD albums and Vinyls<br>
		Support your favourite artists ...<br>
		KEEP MUSIC ALIVE
		</div>
		
		
		<div class="login">
			<br>
			<form action="home.php" method="post" id="LogInForm">
				Username: <input type="text" name="username" required> Password: <input type="password" name="password" required> <br><br>
				 <span id="LogInSpan"> <input type="submit" value="Log In">  </span>
			</form>		
		</div>
		
		<div id="popUp" class="disableBlur">
		<br>
		<span id="echoUser" >  <?php echo "Welcome ".$_SESSION["username"]; ?>  </span> <br><br>
		<a href="CategoriesNew.php"><button class="newB">Make purchase</button></a><br><br><br>
		<a href="orderHistory.php"><button class="newB">Purchase History</button></a><br><br><br>
		<a href="photos.php"><button class="newB">Go To Photos</button></a><br><br><br>
		</div>
		
		<div class="GoToRegisterPage">
			<form action="RegisterPage.html">
				Don't you have an account ?<br> 
				Create one !<br>
				<span id="RegisterSpan"> <input type="submit" value="Register Now"> </span>
			</form>
		</div>
		
		
		   
		</div>
	

		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		   
		</body>

</html>