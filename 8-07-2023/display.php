
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<a href="signup.php">Register</a>
	<h1 class="text-center">Registered Users</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Registration Month</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
	include 'connect.php';
	$sql = "SELECT * FROM registration";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['userid'];
			$username = $row['username'];
			$regmonth = $row['regMonth'];
			echo "<tr>
      			<th scope='row'>$id</th>
      			<td>$username</td>
      			<td>$regmonth</td>
      <td><button><a href='update.php?updateid=$id'>Update</a></button></td>

      <td><button><a href='delete.php?deleteid=$id'>Delete</a></button></td>
    			</tr>";
		}
		// $row = mysqli_fetch_assoc($result);
		// $username = $row['username'];
		// $regmonth = $row['regMonth'];
		// echo $username;
		// echo $regmonth;
	}




?>
  	<!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
-->
  </tbody>
</table>
</body>
</html>