<?php
include 'config/app.php';

// ambil id dari url
$id = (int)$_GET['id'];

// cek apakah tombol hapus ditekan
if(delete($id) > 0){
  echo "<script>
          alert('Data berhasil dihapus');
          document.location.href = 'home.php';
        </script>";
}else{
  echo "<script>
          alert('Data gagal dihapus');
          document.location.href = 'home.php';
        </script>";
}
?>