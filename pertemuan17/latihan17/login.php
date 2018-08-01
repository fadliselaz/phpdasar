<?php
require 'functions.php';
session_start();

if (isset($_SESSION["login"])) {

  header("Location:index.php");

  exit;
}

if (isset($_POST["login"])) {
  $us = $_POST["username"];
  $ps = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$us'");

  if (mysqli_num_rows($result) > 0) {
      $_SESSION["login"] = true;
      $row = mysqli_fetch_assoc($result);

      if (password_verify($ps, $row['password'])) {
        $user = $row['username'];
        echo "<script>
        alert('selamat datang $user' );
        </script>";

        echo "<script>
        document.location.href='index.php?username=$user';
        </script>";

      }
  }
  $validError = true;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style media="screen">
      .validError{
        visibility: hidden;
        <?php if(isset($validError)): ?>
        visibility: visible;
        color: red;
        display: block;
        <?php endif; ?>
      }
      label{
        display: block;

      }
      li{
        margin-top: 10px;
      }
      ul{
        list-style: none;
      }
    </style>


  </head>
  <body>
    <h3>Login</h3>

     <form action="" method="post">
      <ul>
        <li>
          <label for="username">masukan username</label>
          <input type="text" name="username" id="username" placeholder="silakan masukan username"
          required autocomplete="off">
        </li>
        <li>
          <label for="password">masukan password</label>
          <input type="password" name="password" id="password" placeholder="silakan masukan password"
          required autocomplete="off">
          <small class="validError">username / password salah</small>

        </li>
        <li>
          <button type="submit" name="login">login</button>
        </li>
        <li>
          <small><a href="register.php">belum punya account..?</a></small>
        </li>
      </ul>
    </form>




  </body>
</html>
