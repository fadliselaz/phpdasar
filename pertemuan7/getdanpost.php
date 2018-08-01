<?php
  // var_dump($_GET); //kondisi awal var GET
  // echo "<br>";
  $_GET = [
    "nama"=> "fadli",
    "kota"=> "jakarta",
    "pekerjaan"=> "wirausaha"
  ];

  // var_dump($_GET); //melihat detail var GET
  // echo "<br>";
  // print_r($_GET); //melihat secara simple var GET
  // echo "<br>";
  // echo $_GET['nama'], $_GET['kota']; //Spesifik melihat nilai
  // echo "<br>";
  // echo $_GET['pekerjaan'];

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

        ],
        [
              "nama"=>"budi",
              "NIK"=>"jakarta",
              "email"=>"budi@gmail.com",
              "jurusan"=>"TKJ",
              "gambar"=>"spong.png"
        ],
        [
              "nama"=>"ade",
              "NIK"=>"jakarta",
              "email"=>"kuproy@gmail.com",
              "jurusan"=>"jualan",
              "gambar"=>"spong.png"
        ],

          ];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>latihan grt post</title>
   </head>

   <body>

     <h1>mahasiswa</h1>

     <ul>
       <?php foreach($mhs as $mas): ?>

       <a href="latihan2.php?nama=<?php echo $mas['nama'];?>
         &nik=<?php echo $mas['NIK'];?>
         &email=<?php echo $mas['email']?>
         &jurusan=<?php echo $mas['jurusan']?>">
         <li><b>Nama:</b><?php echo $mas['nama']; ?></li><br>
       </a>


         <?php endforeach; ?>
     </ul>






   </body>
 </html>
