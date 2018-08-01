<?php
require "functions.php";

$member = query("SELECT * FROM member ORDER BY id DESC");

if (isset($_POST["cari"])) {
  $member = cari($_POST['keyword']);
}
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
      <form action="" method="post">
        <input type="text" name="keyword" autofocus autocomplete="off"
        placeholder="cari data member">
        <button type="submit" name="cari">search</button>
        <br><br>
      </form>


    <table border="1px" cellpadding="10" cellspacing="0">
      <tr>
        <th>no</th>
        <th>name</th>
        <th>email</th>
        <th>telp</th>
        <th>tkp</th>
        <th>user</th>
        <th>password</th>
        <th>Delete</th>
        <th>Edit</th>
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
          <a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('yakinkah..?')">
          <button>DELETE</button></a>
        </td>
        <td>
          <a href="edit.php?id=<?php echo $row['id']?>">
          <button>E D I T</button></a>
        </td>

      </tr>
      <?php $i++; ?>

    <?php endforeach; ?>

    </table>
    <a href="register.php" target="_blank"><small>Register New Member</small></a>
  </center>
  </body>
</html>
