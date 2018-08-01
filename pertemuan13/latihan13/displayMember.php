<?php
require "functions.php";
$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="all.css">
  </head>
  <body>

    <div class="row">
      <div class="col-sm-9" style="width:600px; margin:'auto';">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <img src="img/<?=$mhs['gambar'];?>" style="width:200px">
          </div>
          <div class="col-xs-4 col-sm-6">
            <h3>
              <?= $mhs['nama'];?>
            </h3>
            <p>email : <?= $mhs['email'];?></p>
            <p>nrp : <?= $mhs['nrp'];?></p>
            <p>jurusan : <?= $mhs['jurusan'];?></p>
          </div>
        </div>
      </div>
    </div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
