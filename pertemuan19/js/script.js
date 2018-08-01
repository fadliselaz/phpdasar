
//ambil element yang di butihkan...
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika ketikan di input

keyword.addEventListener('keyup', function() {

  //buat object ajaxnya..
  var xhr = new XMLHttpRequest();

  //cek kesiapan ajax nya..
  xhr.onreadystatechange = function(){
    // 4 berarti sumber sudah siap..
    // 200 berarti https ok ( sudah siap juga)
    if (xhr.readyState == 4 && xhr.status == 200) {
      //innerHTML HTML nya besar semua..
      container.innerHTML = xhr.responseText;
    }
  }

    //jalankan ajaxnya
    //ajax bisa dua request GET dan POST
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
});
