<?php
$conn = mysqli_connect("localhost","root","","mtid");

function query($query){
  global $conn;

  $result = mysqli_query($conn, $query);

  $lemari = [];

  while($laci = mysqli_fetch_assoc($result)){
    $lemari[] = $laci;
  }
  return $lemari; //inget ini ada di luar while
}

function tambah($data){
  global $conn;

  $nama = $data['nama'];
  $email = $data['email'];
  $telp = $data['telp'];
  $tkp = $data['tkp'];
  $user = $data['user'];
  $password = $data['password'];

  mysqli_query($conn, "INSERT INTO member VALUES(
    '','$nama','$email','$telp','$tkp','$user','$password');");

  return mysqli_affected_rows($conn);

}

function hapus($data){
  global $conn;

  $query = "DELETE FROM member WHERE id=$data;";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
 ?>
