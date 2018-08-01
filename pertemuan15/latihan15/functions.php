<?php
$conn = mysqli_connect("localhost","root","","phpdasar") or die(mysqli_connect_error());

function register($data){
  global $conn;
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "username sudah terpakai <br> silakan gunakan username lain";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  // var_dump($password); die;

  $query = "INSERT INTO user VALUES('','$username','$password')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);


}


















 ?>
