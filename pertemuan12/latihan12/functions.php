<?php
$conn = mysqli_connect("localhost","root","","mtid") or die("connection failled".mysqli_connect_error());

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

function cari($keyword){
  $query = "SELECT * FROM member WHERE nama LIKE '%$keyword%'";

  return query($query);
}

function edit($data){
  global $conn;

  $id = htmlspecialchars($_POST['id']);
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $tkp = htmlspecialchars($_POST['tkp']);
  $user = htmlspecialchars($_POST['user']);
  $password = htmlspecialchars($_POST['password']);

  $query = "UPDATE member SET
           nama = '$nama',
           email = '$email',
           tkp = '$tkp',
           user = '$user',
           password = '$password'
           WHERE id = $id;";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);

}
 ?>
