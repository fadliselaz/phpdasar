<?php
require 'functions.php';

if (isset ($_POST["register"])) {
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  // var_dump($password); die;
  if ($password == $password2) {
    if (register($_POST) > 0) {
      echo "<script>alert('registrasi berhasil');</script>";
      header("Location:http://mtid.ga/member-area.html");
    }
    else {
      echo "<script>alert('registrasi gagal');</script>";
    }

  }else {
    $unvalid = true;
  }

}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>registrasi</title>
     <style media="screen">
       .validError {
         visibility: hidden;
         <?php if (isset($unvalid)):?>
         visibility: visible;
         display : block;
         color : red;
         <?php endif; ?>
       }
       .dipakai {
         visibility: hidden;
         <?php if (isset($dipakai)):?>
         visibility: visible;
         display : block;
         color : red;
         <?php endif; ?>
       }
     </style>
   </head>
   <body>
      <form action="" method="post">
       <ul>
         <li>
           <input type="text" name="username" placeholder="silakan masukan username"
           pattern=".{6,}"required title="username harus lebih dari 6 karakter"
           autocomplete="off">
           <small class="dipakai">username sudah digunakan</small>
         </li>
         <li>
           <input type="password" name="password" placeholder="silakan masukan password"
           pattern=".{6,}"required title="password harus lebih dari 6 karakter"
           autocomplete="off">
         </li>
         <li>
           <input type="password" name="password2" placeholder="verifikasi password"
           pattern=".{6,}"required autocomplete="off">
           <small class="validError">password tidak sesuai</small>
         </li>
         <li>
           <button type="submit" name="register">register</button>
         </li>
       </ul>
     </form>
   </body>
 </html>
