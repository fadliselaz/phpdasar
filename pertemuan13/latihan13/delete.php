<?php
require "functions.php";

$id = $_GET['id'];

if (delete($id) > o) {
  echo "<script> alert('data berhasil dihapus');</script>";
  echo "<script> document.location.href='showdata.php';</script>";

}else{
  echo "<script> alert('data gagal dihapus');</script>";
  echo "<script> document.location.href='showdata.php';</script>";
}


 ?>
