<?php
require "functions.php";

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
      echo "registrasi berhasil";
    }else{
      echo "registrasi gagal";
      
    }
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>register user</title>
   </head>
   <body>
     <ul>
       <form  action="" method="post">
         <li>
           <input type="text" name="username" placeholder="masukan username"
           autocomplete="off">
         </li>
         <li>
           <input type="password" name="password" placeholder="masukan password"
           autocomplete="off">
         </li>
         <li>
           <input type="password" name="password2" placeholder="masukan konfirmasi password"
           autocomplete="off">
         </li>
         <li>
           <button type="submit" name="register">register</button>
         </li>
       </form>
     </ul>
   </body>
 </html>
