<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>methode POST</title>
  </head>
  <body>
    <?php
    //kali ini kita akan belajar methode post

     ?>
     <!-- kita akan ciba mengirim dengan method POST
    apabila menggunakan post, semua data akan disembunyukan
    tidak muncul di address bar -->
     <form action="latihan4.php" method="post">
       <!--kita akan mengirimkan FORM ke dalam latihan4
     dengan method POST -->
       masukan nama:
       <input type="text" name="nama">
       <button type="submit" name="submit">POST</button>
     </form>

     <!-- yang ini kita coba dengan method get
    coba perhatikan di address bar ada data yang akan muncul-->

    <form action="latihan4.php" method="get">
      <!--kita akan mengirimkan FORM ke dalam latihan4
    dengan method GET -->
      masukan nama:
      <input type="text" name="nama">
      <button type="submit" name="submit">GET</button>
    </form>

    <!--Apabila di form ACTION dan METHOD nya di kosongkan,
    maka nanti akan tersimpan otomatis di $_GET pada halaman ini-->
    <!-- Apabila ACTION kosong dan METHOD di isi dengan POST
    maka akan tersimpan di halamai ini sebagai $_POST-->





  </body>
</html>
