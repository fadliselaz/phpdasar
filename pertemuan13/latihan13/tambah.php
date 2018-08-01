<?php
require "functions.php";

if (isset($_POST['submit'])) {
  // var_dump($_FILES); die;
  if (tambah($_POST) > 0) {
    echo "<script> alert('data berhasil dimasukan');</script>";
    echo "<script> document.location.href='showdata.php';</script>";
  }else {
  echo "<script> alert('data gagal dimasukan');</script>";
  echo "<script> document.location.href='tambah.php';</script>";

}
}


?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>input mahasiswa baru</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
     <link rel="stylesheet" href="all.css">

   </head>
   <body>
     <div class="kotak">
       <div class="header">
         <h3>Daftar Mahasiswa Baru</h3>
       </div>
    <form action="" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label for="nama">nama</label>
        <input type="nama" class="form-control" id="nama" name="nama" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="nrp">nrp</label>
        <input type="text" class="form-control" id="nrp" name="nrp" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" name="email" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="jurusan">jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="gambar">gambar</label>
        <input type="file" class="form-control" id="gambar" name="gambar">
      </div>

      <button type="submit" class="btn btn-warning" name="submit">daftar</button>
  </form>
     </div>











     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
