<?php
session_start();
require 'functions.php';

if (isset($_POST["login"])) {
  $us = $_POST["username"];
  $ps = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$us'");

  if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($ps, $row['password'])) {
      $_SESSION["login"] = true;
      echo "<script>
      alert('selamat datang $us');
      </script>";
      echo "<script>
      document.location.href='index.php?username=$us';
      </script>";
    }
  }
  $wrong = true;
}




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style media="screen">
      .wrong{
        visibility: hidden;
        <?php if(isset($wrong)): ?>
        visibility: visible;
        color: red;
        display: block;
        <?php endif; ?>
      }
    </style>
  </head>
  <body>
    <h3>login</h3>
     <form action="" method="post">
      <ul>
        <li>
          <input type="text" name="username" placeholder="silakan masukan username"
          prequired autocomplete="off">
        </li>
        <li>
          <input type="password" name="password" placeholder="silakan masukan password"
          required autocomplete="off">
        </li>
        <li>
          <small class="wrong">username atau password salah</small>
        </li>
        <li>
          <button type="submit" name="login">login</button>
        </li>
        <li>
          <small>
            do not have account..?
            <a href="register.php">register here..</a>
          </small>
        </li>
      </ul>
    </form>
  </body>
</html>
