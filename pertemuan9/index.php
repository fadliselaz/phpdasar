<?php
//kita me konekan ke file functions.php
require "functions.php";
//query disini merupakan FUNCTION yang dibuat di functions.php
//$mahasiswa menjadi FUNCTION QUERY yang berisi SYNTAX mysql
$mahasiswa = query("SELECT * FROM mahasiswa");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>daftar mahasiswa</h1>
  </body>
</html>
<table border='1' cellpadding='10' cellspacing='0'>
  <tr>
    <th>no.</th>
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
    <td><?php echo $i; ?></td>
    <td>
      <a href="#">ubah</a> |
      <a href="#">hapus</a>
    </td>
    <td>
      <img src="img/<?php echo $row['gambar']; ?>" alt="" width='50px'>
    </td>
    <td><?php echo $row['nrp']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['jurusan']; ?></td>
    <?php $i++;?>
  </tr>

<?php endforeach; ?>
</table>
