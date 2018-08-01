<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar") or die("loss connect..");


function query($query){
  global $conn;



  $result = mysqli_query($conn, $query);


  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;

  }

  return $rows;

}


function cek($data){
  global $conn;
  $username = $_POST['ipname'];
  $password = $_POST['ippass'];

  $query = "SELECT username FROM login WHERE username LIKE $username AND password LIKE $password";
  return mysqli_affected_rows($conn);

}




// if (empty($username) or empty($password)){
//   echo "<script>alert('isi bray')</script>";
//   echo "<script>window.open('login.php','_self')</script>";
// }
//
// else if ($row['username'] == $username && $row['password'] == $password){
//   echo "login berhasil..". $row['username'];
//   echo "<script>window.open('http://www.mtid.ga', '_self')</script>";
//
// }
//
// else if ($username == "kampretlu" || $username == "kambinglu"){
//   echo "elu yang..". $username;
// }
// else {
//   echo $username . " tidak terdaftar coy..";
//   echo "<script>alert('tidak terdaftar')</script>";
//   echo "<script>window.open('login.php','_self')</script>";
//
// }
//  ?>
