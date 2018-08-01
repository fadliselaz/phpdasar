<?php
require 'functions.php';
session_start();
if (isset($_SESSION["login"])) {
  header("Location:index.php");
  exit;
}

if (isset($_POST["register"])) {
  $ps = $_POST["password"];
  $ps2 = $_POST["password2"];

    if ($ps == $ps2) {
      if (register($_POST) > 0) {
        echo "<script>
        alert('registrasi berhasil');
        </script>";
        echo "<script>
        document.location.href='login.php';
        </script>";
      }else{
        echo "<script>
        alert('registrasi gagal');
        </script>";
        echo "<script>
        document.location.href='register.php';
        </script>";
      }

    }$validError = true;

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <style media="screen">
      .validError{
        visibility: hidden;
        <?php if(isset($validError)): ?>
        visibility: visible;
        color: red;
        display: block;
        <?php endif; ?>
      }
      ul{
        list-style: none;

      }
      li{
        margin-top: 20px;
      }
      label{
        display: block;

      }
    </style>
  </head>
  <body>
    <h3>register</h3>
     <form action="" method="post" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="username">masukan username</label>
          <input type="text" name="username" id="username" placeholder="silakan masukan username"
          pattern=".{6,}"required title="username harus lebih dari 6 karakter"
          autocomplete="off">
        </li>
        <li>
          <label for="password">masukan password</label>
          <input type="password" name="password" id="password" placeholder="silakan masukan password"
          pattern=".{6,}"required title="password harus lebih dari 6 karakter"
          autocomplete="off">
          <small class="validError">password tidak sesuai</small>

        </li>
        <li>
          <label for="password2">masukan verifikasi password</label>
          <input type="password" name="password2" id="password2" placeholder="verifikasi password"
          pattern=".{6,}"required
          autocomplete="off">
          <small class="validError">password tidak sesuai</small>
        </li>
        <li>
          <label for="avatar">pilih avatar</label>
          <input type="file" name="avatar" id="avatar">
        </li>
        <li>
          <button type="submit" name="register">register</button>
        </li>
        <li>
          <small><a href="login.php">login</a></small>
        </li>
      </ul>
    </form>












  </body>
</html>
