<?php
// kita cek apakah user sudah login
//mulai dulu sessionnya
session_start();

//jika user belum ke halaman login,
if (!isset($_SESSION['login'])) {
  header("Location:login.php");
}

//kita me konekan ke file functions.php
require "functions.php";
//query disini merupakan FUNCTION yang dibuat di functions.php
//$mahasiswa menjadi FUNCTION QUERY yang berisi SYNTAX mysql
//ORDER ASC : adalah mengurutkan secara besar ke kecil idnya
// ORDER DESC : adalah mengurutkan secara kecil ke besar
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
// var_dump($mahasiswa);
// IF tombol cari di tekan
//mahasiswa adalah fungsi cari().. yang di buat di file functions.php
if (isset($_POST["cari"])){
  $mahasiswa = cari($_POST['keyword']);
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">Tambah daftar Mahasiswa</a>
    <br><br>
    <a href="logout.php">logout</a>

<form class="" action="" method="post">
  <!-- autofocus digunakan untuk langsung menyalakan from cari-->
  <!-- autocomplete dimatikan jadi tidak akan muncul history pncarian-->
  <input type="text" name="keyword" size="30" autofocus
  placeholder="masukan keyword pencarian" autocomplete="off"
  id="keyword">
  <button type="submit" name="cari" id="tombol-cari">cari data</button><br><br>

</form>

<div id="container">
<table border='1' cellpadding='10' cellspacing='0'>
  <tr>
    <th>no</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>nrp</th>
    <th>nama</th>
    <th>email</th>
    <th>jurusan</th>
  </tr>
  <?php $i = 1;?>
  <?php foreach ($mahasiswa as $row) : ?>
  <tr>
    <td><?php echo $i; ?></td> <!-- ini urutan untuk nomer -->
    <td>
      <a href="ubah.php?id=<?= $row['id'];?>">ubah</a> | <!-- ini urutan untuk aksi -->
      <!-- href kita arahkan ke link hapus.php untuk menghapus
      sesuai id-->
      <!-- onclick returt confirm merupakan script java script
      untuk menghasilkan alert komfirmasi-->
      <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin ?');">hapus</a>
    </td>
    <td>
      <img src="img/<?php echo $row['gambar']; ?>"  width='100px'><!-- ini urutan untuk gambar -->
    </td>
    <td><?php echo $row['nrp']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['jurusan']; ?></td>
    <?php $i++;?>
  </tr>

<?php endforeach; ?>
</table>
</div>



<script src="js/script.js"></script>



</body>
</html>
