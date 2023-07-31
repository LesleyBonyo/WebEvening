<?php 

	include 'connect.php';
	if (isset($_GET['updateid'])) {
	$id = $_GET['updateid'];
	$mysql = "SELECT * FROM registration WHERE userid=$id";
	$result = mysqli_query($connect,$mysql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$name = $row['username'];
		$regmonth = $row['regMonth'];
	}
		// $_SERVER
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		// $id = $_GET['updateid'];
	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$ourmonth = mysqli_real_escape_string($connect,$_POST['regMonth']);
$sql = "UPDATE registration SET username='$username', regMonth='$ourmonth' WHERE userid=$id";
	$result = mysqli_query($connect, $sql);
	if ($result){
		//echo "Updated successfully";
		header("location:display.php");
	} else {
		echo "Update failed: ".mysqli_error($connect);
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
	<form method="post">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username" value="<?php echo $name;?>">

		<label>Registration Month</label>
		<select name="regMonth">
			<option><?php echo $regmonth;?></option>
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