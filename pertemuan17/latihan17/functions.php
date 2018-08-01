<?php
$conn = mysqli_connect("localhost","root","","phpdasar") or die(mysqli_connect_error());

function register($data){
  global $conn;

  $us = strtolower(stripslashes($data['username']));
  $ps = mysqli_real_escape_string($conn, $data['password']);
  $av = upload();

  if ($_FILES["avatar"]["error"] === 4) {
    $av = "avatar.png";
  }

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$us'");

  if (mysqli_fetch_assoc($result)) {
      echo "<script>
      alert('username sudah dipakai..\\nsilakan gunakan username lain..');
      </script>";
      return false;
    }

  $ps = password_hash($ps, PASSWORD_DEFAULT);

  $query = "INSERT INTO user VALUES('','$us','$ps','$av')";

  mysqli_query($conn,$query);

  return mysqli_affected_rows($conn);

}

function upload(){
  $namaFile = $_FILES["avatar"]["name"];
  $sizeFile = $_FILES["avatar"]["size"];
  $errorFile = $_FILES["avatar"]["error"];
  $tmpFile = $_FILES["avatar"]["tmp_name"];

  if ($sizeFile > 5000000) {
    echo "<script>
    alert('ukuran file terlalu besar');
    </script>";
    return false;
  }

  $extFileValid = ['jpg','jpeg','png','giff'];
  $extFile = explode('.',$namaFile);
  $extFile = strtolower(end($extFile));

  if (!in_array($extFile, $extFileValid)) {
    echo "<script>
    alert('file tidak di izinkan...\\nakan di beri avatar default');
    </script>";
    return "avatar.png";
    return false;

  }

  if ($errorFile == 0) {
    $newFileName = uniqid();
    $newFileName .= ".";
    $newFileName .= $extFile;

    move_uploaded_file($tmpFile, "img/".$newFileName);
    return $newFileName;
  }

}

function query($query){
  global $conn;

  $result = mysqli_query($conn,$query);

  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;

}


?>
