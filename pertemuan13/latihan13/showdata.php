<?php
include "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// var_dump($mahasiswa); die;
//jika tombol cari ditekan
if (isset($_POST['cari'])) {
  //maka mahasiswa akan kita isidengan..
  $key = $_POST['keyword'];
  $mahasiswa = cari($key);
}
if (isset($_POST['no'])) {
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");
}
if (isset($_POST['nama'])) {
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama ASC");
}
if (isset($_POST['nrp'])) {
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nrp ASC");
}
if (isset($_POST['email'])) {
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY email ASC");
}
if (isset($_POST['jurusan'])) {
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY jurusan ASC");
}

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
     <div class="header">
       <h3>DATA MAHASISWA</h3>
     </div>

     </div>
     <div class="kotakTable">
       <div class="cari">
         <form class="form-group" action="" method="POST">
           <label for="cari">cari data mahasiswa</label>
           <input type="text" class="form-control" id="cari" aria-describedby="emailHelp"
            name="keyword" autofocus autocomplete="off" size="30px">
           <button type="submit" name="cari" class="btn btn-primary">cari</button>
         </form>
       </div>

       <table class="table">
         <form action="" method="post">
           <tr>
             <th><button class="btn btn-primary" name="no">no</button></th>
             <th><button class="btn btn-primary" name="foto">foto</button></th>
             <th><button class="btn btn-primary" name="nama">nama</button></th>
             <th><button class="btn btn-primary" name="nrp">nrp</button></th>
             <th><button class="btn btn-primary" name="email">email</button></th>
             <th><button class="btn btn-primary" name="jurusan">jurusan</button></th>
             <th>edit</th>
           </tr>
         </form>
         <?php $i = 1; ?>
         <?php foreach($mahasiswa as $mhs):?>
         <tr>
           <td> <?php echo $i;  ?></td>
           <td>
            <img src="img/<?php echo $mhs['gambar'];?>" width="50px">
           </td>
           <td>
             <a href="displayMember.php?id=<?= $mhs['id'];?>">
             <?php echo $mhs['nama'];?></a>   
           </td>
           <td> <?php echo $mhs['nrp'];?>   </td>
           <td> <?php echo $mhs['email'];?>   </td>
           <td> <?php echo $mhs['jurusan'];?>   </td>
           <td>
             <a href="edit.php?id=<?php echo $mhs['id'];?>">
               <button type="button" name="submit" class="btn btn-primary">edit</button>
             </a><br>
             <a href="delete.php?id=<?php echo $mhs['id'];?>">
               <button type="button" name="submit" class="btn btn-danger"
               onclick="return confirm('yakin menghapus <?php echo $mhs['nama'];?>')">
               delete</button>
             </a>
           </td>
           <?php $i++; ?>
         </tr>
        <?php endforeach; ?>
       </table>
     </div>


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>
