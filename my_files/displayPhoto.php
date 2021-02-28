
<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="displayPhoto.css">
<script>

function yellowStar(count)
{
	for( var i=1 ; i<=count ; i++)
	{
	document.getElementById("star"+i).style.color="yellow";
	}
}

function whiteStar(count)
{
	for( var i=1 ; i<=count ; i++)
	{
	document.getElementById("star"+i).style.color="white";
	}
}

function rate(rating)
{
	var rating = parseInt(rating);
	
	var input = document.createElement("input");

	input.setAttribute("type", "hidden");

	input.setAttribute("name", "rating");

	input.setAttribute("value", rating);

	document.getElementById("ratingForm").appendChild(input);
	
	document.getElementById("hidden_span").innerHTML = "Your Rating is "+rating;
	
	document.getElementById("rating_div").style.visibility = "hidden";
	
	document.getElementById("hidden_span").style.visibility = "visible";
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

<style>
.star:hover{
			background-color:#4CAF50;
			border-color:#4CAF50;
			cursor:pointer;
		}
</style>

</head>



<body>
	
	<form method="post" action="CategoriesNew.php" class="logOut">
			<button type="submit" onclick="return makeQuestion()"> Log Out </button>
		</form>
		
		
		
		<div class="details">
			<span id="header">Picture Details</span><br><br><br>
			Taken By: <?php echo $_POST['username']; ?><br>
			Date: <?php echo $_POST['date']; ?><br><br>
		</div>
		
		<div class="box">
			
			<?php 
			include "config.php";
			$file = $_POST['file'];
			$sql="SELECT * FROM photos WHERE file='$file' ";
				$result = $conn->query($sql);
				
			if($result->num_rows>0){
				while($row = $result -> fetch_assoc()){
					?>
					<div class="picture">
						<img src="../../exam/up/<?php echo $row['file']?>"/><br><br>
						<div class="details" id="relocate">
							<span id="header2">Comments</span><br><br><br>
							<div class="box">
								
									
									<?php
										$photo_ID = $row['ID'];
										
										$sql2="SELECT Username,comment FROM ratings WHERE photo_id='$photo_ID' ";
										$result2 = $conn->query($sql2);
										
										while($row2 = $result2 -> fetch_assoc()){
											echo "<div class='comment' id='comment'>
													User: ".$row2['Username']."<br>
													".$row2['comment']."<br><br>
													</div>";
										}
									?>
								
							
							</div>
						</div><br>
						<div id="averageRating">
						Average User Rating<br>
						<?php
										$photo_ID = $row['ID'];
									
										$sql3="SELECT stars FROM ratings WHERE photo_id='$photo_ID' ";
										$result3 = $conn->query($sql3);
										
										$sum=0;
										$count = 0;
										while($row3 = $result3 -> fetch_assoc()){
											$sum = $sum + $row3['stars'];
											$count++;
										}
										
										if($count !=0)
										{
											$avg = $sum / $count;
											echo (int)$avg;
										}else{
											echo "No ratings yet";
										}
									?>
						</div>
						<br>
						<form action="storeComment.php" method="post" id="ratingForm">
						Your Rating<br>
						<div id="rating_div"><button type="button" class="star" id="star1" onclick="rate(1)" onmouseover="yellowStar(1)" onmouseout="whiteStar(1)" >★</button><button type="button" class="star" id="star2" onclick="rate(2)" onmouseover="yellowStar(2)" onmouseout="whiteStar(2)">★</button><button type="button" class="star" id="star3" onclick="rate(3)" onmouseover="yellowStar(3)" onmouseout="whiteStar(3)">★</button><button type="button" class="star" id="star4" onclick="rate(4)" onmouseover="yellowStar(4)" onmouseout="whiteStar(4)">★</button><button type="button" class="star" id="star5" onclick="rate(5)" onmouseover="yellowStar(5)" onmouseout="whiteStar(5)">★</button></div>
						<span id="hidden_span"></span><br><br>
						<br>
						Leave a comment if you like<br>
						<textarea name="comment" rows="4" cols="50" placeholder="Type your comment">  </textarea> <br>
						<input type="hidden" name="photo_ID" value="<?php echo $row['ID']; ?>">
						<button type="submit" > Submit </button>
						</form>
					</div> <?php } } ?>
			
		</div>
		
		<div class="footer">
			<a href="HomePage.html" target="_self">HOME PAGE</a><br>
		   &copy; 2020 TSOUFIS THODORIS All rights reserved.
		   </div>
		
</body>


</html>