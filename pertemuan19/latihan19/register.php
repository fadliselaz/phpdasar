<?php
session_start();

if (isset($_SESSION["login"])) {
  // untuk mengembalikan ke halaman sebelumnya
  echo "<script>
  window.history.back();
  </script>";

}
require 'functions.php';

if (isset($_POST["register"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('username sudah terpakai');
    document.location.href= 'register.php';
    </script>";
  }

  if ($password != $password2) {
    echo "<script>
    alert('verifikasi password gagal..!!');
    document.location.href= 'register.php';
    </script>";
  }

  if (register($_POST) > 0) {

    echo "<script>
    alert('registrasi berhasil');
    document.location.href= 'login.php';
    </script>";
  }
}




?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>register</title>
     <style media="screen">
       label{
         display: block;
         margin-top: 5px;
       }
       ul{
         list-style: none;
       }
     </style>
   </head>
   <body>
     <div class="container">
       <div class="row">

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
               <input type="password" name="password" id="password" placeholder="silakan masukan password"
               pattern=".{6,}"required title="password harus lebih dari 6 karakter"
               autocomplete="off">
             </li>
             <li>
               <label for="password2">masukan verifikasi password</label>
               <input type="password" name="password2" id="password2" placeholder="verifikasi password"
               pattern=".{6,}"required
               autocomplete="off">
               <small class="validError" style="visibility: hidden;" id="error">password tidak sesuai</small>
             </li>
             <li>
               <button type="submit" name="register" >register</button>
             </li>
             <li>
               <small>
                 sudah punya akun, <br>
                 silakan <a href="login.php">login disini</a>
               </small>
             </li>
           </ul>
         </form>

       </div>
     </div>

     <script src="script.js">

     </script>

   </body>
 </html>
