<?php

if (isset($_POST["kirim"])){
  include "koneksi.php";
  $a = $_POST['regname'];
  $b = $_POST['regpass'];
  $c = $_POST['regemail'];
  $d = $_POST['regtelp'];
  $e = $_POST['regalamat'];

  //menjadikan var resultcheck hasil dari row result
  $resultCheck = mysqli_num_rows($result);

  if (empty($a) or empty($b) or empty($c) or empty($d) or empty($e)){
    echo "<script> alert('data tidak valid')</script>";
    echo "<script>window.open('registrasi.php','_self')</script>";
  }

  //jika username sudah ada di dalam table..
  else if ($resultCheck >=0){
    echo "<script>alert ('maaf username sudah ada Silakan masukan username baru')</script>";
    echo "<script>window.open('registrasi.php','_self')</script>";

  }

  else {
    $input = mysqli_query($conn, "INSERT INTO login VALUES (null, '$a','$b', '$c'
    ,'$d','$e')");

    if ($input > 0)
      echo "selamat anda berhasil Registrasi";
  }
}


 ?>
