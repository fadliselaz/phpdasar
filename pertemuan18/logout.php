<?php
session_start();
session_unset();
$_SESSION = [];
session_destroy();

//untuk menghapus cookie..
//kita buat nama cookie yang sama isinya kosong,
//tapi waktunya mundur 1jam.
setcookie('id','',time() - 3600);
setcookie("key","",time() - 3600);

header("Location:login.php");




?>
