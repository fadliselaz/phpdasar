<?php
require 'functions.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

  // var_dump($result); die;

  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
      echo "<script>
      alert('login berhasil');
      </script>";
      header("Location:http://mtid.ga/memberhome.html");
      exit;
    }
  }

$error = true;
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>login</title>
     <style media="screen">
       .error{
         visibility: hidden;

         <?php if (isset($error)): ?>
         visibility: visible;

         <?php endif; ?>
       }
     </style>
   </head>
   <body>
      <form action="" method="post">
       <ul>
         <li>
           <input type="text" name="username" placeholder="silakan masukan username"
           autocomplete="off" autofocus>
         </li>
         <li>
           <input type="password" name="password" placeholder="silakan masukan password"
           autocomplete="off">
         </li>
         <li>
           <button type="submit" name="login">login</button>
         </li>
         <li class="error">
           <img src="https://media.giphy.com/media/3oz8xLd9DJq2l2VFtu/giphy.gif" width="200px">
         </li>
       </ul>
     </form>
   </body>
 </html>
