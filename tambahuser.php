<?php
    $title = 'Tambah Pengguna';

    include 'layout/header.php';

    // cek apakah tombol submit ditekan
    if(isset($_POST['submit'])){
        // bikin fungsi tambahdata dg method post
        if(createuser($_POST) > 0){
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'pengguna.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'pengguna.php';
                  </script>";
        }
    }
?>

    <div class="container mt-5">
        <h1>Tambah Data Pengguna</h1>
        <hr>

        <!-- tambah enctype kalau ada upload file -->
        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="namapengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="namapengguna" name="namapengguna" placeholder="Masukkan nama pengguna" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email aktif" required>
          </div>

          <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan (jika belum bekerja, kosongkan kolom atau pakai pendidikan sebelumnya) </label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan perjaan" required>
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-label">No. Telepon</label>
            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon aktif" required>
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Foto (maksimal ukuran 1 MB format png, jpeg, atau jpg)</label>
            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Unggah gambar">
          </div>
          <br>

          <button type="submit" name="submit" class="btn btn-success">Tambah</button>
          <button type="submit" class="btn btn-danger"><a href="pengguna.php" class="text-light" style="text-decoration: none;">Batal</a></button>
        </form>

    </div>

<?php
    include 'layout/footer.php';
?>