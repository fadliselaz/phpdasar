<?php
  require "latfunctions.php";

  if (isset($_POST['submit'])){

    if(tambah($_POST) > 0){
      echo "<script>alert('data berhasil di tambahkan');</script>";
      echo "<script>document.location.href='latindex.php';</script>";

    }
    else {
      echo "<script>alert('data gagal di tambahkan');</script>";
      echo "<script>document.location.href='latindex.php';</script>";

    }

  }


 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>tambah daftar mahasiswa</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <style media="screen">
       form{
         margin: 50px 50px;
       }
       h3{
         margin:30px;
         text-align: center;
       }
     </style>

   </head>
   <body>
     <h3>Tambah Daftar Mahasiswa</h3>
     <form class="" action="" method="post">
       <div class="form-group">
         <label for="nik">NIK Mahasiswa</label>
         <input type="text" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="masukan nik" name="nik">
       </div>
       <div class="form-group">
         <label for="name">Nama Mahasiswa</label>
         <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="masukan nama mahasiswa" name="name">
       </div>
       <div class="form-group">
         <label for="email">E-mail Mahasiswa</label>
         <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="masukan email" name="email">
       </div>
       <div class="form-group">
         <label for="study">Study</label>
         <input type="text" class="form-control" id="study" aria-describedby="emailHelp" placeholder="masukan study" name="study">
       </div>


       <button type="submit" name="submit" class="btn btn-primary">Tambah</button><br>
       <small><center><a href="latindex.php">-= data mahasiswa =-</a></small></center> 
     </form>











     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
