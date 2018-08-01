<?php
$server = "localhost"; //nama server di local hostnya
$user = "root"; // nama usernya
$password = ""; // pasword servernya defaultnya kosong
$db = "phpdasar"; // nama databsenya

//deklarasikan $conn sebagai koneksinya
$conn = mysqli_connect($server, $user, $password, $db);

//tampilkan data mahasiswa ke index.php
function query($query){
  global $conn;
  //deklarasikan $result sebagai penampung datanya
  //$query disini variable dari SYNTAX MYSQL untuk ambil data
  //pendeklarasian $query ada di file index.php
  $result = mysqli_query($conn, $query);

  //lalu kita buat ARRAY penampung baru untuk pengulangan while
  $rows = [];

  //apabila $row sama dengan pengambilan data ASSOC dari $result
  //jangan lupa pakai WHILE bukan IF
  while($row = mysqli_fetch_assoc($result)){
    //maka array $rows sama dengan $row
    $rows [] = $row;
    //semua data pada database phpdasar - tables MAHASISWA
    //akan di tampung di $rows.. sebagai ARRAY assosiativ
    //dan akan di store ke $row sebagai variable
  }
  //lalu kita kembali mengosongkan array $rows
  //JANGAN LUPA LETAKAN DI LUAR WHILE..!!!
  return $rows;

  //maka yang akan memainkan perannya di index.php
  //adalah $row..
}

//Tambah data mahasiswa
function tambah($data){
  global $conn;
  //htmlspecialchars di gunakan untuk menangkis
  //hacker yang mencoba memasukan script HTML kedalam form
  //lihat contoh pada tabel mahasiswa 014\
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  //UPLOAD gambar VVVV
  $gambar = upload();

  //jika gambar tidak terupload
  if(!$gambar){
    //hentikan semua fungsi upload datanya
    return false;
  }

  $query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn,$query);
  //kembalikan data, ketika ada data yang berhasil di tambah..
  return mysqli_affected_rows($conn);

}
//fungsi upload
function upload(){

  //kita coba dulu menggagalkan fungsi
  //return false;
  //setelah itu kita buat Variable untuk mengambil data $_FILES
  //nama file
  $namaFile = $_FILES['gambar']['name'];

  //ukuran file
  $ukuranFile = $_FILES['gambar']['size'];

  //Code yang dihasilkan fungsi upload 0 = berhasil
  //4 = gagal
  $error = $_FILES['gambar']['error'];

  //temporary lokasi file
  $tmpFile = $_FILES['gambar']['tmp_name'];

  //sekarang kita cek apakah tidak ada gambar yang diupload
  //jika var error menghasilkan CODE 4
  //Code 4 ini adalah code ERROR dimana tidak ada file yang di upload.!!!
  if($error === 4){
    echo "<script>alert('Silakan masukan gambar..!!');</script>";
    echo "<script>document.location.href='tambah.php';</script>";

    //setelah itu kita gagalkan semua fungsi setelahnya..
    return false;
  }

  //cek apakah benar gambar yang diupload, bukan file lain..
  //kita buat dulu variable extensi file yang boleh dimasukan
  //misalkan yang kita perbolehkan hanya 3 file ber EXTENSI jpg, jpeg dan png
  $extGambarValid = ['jpg', 'jpeg', 'png'];

  //kita buat variable penampung extensi gambar..
  //delimiter string disini fungsi untuk memecah string..
  //penjelasan tentang explode(delimiter, string)
  //apabila ada sebuah string 'fadli.jpg' dan dipecah dengan
  //explode('.',$namafile)
  //maka akan menghasilkan fadli.jpg = ['fadli','jpg']
  $extGambar = explode('.', $namaFile); //hasilnya adalah>>> $extGambar = ['fadli','jpg']

  //setelah dipecah kita akan ambil array terakhir dengan menambahkan end
  //strtolower disini fungsi untuk memaksa semua extensi menjadi huruf kecil semua...
  $extGambar = strtolower(end($extGambar)); //hasilnya adalah >>>  $extGambar = 'jpg'

  //lalu kita buat funsi if in array layaknya di python in
  //jika tidak ada jpg didalam hasil masukan $extGambar di $extGambarValid
  //atau jika nilai yang diupload TIDAK menghasilkan jpeg, JPEG atau png, maka nilai FALSE
  //LETAKAN TANDA SERU ( ! ) DI DEPAN in_array !!!!!
  if(!in_array($extGambar, $extGambarValid)){
    echo "<script>alert('Silakan masukan gambar berextensi jpg, jpeg atau png..!!');</script>";
    echo "<script>document.location.href='tambah.php';</script>";

    return false;
  }

  //kita cek ukuran gambar..
  if($ukuranFile > 1000000){
    echo "<script>alert('gambar yang anda masukan terlalu besar..!!');</script>";
    return false;
  }
  //ketika lolos pengecekan, data berhasil melewati ini semua

  // kita generate nama file baru agar tidak tertiban nama file yang sama
  //misal user memasukan nama file yang sama test.jpg, file test.jpg yang sudah
  //didalam akan dihapus..!!
  //fungsi uniqid() adalah untuk generate random nama file..
  $namaFileBaru = uniqid();
  //kita tambahkan Concatenation assignment untuk menambahkan string didepan
  $namaFileBaru .= '.'; //<< hasilnya blablabla.random  (random bla bla)
  $namaFileBaru .= $extGambar; //<< hasilnya blablabla.random.jpg (jpg dari variable $extFile)

  //pindahkan file yang ada di temporary
  //kedalam folder img/
  move_uploaded_file($tmpFile, 'img/'.$namaFileBaru); // !!!! jangan terbalik slashnya ( / )

  //kembalikan $namafile
  return $namaFileBaru;

}

//hapus data mahasiswa
function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
  return mysqli_affected_rows($conn);

}

function ubah($data){
  global $conn;
  //htmlspecialchars di gunakan untuk menangkis
  //hacker yang mencoba memasukan script HTML kedalam form
  //lihat contoh pada tabel mahasiswa 014
  $id = $data["id"]; //$id tidak perlu di htmlspecialchars karena
  //dia bersifat HIDDEN ( cek pada ubah php input id)
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  //untuk fungsi upload gambar lama
  $gambarLama = $data["gambarLama"]; //<< diambil dari hidden input pada ubah.php

  //cek apakah user menginput gambar atau tidak..
  //jika user tidak menginput gambar baru..
  if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
  }
  //jika user menginput gambar baru..
  else{
    $gambar = upload();
  }


  $query = "UPDATE mahasiswa SET
            nrp = '$nrp',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id;";



  mysqli_query($conn,$query);

  //kembalikan data, ketika ada data yang berhasil di ubah..
  return mysqli_affected_rows($conn);

}

function cari($keyword){
  //LIKE disini adalah Syntaq mysql dimana fungsinya untuk
  //mencari sesuatu yang identik.
  //jadi pencariannya kita bisa lebih flexible
  //jangan lupa tambahkan symbol % sebelum setelah variable nya..
  $query = "SELECT * FROM mahasiswa WHERE
            nama LIKE '%$keyword%'";
  //kembalikan fucntion query yang dibuat diatas,
  return query($query);
}

function registrasi($data){
  global $conn;

  //strtolower untuk memaksa semua yang masuk menjadi huruf kecil
  //stripslashes untuk membersihkan dari slash
  $username = strtolower(stripslashes($data['username']));

  //mysqli_real_escape_string memungkinkan user memasukan tanda kutip ( ' )
  //kedalam password..
  //sama seperti fungsi mysqli lainnya, dia membutuhkan 2 parameter
  //yang satunya adalah koneksi ($conn) satunya data ($data['---'])
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //cek apakah username sudah dipakai apa sebelum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username';");

  //kita pakai fetch assoc untuk meraphikan
  //apabila bisa dirapihkan berarti username sudah ada didalam
  if (mysqli_fetch_assoc($result)) {
    echo "<script>alert('username sudah terpakai');</script>";
    return false;
  }


  //cek konfirmasi password..
  if ($password !== $password2) {
    echo "<script>alert('password harus sama');</script>";
    return false;
  }
  //return 1;
  //untuk cek true


  //encrypsi password
  //password_hash memiliki 2 parameter
  // - password mana yang mau diacak dan pakai metode apa..
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO user VALUES('','$username','$password')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);




}



 ?>
