<?php

$conn = mysqli_connect("localhost","root","","phpdasar")
        or die('connection gagal'.mysqli_connect_error());

function query($data){ //isi datri $query adalah
  // "SELECT * FROM mahasiswa ORDER BY id ASC"
global $conn;

$result = mysqli_query($conn, $data);

$kardus = [];

while ($lemari = mysqli_fetch_assoc($result)){
    $kardus[] = $lemari;
  }
return $kardus;

}

function registrasi($data){
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if ($password != $password2) {
    echo "password tidak verified ";
    return false;
  }

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "username sudah terpakai.. ";
    echo "<br>silakan gunakan username lain.. ";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO user VALUES('','$username','$password')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

































 ?>
