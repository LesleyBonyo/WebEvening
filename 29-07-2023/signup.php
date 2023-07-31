<?php 
  include 'connect.php';
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email = $_POST['email'];
    //encrypt password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(email,password) VALUES('$email','$password')";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      //echo "signup successfully";
      header("location:login.php");
    } else{
      echo "Not successful";
    }
  }






?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">Signup</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Signup</button>
  <div>Already have an account?<a href="login.php">Login</a></div>
</form>
    </div>
  </body>
</html>