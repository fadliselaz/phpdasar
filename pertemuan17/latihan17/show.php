<?php
require 'functions.php';

$data = query("SELECT * FROM user ORDER BY id ASC");




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data user</title>
    <table cellspacing="0" cellpadding="10" border="1px">
      <tr>
        <th>no</th>
        <th>username</th>
        <th>avatar</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach ($data as $dt):?>
      <tr>
        <td>
          <?= $no; ?>
        </td>
        <td>
          <?= $dt['username']; ?>
        </td>
        <td>
          <img src="img/<?php echo $dt['avatar']; ?>" width="50px">
        </td>
        <?php $no++; ?>
      </tr>
    <?php endforeach; ?>
    </table>
  </head>
  <body>

  </body>
</html>
