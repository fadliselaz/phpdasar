<?php
//koneksi ke database menggunakan function mysqli_connect();
//-------------hostingnya--usernya---nama databasenya
mysqli_connect("localhost","root","","phpdasar");

//jadikan dulu koneksinya menadi VARIABLE agar mudah
//nama variable bebas, tapi biasakan pakai $conn
$conn = mysqli_connect("localhost","root","","phpdasar");

//ambil data dari database atau disebut QUERY
//dengan memakai function mysqli_query();
//$conn : function koneksi yang sudah di ubah menjadi variable
//--------------------v merupaka syntak dari MYSQL untuk mengambil data
//artinya : pilih semua data dari form mahasiswa..
//gunakan HURUF KAPITAL agar terbaca Atom
mysqli_query($conn, "SELECT * FROM login");

//untuk mengecek apakah database kita sesuai
//bisa menggunakan cara dibawah ini :
//pertama kita jadikan dulu, function query menjadi variable $result
$result = mysqli_query($conn, "SELECT * FROM login");

//lalu kita cek dengan menggunakan var_dump(); karena ini merupakan array
// var_dump($result);
// //akan tampil di browser:
// //object(mysqli_result)#4 (5)
// //{ ["current_field"]=> int(0) ["field_count"]=> int(6)
// //["lengths"]=> NULL ["num_rows"]=> int(3) ["type"]=> int(0) }
//
// //data tersebut tidak detail, hanya menunjukan benar adanya database
// //untuk lebih detail mendapatkan data,
// //kita harus mwnggunakan functio sebagai berikut:
// //mysqli_fetch_row($result);  //ini akan menggembalikan array numeric (angka)
// //mysqli_fetch_assoc(); // ini akan mengembalikan array associative
// //mysqli_fetch_array(); // ini akan menggembalikan numeric dan assosiative
// //mysqli_fetch_object();
// echo "<br><br>";
// //seperti biasa, jadikan dulu ia varibele agar bisa kita var_dump
// $fet = mysqli_fetch_row($result);
// var_dump($fet);
// // maka akan tampil di browser:
// // array(6) { [0]=> string(1) "1" [1]=> string(14) "selastio fadli"
// //   [2]=> string(3) "001" [3]=> string(20) "fadliselaz@gmail.com"
// //   [4]=> string(13) "desain grafis" [5]=> string(9) "fadli.jpg" }
// echo "<br><br>";
// //karena row ini menampilkan array numeric,
// //maka cara mencari tau data didalamnya dengan memasukan angka
// //urutan index contohnya:
// var_dump($fet[1]);
// //maka yang akan muncul adalah :
// // string(14) "selastio fadli"
// //karena nama adalah merupakan index ke 1 dari array
// echo "<br><br>";

//untuk yang beriktnya adalah
//mysqli_fetch_assoc();
//kita jadikan dia variable dulu:
// $ass = mysqli_fetch_assoc($result);
// var_dump($ass);
//akan tampil:
// array(6) { ["id"]=> string(1) "2" ["nama"]=>
//   string(11) "budi wibowo" ["nrp"]=> string(3) "002"
//   ["email"]=> string(14) "budi@gmail.com" ["jurusan"]=> string(15) "teknik komputer"
//   ["gambar"]=> string(8) "budi.jpg" }
// echo "<br><br>";
//karena row ini menampilkan array assosicativ,
//maka cara mencari tau data didalamnya dengan memasukan key array
//urutan index contohnya:
// var_dump($ass['nama']);
//maka yang akan muncul adalah :
//string(11) "budi wibowo"
//karena budi wibowo adalah merupakan value dari array nama
// echo "<br><br>";

//untuk yang beriktnya adalah
//mysqli_fetch_array(); // type function ini punya kelemahan
//karena akan menampilkan dobel data, numeric dan assosiative
// sebaiknya tidak usah dipakai
//kita jadikan dia variable dulu:

//berikutmya adalah function object
//ini juga tidak akan kita pakai karena kurang effetive
// echo"<br><br>";

//contoh diatas hanya akan menanpilkan salah satu data saja,
//untuk menampilkan semua data, kita butuh operasi pengulanagan
//misal dengan while

// while ($ass = mysqli_fetch_assoc($result)){
//   var_dump($ass);
// }

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>daftar Member</h1>
  </body>
</html>
<table border='1' cellpadding='10' cellspacing='0'>
  <tr>
    <th>no.</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th>EMAIL</th>
    <th>TELP</th>
    <th>ALAMAT</th>

  </tr>
  <?php $i = 1;?>
  <?php while($row = mysqli_fetch_assoc($result)) : ?>
  <tr>
    <td><?php echo $i; ?></td>


    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['telp']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
    <?php $i++;?>
  </tr>

  <?php endwhile; ?>
</table>
