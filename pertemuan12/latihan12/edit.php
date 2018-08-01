<?php
require "functions.php";

$id = $_GET["id"];

$mem = query("SELECT * FROM member WHERE id = $id")[0];

if (isset($_POST["submit"])){
  if (edit($_POST) > 0){
    echo "<script>alert('data berhasil di ubah..');</script>";
    echo "<document.location.href='admin.php';</script>";
  }else {
    echo "<script>alert('data GAGAL di ubah..');</script>";
    echo "<document.location.href='admin.php';</script>";
  }
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


   </head>
   <body>
     <center>
       <p>silakan isi data berikut ini</p>
       <small>mohon di isi dengan benar..</small>

     <form action="" method="post">

       <ul>
         <li>
           <input type="hidden" name="id" value="<?php echo $mem['id']?>">
         </li>
         <li>
           <label for="nama">masukan nama lengkap</label>
           <input type="text" name="nama" id="nama"
           value="<?php echo $mem['nama'] ?>" required>
         </li>
         <li>
           <label for="email">masukan email kamu</label>
           <input type="email" name="email" id="email"
           value="<?php echo $mem['email'] ?>"required>
         </li>
         <li>
           <label for="telp">masukan no telp kamu</label>
           <input type="text" name="telp" id="telp"
           value="<?php echo $mem['telp'] ?>"required>
         </li>
         <li>
           <label for="tkp">masukan tkp/lokasi kamu</label>
           <input type="text" name="tkp" id="tkp"
           value="<?php echo $mem['tkp'] ?>"required>
         </li>
         <li>
           <label for="user">masukan username</label>
           <input type="text" name="user" id="user"
           value="<?php echo $mem['user'] ?>"required>
         </li>
         <li>
           <label for="password">masukan password</label>
           <input type="password" name="password" id="password"
           value="<?php echo $mem['password'] ?>"required>
         </li>
         <button type="submit" name="submit">EDIT DATA</button>
       </ul>

     </form>








     </center>


















     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
