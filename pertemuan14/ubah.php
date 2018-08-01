<?php
  require "functions.php";

  $id = $_GET["id"];
  //query data mahasiswa berdasarkan id
  // [0] disini merupakan index dari hasil function query()
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

  //cek apakah tombol submit sudah di tekan
  if (isset($_POST['submit'])) {

    //cek apakah data di ubah atau tidak..
    //buat functions ubah()
    if (ubah($_POST) > 0) {
      // code...
      echo "<script>
        alert('data berhasil diubah..');
        document.location.href='index.php';
      </script>";
    }
    else {
      echo "<script>
        alert('data tidak ada yang diubah..!!!')
        document.location.href='index.php';
      </script>";

    }
  }


 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>ubah Data Mahasiswa</title>
   </head>
   <body>
     <h1>Ubah data mahasiswa</h1>

     <form class="" action="" method="post" enctype="multipart/form-data">
       <ul>

           <input type="hidden" name="id" value="<?= $mhs['id']?>">
           
           <!--//hidden type untuk gambar Lama... -->
           <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']?>">


         <li>
           <label for="nrp">masukan nrp mahasiswa</label>
           <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp'] ?>">
         </li>
         <li>
           <label for="nama">masukan nama mahasiswa</label>
           <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>">
         </li>
         <li>
           <label for="email">masukan email mahasiswa</label>
           <input type="text" name="email" id="email" value="<?= $mhs['email'] ?>">
         </li>
         <li>
           <label for="jurusan">masukan jurusan mahasiswa</label>
           <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>">
         </li>
         <li>
           <label for="gambar">ubah gambar</label>
           <img src="img/<?php echo $mhs['gambar'];?>" width="150px"><br><br>
           <input type="file" name="gambar" id="gambar" >
         </li><br><br>
         <li>
           <button type="submit" name="submit">U B A H</button>
         </li>

       </ul>

     </form>






   </body>
 </html>
