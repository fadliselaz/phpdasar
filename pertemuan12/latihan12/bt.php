<?php
require "functions.php";

if (isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['password'];
  if ($user == "admin" && $pass = "mtid"){
    echo "<script>alert('login success');</script>";
    echo "<script>document.location.href='regadmin.php'</script>";
  }else {
    echo "<script>alert('login failled');</script>";
    echo "<script>document.location.href='admin.php'</script>";
  }
}


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style media="screen">
      .kotak {
        margin : 30px;
        padding: 20px;
      }
    </style>

  </head>
  <body>
    <center>
      <h3>Login Admin</h3>
    </center>
    <div class="kotak">
      <form action="" method="POST">


        <div class="form-group">
          <label for="user">masukan username </label>
          <input type="text" class="form-control" id="user" name="user" require>
        </div>

        <div class="form-group">
          <label for="password">masukan password</label>
          <input type="password" class="form-control" id="password" name="password" require>
        </div>



        <button type="submit" class="btn btn-primary" name="submit">Login Admin Area</button>
      </form>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
