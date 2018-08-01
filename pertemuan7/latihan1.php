<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bebas</title>
  </head>
  <body>
    <!-- mengenal variable global dan lokal,
    variabel lokal tidak dapat terhubung kedalam function,
    untuk menghubungkan variable lokal ke dalam function
    kita harus memberikan key wor global; -->

    <?php
      $nm = "fadli";
      echo $nm;

      function nama(){
        global $nm; //ini untuk menglobalkan semua variable
        echo $nm;
      };
      //ini akan menghsilkan error apabila globar kenya dihapus
      //karena pada dasarnya function membutuhkan deklarasi variable <ol class="breadcrumb">
      //didalamnya


     ?>

  </body>
</html>
