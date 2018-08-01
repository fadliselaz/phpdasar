<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tampilan</title>

    <style>
      .kotak {
        width: 80%;
        height: 200px;
        margin: auto;
        background-color: yellow;
        text-align: center;
      }

      p{
        line-height: 200px;
      }
    </style>
  </head>
  <body>

    <?php
      $nm = $_POST["nama"];

      if ($nm == "") : ?>
      <div class="kotak">
        <p><?php
        echo "maaf anda belum mengisi..";
        echo "<meta http-equiv='refresh' content='2' url='bebas3.php'>";
        ?></p>
      </div>

      <?php endif ?>
      <?php

       ?>

     <h1><?php echo $nm ?></h1>
  </body>
</html>
