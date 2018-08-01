<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>assosiatif array</title>
    <style>
      ul {
        style : none;
      }



    </style>
  </head>
  <body>
    <!-- kali ini kita akan belajar assosiatif ARRAY
      pennggunaannya bisa dengan memakai =>

    -->
    <?php
      $mhs = [
        [
              "nama"=>"fadli",
              "NIK"=>"jakarta",
              "email"=>"fadliselaz@gmail.com",
              "jurusan"=>"desain",
              "gambar"=>"spong.png"
        ],
        [
              "nama"=>"tammy",
              "NIK"=>"sukabumi",
              "email"=>"tammy@gmail.com",
              "jurusan"=>"web design",
              "gambar"=>"spong.png"

              // //apabila mau menambahkan array lagi bisa juga
              // //misalnya VVV
              // "nilai"=>[90,100,90]

        ]

          ];

    echo $mhs[1]["nama"];
    echo "<br>";
    //untuk menampilkan array di dalam array bisa mennunakan cara berikut ini
    // echo $mhs[1]["nilai"][0];

     ?>

  <h1>DAFTAR MAHASISWA</h1>
     <?php foreach($mhs as $masiwa): ?>
     <ul>
      <li>
          <img src="img/<?php echo $masiwa["gambar"];   ?>">
      </li>
       <li>Nama: <?php echo "<b>", $masiwa ["nama"], "</b>" ?></li>
       <li>NIK: <?php echo "<b>", $masiwa ["NIK"], "</b>" ?></li>
       <li>Email: <?php echo "<b>", $masiwa ["email"], "</b>" ?></li>
       <li>Jurursan: <?php echo "<b>", $masiwa ["jurusan"], "</b>" ?></li>
     </ul>
   <?php endforeach; ?>





  </body>
</html>
