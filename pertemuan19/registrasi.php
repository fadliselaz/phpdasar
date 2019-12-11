<?php
require "functions.php";

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>alert('user baru berhasil ditambahkan');</script>";
  }else{
    echo mysqli_error($conn);
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>registrasi mahasiswa</title>
     <style>
       label{
         display: block;
       }

    
     </style>
   </head>
   <body>
     <h3>Registrasi mahasiswa</h3>
     <form action="" method="post">
       <ul type='none'>
         <li>
           <label for="username">masukan username</label>
           <input type="text" name="username" autocomplete="off" required>
         </li>
         <li>
           <label for="password">masukan password</label>
           <input type="password" name="password" id="password" autocomplete="off" required>
         </li>
         <li>
           <label for="password2">konfirmasi password</label>
           <input type="password" name="password2" id="password2" autocomplete="off" required>
           
         </li>
         <li>
           <button type="submit" name="register">register</button>
         </li>
       </ul>

     </form>
      <a href="login">login</a>
      <button class="show" onclick="{show()}">show</button>
      <button class="hide" onclick="{hide()}">hide</button>

<script>
  var show = ()=>{
    var ip = document.getElementById('password')
    var ip2 = document.getElementById('password2')
    ip.setAttribute('type','text')
    ip2.setAttribute('type','text')
  }

  var hide = ()=>{
    var ip = document.getElementById('password')
    var ip2 = document.getElementById('password2')
    ip.setAttribute('type','password')
    ip2.setAttribute('type','password')
  }



</script>



   </body>
 </html>
