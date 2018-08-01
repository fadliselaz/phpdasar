<?php
//kita start sessionnya dulu
  session_start();
  require "functions.php";


  //yang pertama kita cek apakah ada cookienya..
  //apabila ada langsung kita set sessionnya..
  //kita cek juga benar ada tidak data idnya sesuai id
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn,"SELECT username FROM user WHERE
              id = $id");

    //sekarang $row berisi username saja...
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    //apabila $ key (username dari cookie) sama dengan
    //database username..
    //kasih akses session login true..
    if ($key === hash('sha256', $row['username'])) {
      $_SESSION["login"] = true;
    }
  }


  //kita cek apakah user sudah login,
  //kalau sudah login tidak perlu login lagi
  if (isset($_SESSION['login'])) {
    header("Location:index.php");
    exit;
  }


  //login system dimulai disini
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      //cek apakah benar ada username yang diinput di didalam database..
      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
      //bila ingin tau fungsi num_rows silakan var_dump($result)
      // var_dump($result); die;
      //apabila ada username yang sama maka num_rows akan menghasilkan 1

      if (mysqli_num_rows($result) === 1) {

        //sekarang kita cek apakah password ada..?
        //buat variable penampung semua data dari $username
        //$row disini akan mengatur isi dari $result sebagai assosiasi / assoc
          $row = mysqli_fetch_assoc($result);

        //selanjutnya kita decrypt password mengunakan password_verify()
        //password_verify memiliki 2 parameter,
        //1. input password yang akan di cek 2. password yang sudah di encrypsi
        if(password_verify($password, $row['password'])){

          //sebelum nya kita pakai sessionnya dulu
          $_SESSION['login'] = true;
          //jika pasword sudah terverifikasi arahkan user ke halaman yang diinginkan
          // biasanya menggunakan >>> echo "<script>document.location.href='index.php'</script>";;
          //kita belajar menggunakan header()
          //Location L nya huruf besar..

          //cek remember me nya..
          if (isset($_POST["remember"])) {
            //buat cookienya..
            //ini set cookie untuk id..
            setcookie('id',$row['id'],time() + 60);
            //ini set cookie untuk $username//tapi kita encrypsi dulu..
            //sha256 ini adalah metode hash/ acak pasword,
            //ada macam macam bentuknya..
            //hasil bisa di cek di inspect pada broser..
            //time() + 60 adalah expireted date cookie selama 60 detik..
            setcookie('key',hash('sha256', $row['username']),time() + 60);
          }


          header("Location:index.php");
          //agar berhenti pada header, gunakan exit
          exit;
        }
      }

      //jika proses sampai disini, berarti username dan password salah,
      //karena tidak nyangkut di function atas..
      //kita buat variable baru agar bisa mengatur
      //pesan di halaman htmlnya
      $error = true;
      //fungsi eror akan menyalah..
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>login</title>
   </head>
   <body>
     <center>
     <h3 style="text-align:center">login mahasiswa</h3>

     <!-- PESAN ERROR KITA BERIKAN DISINI
      apabila ada $error masuk ke halaman ini...
   -->
     <?php if (isset($error)) : ?>
       <img src="img/fadli.jpg" alt="">
       <p style="color : red; font-style:italic">username / password salah</p>
     <?php endif;  ?>
     <!-- PESAN ERROR KITA BERIKAN DISINI-->

     <form  action="" method="post">
       <ul style="list-style-type:none">
         <li>
           <input type="text" name="username" placeholder="masukan username"
           autofocus autocomplete="off">
         </li>
         <li>
           <input type="password" name="password" placeholder="masukan password"
           autocomplete="off">
         </li>
         <li>
           <input type="checkbox" name="remember" name="remember">
           <label for="remember">remember me..</label>
         </li>
         <li>
           <button type="submit" name="login">login</button>
         </li>
       </ul>
     </form>
   </center>




   </body>
 </html>
