<?php
include "koneksi.php";

$result = array(mysqli_query($conn, "SELECT * FROM login WHERE nama='fadli'"));

$nm []= mysqli_fetch_assoc($result);

var_dump($nm);

?>
