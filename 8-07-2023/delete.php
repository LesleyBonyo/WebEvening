<?php
	include 'connect.php';
	$id = $_GET['deleteid'];
	$sql = "DELETE FROM registration WHERE userid=$id";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		//echo "Deleted successfully";
		header("location:display.php");
	} else{
		echo "Not successful";
	}


?>