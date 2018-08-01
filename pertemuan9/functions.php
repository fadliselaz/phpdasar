<?php

function query($query){
  $server = "localhost"; //nama server di local hostnya
  $user = "root"; // nama usernya
  $password = ""; // pasword servernya defaultnya kosong
  $db = "phpdasar"; // nama databsenya

  //deklarasikan $conn sebagai koneksinya
  $conn = mysqli_connect($server, $user, $password, $db);

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
 ?>
