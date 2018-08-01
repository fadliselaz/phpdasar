<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POST dan GET untuk halaman itu sendiri</title>
  </head>
  <body>
    <!-- kali ini kita akan mencoba menggolah data
    dari post dan get pada halaman ini sendiri-->
    <?php if (isset($_GET['submit'])) : ?>
      <!-- Jika fungsi $_GET Submit SUDAH di tekan,
    maka, tampilkan VALUE PHP di bawah ini-->
    <h1>Selamat datang <b style="color:red;"><?php echo $_GET["nama"];?></b></h1>
  <?php endif;?>

  <form  action="" method="get">
    <!-- action kita KOSONGKAN agar data di proses
    di halaman ini-->
    masukan nama:
    <input type="text" name="nama">
    <button type="submit" name="submit">GET</button>
  </form>


  </body>
</html>
