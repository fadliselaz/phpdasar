<?php
session_start();
if (!isset($_SESSION["login"])) {
  echo "<script>
  alert('woi jagoan, \\n\\login dulu dong..');
  document.location.href= 'login.php';
  </script>";

}
require 'functions.php';

$id = $_GET["id"];
$result = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$username = $row["username"];
$avatar = $row["avatar"];
// var_dump($username); die;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>halaman web
       <?= $username;?>
     </title>
   </head>
   <body>
     <h1>halaman web</h1>
     <h3>Selamat datang <?= $username; ?></h3>
     <img src="img/<?=  $avatar?>" alt="" style="width : 300px">
     <br><br>
     <small>
       <a href="editavatar.php?id=<?= $id; ?>">
       edit avatar
       </a>
     </small>
     <br>
     <br>
     <a href="logout.php">logout</a>
   </body>
 </html>
