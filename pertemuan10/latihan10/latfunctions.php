<?php
$server = "localhost"; //nama server di local hostnya
$user = "root"; // nama usernya
$password = ""; // pasword servernya defaultnya kosong
$db = "phpdasar"; // nama databsenya

//deklarasikan $conn sebagai koneksinya
$conn = mysqli_connect($server, $user, $password, $db);

  function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;

    }
    return $rows;
  }

  function tambah($data){
    global $conn;

    $nik = $data["nik"];
    $name = $data["name"];
    $email = $data["email"];
    $study = $data["study"];

    $query = "INSERT INTO latihan VALUES('','$nik','$name','$email','$study');";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
  }
  //berikut ini adalah FUNCTION hapus...
  //$id diambil dari lathapus.php..
  function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM latihan WHERE no=$id");
    return mysqli_affected_rows($conn);
  }

 ?>
