<?php
require "functions.php";

$member = query("SELECT * FROM member");


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin page</title>
  </head>
  <body>
    <center>
      <p>selamat datang admin</p>
      <p>berikut ini adalah daftar Member</p>
    </center>

    <center>
    <table border="1px" cellpadding="10" cellspacing="0">
      <tr>
        <th>no</th>
        <th>name</th>
        <th>email</th>
        <th>telp</th>
        <th>tkp</th>
        <th>user</th>
        <th>password</th>
        <th>edit</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($member as $row): ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['telp']?></td>
        <td><?php echo $row['tkp']?></td>
        <td><?php echo $row['user']?></td>
        <td><?php echo $row['password']?></td>
        <td>
          <a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('yakinkah..?')">Delete</a>
        </td>

      </tr>
      <?php $i++; ?>

    <?php endforeach; ?>
    </table>
  </center>
  </body>
</html>
