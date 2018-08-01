<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas latihan</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style media="screen">
      body {
        font-family: 'Ubuntu', sans-serif;
      }
      .container {
        background-color: yellow;
        padding: 10px;
        margin: 10px auto;
        width: 80%;
        vertical-align: middle;
      }

      h1 {
        text-align: center;
      }



    </style>
  </head>
  <body>
    <?php
      $dataKaryawan = [
        [
          "nama"=>"selastio fadli",
          "id"=>"ID0000011",
          "masuk"=>"2012",
          "jabatan"=>"vm",
          "email"=>"fadliselaz@gmail.com",
          "foto"=>"fadli.jpg"
        ],
        [
          "nama"=>"cecep hermawan",
          "id"=>"ID0000035",
          "masuk"=>"2014",
          "jabatan"=>"vm",
          "email"=>"cecep@gmail.com",
          "foto"=>"fadli.jpg"
        ],
        [
          "nama"=>"vita amalia",
          "id"=>"ID0000013",
          "masuk"=>"2013",
          "jabatan"=>"vm",
          "email"=>"vitamalia@gmail.com",
          "foto"=>"fadli.jpg"
        ],
      ];
     ?>

     <h1>Data karyawan</h1>
     <?php foreach($dataKaryawan as $dk) : ?>
       <div class="container">
         <ul>
           <li><img src="img/<?php $dk["foto"];?>"</li>
           <li><b>nama</b> :<?php echo $dk["nama"]; ?></li>
           <li><b>id</b>   :<?php echo $dk["id"]; ?></li>
           <li><b>masuk</b> :<?php echo $dk["masuk"]; ?></li>
           <li><b>jabatan</b>: <?php echo $dk["jabatan"]; ?></li>
           <li><b>email</b> : <?php echo $dk["email"]; ?></li>
         </ul>

       </div>

   <?php endforeach; ?>
  </body>
</html>
