<?php
require 'functions.php';

if (isset($_POST["register"])) {
  // var_dump($_FILES); die;
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
      }else {
        echo "<script>
        alert('registrasi gagal');
        </script>";
        echo "<script>
        document.location.href='register.php';
        </script>";
      }
    }else{
      $validError = true;
    }

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

        <?php if (isset($validError)):?>
        visibility: visible;
        color: red;
        display: block;
        <?php endif; ?>
      }
    </style>
  </head>
  <body>
    <small><a href="login.php">have account..?<br> login here</a> <small>

    <h3>register new username</h3>
     <form action="" method="post" enctype="multipart/form-data">
      <ul>
        <li>
          <input type="text" name="username" placeholder="silakan masukan username"
          pattern=".{6,}"required title="username harus lebih dari 6 karakter"
          autocomplete="off">
        </li>
        <li>
          <input type="password" name="password" placeholder="silakan masukan password"
          pattern=".{6,}"required title="password harus lebih dari 6 karakter"
          autocomplete="off">
        </li>
        <li>
          <input type="password" name="password2" placeholder="verifikasi password"
          pattern=".{6,}"required
          autocomplete="off">
          <small class="validError">password tidak sesuai</small>
        </li>
        <li>
          <input type="file" name="avatar">
        </li>

        <li>
          <button type="submit" name="register">register</button>
        </li>

      </ul>
    </form>
  </body>
</html>
