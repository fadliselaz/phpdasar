<?php
require 'functions.php';

$id = $_GET["id"];
if (isset($_POST["ganti"])) {

  // var_dump($_FILES); die;
    if (edit($_POST) > 0) {
      echo "<script>
      alert('ganti avatar berhasil')
      </script>";
      header("Location:index.php?id=$id");
    }
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>edit avatar</title>
   </head>
   <body>
     <form class="" action="" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?= $id; ?>">

       <input type="file" name="avatar" required>
       <br><br>
       <button name="ganti">ganti avatar</button>
       <br><br>
       <a href="#" onclick="window.history.back()">kembali</a>
     </form>
   </body>
 </html>
