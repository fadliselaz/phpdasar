<?php
//mengecek apakah data sudah di isi

if (!isset ($_GET['nama'])) {
  // apabila GET belum mendapatkan data
  header ("Location: getdanpost.php");
  //header merupakan function bawaan php
  exit;
  //agar semua code di bawah tidak di eksekusi
}


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li>nama: <?php echo $_GET["nama"];?></li>
      <li>NIK: <?php echo $_GET["nik"];?></li>
      <li>email: <?php echo $_GET["email"];?></li>
      <li>jurusan: <?php echo $_GET["jurusan"];?></li>
    </ul>

    <a href="getdanpost.php">kembali</a>
  </body>
</html>
