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

<link rel="stylesheet" type="text/css" href="photos.css">
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

<style>
img{
	 transition: transform .2s;
}

img:hover {
  -ms-transform: scale(2); 
  -webkit-transform: scale(2);
  transform: scale(2); 
}
</style>

</head>


<body>
	
	<form method="post" action="CategoriesNew.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		
		
		<div class="uploadPic">
			<span id="insertPhoto">Insert Your Photo</span><br><br><br>
			<form action="upload.php" method="post" enctype="multipart/form-data" >
			<input type="file" name="file"><br><br>
			<input type="submit" value="Submit"><br><br>
			</form>
		</div>
		
		<div class="box">
			
			<?php 
			include "config.php";
			$sql="SELECT * FROM photos";
				$result = $conn->query($sql);
				

			if($result->num_rows>0){
				while($row = $result -> fetch_assoc()){
					?>
					<div class="picture">
						<?php echo $row['Username'] ?><br>
						<?php echo $row['date'] ?><br><br>
						<img src="../../exam/up/<?php echo $row['file']?>" /><br><br>
						<form method="post" action="displayPhoto.php">
						<input type="hidden" name="file" value="<?php echo $row['file']?>">
						<input type="hidden" name="date" value="<?php echo $row['date']?>">
						<input type="hidden" name="username" value="<?php echo $row['Username']?>">
						<button type="submit" >Picture Details</button>
						</form>
					</div> <?php  } } ?>
			
		</div>
		
		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		
</body>


</html>