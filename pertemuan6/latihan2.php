<!-- kali ini kita akan melatih untuk membuat
muti dimensi ARRAY -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan 2</title>
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

      .clear {
        clear : both;
      }
    </style>
  </head>
  <body>
    <?php
      $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
      ];
     ?>
     <?php foreach($angka as $x):  ?>
        <?php foreach($x as $y) : ?>
     <div class="kotak"><?= $y; ?></div>
        <?php endforeach;  ?>
     <div class="clear"></div>
    <?php endforeach; ?>
  </body>
</html>
