<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bebas 2</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style media="screen">
      .kotak {
        width: 30px;
        height: 30px;
        background-color: yellow;
        text-align: center;
        line-height: 30px;
        float: left;
        margin: 3px;
        transition: 0.5s;

      }

      .kotak:hover {
        background-color: red;
        transform: rotate(360deg);
      }

      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>
    <?php
      $no = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
      ];
    ?>
    <!-- -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php foreach($no as $on) : ?>
            <?php foreach($on as $oon): ?>
              <div class="kotak"><?php echo $oon; ?> </div>
            <?php endforeach; ?>
              <div class="clear"></div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
