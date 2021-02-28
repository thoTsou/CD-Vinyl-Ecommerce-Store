<?php
session_start();
?>

<?php

include "config.php";
$name = $_FILES['file']['name'];
$location = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$folder = "C:/xampp/htdocs/exam/up/";

move_uploaded_file($location,$folder.$name);

$username = $_SESSION["username"];

if(isset ($name))
{
	$sql="INSERT INTO photos (Username,date,file,size,type) VALUES('$username',CURRENT_TIMESTAMP,'$name','$type','$size')";
	$result = $conn->query($sql);
}

$conn->close();

echo "success";

header("Location: photos.php");

?>