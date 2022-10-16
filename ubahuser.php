<?php
    $title = 'Edit Data Pengguna';

    include 'layout/header.php';

    // cek apakah tombol submit ditekan
    if(isset($_POST['submit'])){
        // bikin fungsi ubah dg method post
        if(ubahuser($_POST) > 0){
            echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'pengguna.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'pengguna.php';
                  </script>";
        }
    }

    // ambil id dari url
    $id = (int)$_GET['id'];

    // query ambil data
    $users = select("SELECT * FROM pengguna where id = $id")[0];

?>


    <div class="container mt-5">
        <h1>Edit Data Pengguna</h1>
        <hr>

        <!-- tambah enctype kalau ada upload file -->
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $users['id'];?>">
          <input type="hidden" name="fotolama" value="<?= $users['gambar'];?>">

          <div class="mb-3">
            <label for="namapengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="namapengguna" name="namapengguna" placeholder="Masukkan nama pengguna" required value="<?= $users['namapengguna'];?>">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email aktif" required value="<?= $users['email'];?>">
          </div>

          <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan (jika belum bekerja, isi dengan 'belum bekerja' atau pakai pendidikan sebelumnya) </label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan perjaan" required value="<?= $users['pekerjaan'];?>">
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-label">No. Telepon</label>
            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon aktif" required value="<?= $users['telepon'];?>">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Foto (maksimal ukuran 1 MB format png, jpeg, atau jpg)</label>
            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Unggah gambar">
            <p>
              <img src="img/<?= $users['gambar']; ?>" alt="foto user" width="20%">
            </p>
          </div>
          <br>

          <button type="submit" name="submit" class="btn btn-success">Tambah</button>
          <button type="submit" class="btn btn-danger"><a href="pengguna.php" class="text-light" style="text-decoration: none;">Batal</a></button>
        </form>

    </div>

<?php
    include 'layout/footer.php';
?>