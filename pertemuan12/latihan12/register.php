<?php
require "functions.php";

if (isset($_POST['submit'])){

  if (tambah($_POST) > 0){
    echo "<script>alert('selamat, anda berhasil terdaftar menjadi anggota group')</script>";
    echo "<script>document.location.href='login.php'</script>";
  }else {
    echo "<script>alert('maaf, pendaftaran gagal')</script>";
    echo "<script>documnet.location.href='register.php'</script>";
  }
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register new member</title>
  </head>
  <body>
    <center>
      <p>silakan isi data berikut ini</p>
      <small>mohon di isi dengan benar..</small>

    <form action="" method="post">
      
      <ul>
        <li>
          <label for="nama">masukan nama lengkap</label>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="email">masukan email kamu</label>
          <input type="email" name="email" id="email" required>
        </li>
        <li>
          <label for="telp">masukan no telp kamu</label>
          <input type="text" name="telp" id="telp" required>
        </li>
        <li>
          <label for="tkp">masukan tkp/lokasi kamu</label>
          <input type="text" name="tkp" id="tkp" required>
        </li>
        <li>
          <label for="user">masukan username</label>
          <input type="text" name="user" id="user" required>
        </li>
        <li>
          <label for="password">masukan password</label>
          <input type="password" name="password" id="password" required>
        </li>
        <button type="submit" name="submit">D A F T A R</button>
      </ul>

    </form>








    </center>
  </body>
</html>
