<?php
session_start();
if (isset($_SESSION["login"])) {
  echo "<script>
  alert('anda sudah login..')
  window.history.back();
  </script>";
}
require 'functions.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
  // cek username apakah ada
  if (mysqli_num_rows($result) > 0) {
    // var_dump($password); die;
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      $id = $row['id'];
      echo "<script>
      alert('login berhasil');
      </script>";
      header("Location:index.php?id=$id");
    }
    $error = true;
  }

}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>login</title>
     <style media="screen">
       label{
         display: block;
       }
       ul, li{
         margin-top: 10px;
         list-style: none;
       }
       .validError{
         visibility: hidden;
         <?php if (isset($error)) :?>
         visibility: visible;

         color: red;
         <?php endif; ?>
       }
     </style>
   </head>
   <body>
     <h1>halaman login</h1>
      <form action="" method="post">
       <ul>
         <li>
           <label for="username">masukan username</label>
           <input type="text" name="username" id="username" placeholder="silakan masukan username"
           pattern=".{6,}"required title="username harus lebih dari 6 karakter"
           autocomplete="off">
         </li>
         <li>
           <label for="password">masukan password</label>
           <input type="password" name="password" id="password" placeholder="verifikasi password"
           pattern=".{6,}"required
           autocomplete="off">
           <small class="validError">password tidak sesuai</small>
         </li>
         <li>
           <button type="submit" name="login">login</button>
         </li>
         <li>
           <small>
             Belum punya akun, <br>
             silakan <a href="register.php">Register disini..</a>
           </small>
         </li>
       </ul>
     </form>
     <br>
     <small>tekan untuk tampilkan password</small>
    <button onmousedown="tampil()" onmouseup="hide()">***</button>





     <script>
       function tampil(){
         document.getElementById("password").type = "text";
       }

       function hide(){
         document.getElementById("password").type = "password";
       }

       function salah(){
         alert("username atau password salah");
       }
     </script>

   </body>
 </html>
