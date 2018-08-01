<?php
$conn = mysqli_connect("localhost","root","","phpdasar") or die("connection error". mysqli_connect_error());

//tambah data mahasiswa..

function tambah($data){
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = upload();

  if (!$gambar) {
    return false;
  }
  $query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar');";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);

}

//>> function upload() <<<

function upload(){

  $namaFile = $_FILES['gambar']['name'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  $size = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];

  if ($size > 1000000) {
    echo "<script> alert('silakan masukan image lebih kecil');</script>";
    echo "<script> document.location.href='tambah.php';</script>";
    return false;
  }

  if ($error === 4) {
    echo "<script> alert('silakan masukan image');</script>";
    echo "<script> document.location.href='tambah.php';</script>";
    return false;
  }

  $extFileValid = ['jpg','jpeg','png'];
  $extFile = explode('.',$namaFile);
  $extFile = strtolower(end($extFile));

  if (!in_array($extFile, $extFileValid)) {
    echo "<script> alert('silakan masukan jpg, jpeg atau png saja');</script>";
    echo "<script> document.location.href='tambah.php';</script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $extFile;
  // var_dump($namaFileBaru); die;
  move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
  return $namaFileBaru;

}

//ambil data <<<<<

function query($query){
  global $conn;

  $result = mysqli_query($conn, $query);

  $rows = [];

  while($row = mysqli_fetch_assoc($result)) {
     $rows[] = $row;
  }
return $rows;

}

//fungsi delete <<<<

function delete($data){
  global $conn;

  $query = "DELETE FROM mahasiswa WHERE id = '$data'";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($key){
  $query = "SELECT * FROM mahasiswa WHERE
            nama LIKE '%$key%' OR
            email LIKE '%$key%' OR
            nrp LIKE '%$key%' OR
            jurusan LIKE '%$key%'";
//kita pakai kembali functions query()
//tapi isinya kita ganti dengan $query yang kita buat di
//fucntion ini.. (  function cari()  )
  return query($query);
}

function edit($data){
  global $conn;

  $nama = $data['nama'];
  $nrp = $data['nrp'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambarLama = $data['gambarLama'];

  $id = $data['id'];

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  }else{
    $gambar = upload();
  }

  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id;";
  // var_dump($query); die;
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}



 ?>
