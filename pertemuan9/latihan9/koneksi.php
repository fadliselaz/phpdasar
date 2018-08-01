<?php

  $conn = mysqli_connect("localhost", "root", "", "phpdasar") or die("loss connect..");

  $result = mysqli_query($conn, "SELECT username FROM LOGIN");

  $row = mysqli_fetch_array($result);

 ?>
