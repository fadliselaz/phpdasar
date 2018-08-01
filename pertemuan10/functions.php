<?php
$server = "localhost"; //nama server di local hostnya
$user = "root"; // nama usernya
$password = ""; // pasword servernya defaultnya kosong
$db = "phpdasar"; // nama databsenya

//deklarasikan $conn sebagai koneksinya
$conn = mysqli_connect($server, $user, $password, $db);

function query($query){
  global $conn;


  //deklarasikan $result sebagai penampung datanya
  //$query disini variable dari SYNTAX MYSQL untuk ambil data
  //pendeklarasian $query ada di file index.php
  $result = mysqli_query($conn, $query);

  //lalu kita buat ARRAY penampung baru untuk pengulangan while
  $rows = [];

  //apabila $row sama dengan pengambilan data ASSOC dari $result
  while($row = mysqli_fetch_assoc($result)){
    //maka array $rows sama dengan $row
    $rows [] = $row;
    //semua data pada database phpdasar - tables MAHASISWA
    //akan di tampung di $rows.. sebagai ARRAY assosiativ
    //dan akan di store ke $row sebagai variable
  }
  //lalu kita kembali mengosongkan array $rows
  return $rows;

  //maka yang akan memainkan perannya di index.php
  //adalah $row..
}

function tambah($data){
  global $conn;
  //htmlspecialchars di gunakan untuk menangkis
  //hacker yang mencoba memasukan script HTML kedalam form
  //lihat contoh pada tabel mahasiswa 014
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn,$query);

  return mysqli_affected_rows($conn);

}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
  return mysqli_affected_rows($conn);

}



 ?>
