<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan array</title>
    <style>
      .kotak{
        width: 30px;
        height: 30px;
        background-color: red;
        text-align: center;
        line-height: 30px;
        margin : 3px;
        float : left;
        transition: 0.5s;
      }
      .kotak:hover {
        transform : rotate(360deg);
        border-radius: 50%;
      }
    </style>
  </head>
  <body>
    <!-- Latihan ini enunjukan untuk merubah
    nilai yang ada di dalam html menjadi php -->
    <?php
      $nomer = ["fadli",2,3,4,5,6,7,8,9];
     ?>

     <!-- titik 2 : digunakan untuk mengganti pembuka for {  -->
    <?php foreach($nomer as $x):  ?>
      <!--Daintara syntax html ini terselip syntaxnya dari PHP,
      yang nantinya bisa di proses di php-->
      <!--             VVVVVVVVV        -->
    <div class="kotak"><?= $x; ?></div>
  <?php endforeach; ?> <!--end dipakai untuk menggantikan penutup for -->
  </body>
</html>
