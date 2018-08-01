<!-- Kali ini kita belajar multiplee array -->
<?php
$mahasiswa = [
  ["selastio fadli",
   "0313131",
  "fadliselaz@gmail.com",
  "grafis designer"],

  ["tammy suryana",
  "0123465",
  "tammy@gmail.com",
  "teknik informatika"]

//array ini bisa di panggin dengan echo $nama_array [][]
];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>data mahasiswa</title>
   </head>
   <body>
     <h1>DAFTAR MAHASISWA</h1>
     <?php foreach($mahasiswa as $mhs): ?>
     <ul>
       <li>Nama: <?php echo "<b>", $mhs [0], "</b>" ?></li>
       <li>NIK: <?php echo "<b>", $mhs [1], "</b>" ?></li>
       <li>Eamail: <?php echo "<b>", $mhs [2], "</b>" ?></li>
       <li>Jurursan: <?php echo "<b>", $mhs [3], "</b>" ?></li>
     </ul>
   <?php endforeach; ?>




   </body>
 </html>
