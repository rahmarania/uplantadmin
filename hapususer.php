<?php
  include 'config/app.php';

  // ambil id dari url
  $id = (int)$_GET['id'];

  // cek apakah tombol hapus ditekan
  if(deleteuser($id) > 0){
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'pengguna.php';
          </script>";
  }else{
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'pengguna.php';
          </script>";
  }
?>