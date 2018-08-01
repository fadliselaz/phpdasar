<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location:login.php");
  exit;
}

require 'functions.php';

$username = $_GET['username'];

$data = query("SELECT * FROM user WHERE username = '$username'")[0];



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <small>
      <a href="logout.php" style="color:red">Logout..</a>
    </small>
    <h1 style="color : red; margin: 50px auto">You are Log in . . . </h1>
    <img src="img/<?php echo $data['avatar'] ?>" alt="avatar" width="100px">
    <p>
      username : <b><?= $data['username']; ?></b><br>
      password : <b><?= $data['password']; ?></b>
    </p>





  </body>
</html>
