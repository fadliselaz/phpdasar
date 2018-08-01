<?php
  include "latfunctions.php";

  $mahasiswa = query("SELECT * FROM latihan");
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
    <style media="screen">
      .kotakTable{
        width: auto;
        padding: 20px;
        border-style: solid;
        border-radius: 10px;
        border-width: 1px;
        margin-top: 30px;
        margin-right: 30px;
        margin-left: 30px;

      }
      table{
        font-size: 13px;
      }
      h3{
        text-align: center;
        margin: auto;
        margin-bottom: 20px;

      }
      #bawah{
        margin:auto;
      }
    </style>

  </head>
  <body>
    <div class="kotakTable">
      <h3>Daftar Mahasiswa MTID</h3>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">edit</th>
          <th scope="col">nik</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">study</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
          <th scope="row"><?php echo $i; ?>   </th>
          <td>
            <a href="#"><small>EDIT | </small></a>
            <a href="lathapus.php?no=<?php echo $row['no']; ?>" onclick="return confirm('yakin..?')"> <small>DELETE</small></a>
          </td>
          <td><?php echo $row['nik']; ?>  </td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['study']; ?></td>
          <?php $i++; ?>
        </tr>

      <?php endforeach; ?>
      </tbody>

      </table>
      <small id="bawah">
          <a href="lattambah.php">Tambah Daftar Mahasiswa | </a>
          <a href="latindex.php">Home</a>
      </small>

    </div>













    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
