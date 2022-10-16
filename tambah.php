<?php
    $title = 'Tambah Tanaman';

    include 'layout/header.php';

    // cek apakah tombol submit ditekan
    if(isset($_POST['submit'])){
        // bikin fungsi tambahdata dg method post
        if(tambahdata($_POST) > 0){
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'home.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'home.php';
                  </script>";
        }
    }
?>

    <div class="container mt-5">
        <h1>Tambah Data Baru</h1>
        <hr>

        <form action="" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Tanaman</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama tanaman" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis</label>
            <select class="form-select" name="jenis" required>
                <option value="" selected disabled>Pilih Jenis</option>
                <option value="1">Tanaman Hias</option>
                <option value="2">Tanaman Obat</option>
                <option value="3">Tanaman Hidroponik</option>
                <option value="3">Tanaman Buah</option>
                <option value="3">Tanaman Sayur</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="namailmiah">Nama Ilmiah</label>
            <input type="text" class="form-control" id="namailmiah" name="namailmiah" placeholder="Masukkan nama ilmiah tanaman" required>
          </div>
          <button type="submit" name="submit" class="btn btn-success">Tambah</button>
          <button type="submit" class="btn btn-danger"><a href="home.php" class="text-light" style="text-decoration: none;">Batal</a></button>
        </form>

    </div>

<?php
    include 'layout/footer.php';
?>