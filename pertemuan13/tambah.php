<?php
  require "functions.php";

  if (isset($_POST['submit'])) {


    if (tambah($_POST) > 0) {
      // code...
      echo "<script>
        alert('data berhasil ditambahnkan..');
        document.location.href='index.php';
      </script>";
    }
    else {
      echo "<script>
        alert('data gagal ditambahkan..!!!')
        document.location.href='index.php';
      </script>";

    }
  }


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tambah Data Mahasiswa</title>
   </head>
   <body>
     <h1>Tambah data mahasiswa</h1>
     <!-- enctype ini berfungsi untuk mengelola file yang di UPLOAD-->
     <form class="" action="" method="post" enctype="multipart/form-data">
       <ul>

         <li>
           <label for="nrp">masukan nrp mahasiswa</label>
           <input type="text" name="nrp" id="nrp">
         </li>
         <li>
           <label for="nama">masukan nama mahasiswa</label>
           <input type="text" name="nama" id="nama">
         </li>
         <li>
           <label for="email">masukan email mahasiswa</label>
           <input type="text" name="email" id="email">
         </li>
         <li>
           <label for="jurusan">masukan jurusan mahasiswa</label>
           <input type="text" name="jurusan" id="jurusan">
         </li>
         <li>
           <label for="gambar">masukan gambar mahasiswa</label>
           <input type="file" name="gambar" id="gambar"><br />
           <small>Type file hanya : jpg, jpeg atau png</small>
         </li>
         <li>
           <button type="submit" name="submit">T A M B A H</button>
         </li>

       </ul>

     </form>






   </body>
 </html>
