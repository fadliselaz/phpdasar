<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("Location:login.php");

}

$username = $_GET["username"];

$data = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$rows = mysqli_fetch_assoc($data);

$user = $rows['username'];
$img = $rows['avatar'];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      #logout{
        position: fixed;
        top: 0;
        right:0;
        margin: auto;


      }

    </style>
    <title>user page</title>
  </head>
  <body>
    <small>
      <a href="logout.php" id="logout">logout</a>
    </small>
    <h3>selamat datang <?= $user;?></h3>
    <img src="img/<?= $img;?>" alt="">
  </body>
</html>
