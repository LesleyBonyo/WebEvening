<?php 
	include "connect.php";
	if (isset($_GET['updateid'])) {
		// code...
	
	$id = $_GET['updateid'];
		// $_SERVER
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		// $id = $_GET['updateid'];
	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$ourmonth = mysqli_real_escape_string($connect,$_POST['regMonth']);
$sql = "UPDATE registration SET username='$username', regMonth='$ourmonth' WHERE userid=$id";
	$result = mysqli_query($connect, $sql);
	if ($result){
		echo "Updated successfully";
		//header("location:display.php");
	} else {
		echo "Not registered";
	}
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<?php 
			$months = array("January","February","March", "April");
		?>
	<h1>Update User Details</h1>
	<form action="update.php" method="post">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username">

		<label>Registration Month</label>
		<select name="regMonth">
			<option>--Select Month--</option>
			<?php 
	foreach ($months as $month){
		echo "<option value=$month>$month</option>";
		}
			?>
		
		</select>
		<input type="submit" name="update" value="update">
	</form>

</body>
</html>