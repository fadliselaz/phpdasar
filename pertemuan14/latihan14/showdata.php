<?php
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");


 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>showdata</title>
     <style media="screen">

     </style>
   </head>
   <body>
     <form action="" method="post">
       <input type="text" name="keyword" >
       <a class="button" name="cari">cari data</a>
     </form>
     <table border='1' cellspacing='0' cellpadding='10'>

             <tr>
               <th>no</th>
               <th>gambar</th>
               <th>nama</th>
               <th>nrp</th>
               <th>email</th>
              <th>jurusan</th>
              <th>action</th>
             </tr>

             <?php $no = 1; ?>
             <?php foreach($mahasiswa as $mhs): ?>
             <tr>
               <td><?php echo $no;?>                    </td>
               <td><?php echo $mhs['gambar']; ?>        </td>
               <td><?php echo $mhs['nama']; ?>          </td>
               <td><?php echo $mhs['nrp']; ?>           </td>
               <td><?php echo $mhs['email']; ?>         </td>
               <td><?php echo $mhs['jurusan']; ?>       </td>
               <td>#         </td>
               <?php $no++; ?>
             </tr>
            <?php endforeach; ?>
         </table>

   </body>
 </html>
