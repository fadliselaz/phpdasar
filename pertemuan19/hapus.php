<?php
// kita cek apakah user sudah login
//mulai dulu sessionnya
session_start();

//jika user belum ke halaman login,
if (!isset($_SESSION['login'])) {
  header("Location:login.php");
}

require "functions.php";
//karena di halaman index memakai ?,
//berarti memakai method GET
$id = $_GET["id"];

if (hapus($id)>0) {
  echo "<script>
    alert('data berhasil dihapus..');
    document.location.href='index.php';
  </script>";
}
else {
  echo "<script>
    alert('data gagal dihapus..!!!')
    document.location.href='index.php';
  </script>";

}



 ?>
