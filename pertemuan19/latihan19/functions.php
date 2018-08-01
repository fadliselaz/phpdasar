<?php
$conn = mysqli_connect("localhost","root","","phpdasar") or die(mysqli_connect_error());


function register($data){
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password = password_hash($password, PASSWORD_DEFAULT);
  // var_dump($password); die;
  $query = "INSERT INTO user VALUES('','$username','$password','avatar.png')";

  mysqli_query($conn,$query);

  return mysqli_affected_rows($conn);



}

function edit(){
  global $conn;
  $id = $_POST["id"];

  $nameFile = $_FILES["avatar"]["name"];
  $errorFile = $_FILES["avatar"]["error"];
  $tmpFile = $_FILES["avatar"]["tmp_name"];
  $sizeFile = $_FILES["avatar"]["size"];
  // var_dump($sizeFile); die;

  $typeFileValid = ["jpg","jpeg","png"];
  $extFile = explode(".", $nameFile);
  $extFile = strtolower(end($extFile));

  if ($errorFile === 4) {
    echo "<script>
    confirm('tidak jadi ganti gambar..?');
    window.history.back();
    </script>";
    return false;
  }

  if (!in_array($extFile,$typeFileValid)) {
    echo "<script>
    alert('type file tidak di izinkan, \\n\\Silakan upload file\\n\\ bertype JPG, JPEG atau PNG..!!')
    </script>";
    return false;

  }

  if ($sizeFile > 5000000) {
    echo "<script>
    alert('ukuran file terlalu besar..!')
    </script>";
    return false;
  }

  $newName = uniqid();
  $newName .= ".";
  $newName .= $extFile;

  move_uploaded_file($tmpFile, 'img/'.$newName);

  mysqli_query($conn,"UPDATE user SET
          avatar = '$newName'
          WHERE id = '$id'
          ;
  ");

  return mysqli_affected_rows($conn);



}







?>
