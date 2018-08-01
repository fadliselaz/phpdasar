<?php
$conn = mysqli_connect("localhost","root","","phpdasar") or die(mysqli_connect_error());

function register($data){
  global $conn;

  $usr = strtolower(stripslashes($data['username']));
  $pas = mysqli_real_escape_string($conn, $data['password']);
  $av = upload();

  if ($_FILES["avatar"]["error"] === 4) {
    echo "<script>
    alert('anda belum memasukan avatar..')
    </script>";
  }

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$usr'");

  if (mysqli_fetch_assoc($result)) {
      echo "<script>
      alert('username sudah dipakai','<br>','silakan gunakan','<br>','username lain...');
      </script>";
      return false;
  }

  $pas = password_hash($pas, PASSWORD_DEFAULT);

  $query = "INSERT INTO user VALUES('','$usr','$pas','$av')";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

function upload(){
  $name = $_FILES["avatar"]["name"];
  $size = $_FILES["avatar"]["size"];
  $error = $_FILES["avatar"]["error"];
  $tmp = $_FILES["avatar"]["tmp_name"];

  if ($size > 5000000) {
    echo "<script>
    alert('file too big..!');
    </script>";
    return false;
  }

  $extValid = ['jpeg','jpg','png','giff'];
  $ext = explode('.',$name);
  $ext = strtolower(end($ext));

  if (!in_array($ext, $extValid)) {
    echo "<script>
    alert('file not allowed..!!');
    </script>";
    return false;
  }

  $newFile = uniqid();
  $newFile .= ".";
  $newFile .= $ext;

  move_uploaded_file($tmp, "img/".$newFile);
  return $newFile;


}

function query($query){
global $conn;

$result = mysqli_query($conn,$query);

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
  }
  return $rows; 

}








?>
