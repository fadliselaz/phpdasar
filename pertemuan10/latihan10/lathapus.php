<?php
//file ini digunakan untuk pemberitahan
//apabila data berhasil di hpus atau tidak..
require "latfunctions.php";

$id = $_GET["no"];

if (hapus($id) > 0){
  echo "<script>alert('data berhasil di hapus');
  document.location.href='latindex.php';</script>";
}
else {
  echo "<script>alert('data gagal di hapus');
  document.location.href='latindex.php';</script>";
}


 ?>
