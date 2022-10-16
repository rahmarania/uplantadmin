<?php
    $title = 'Ubah Tanaman';

include 'layout/header.php';

// ambil id dari url
$id = (int)$_GET['id'];
$tanaman = SELECT("SELECT * FROM tanaman WHERE id = $id")[0];

// cek apakah tombol submit ditekan
if (isset($_POST['submit'])) {
  // bikin fungsi tambahdata dg method post
  if (ubah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'home.php';
                  </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'home.php';
                  </script>";
  }
}
?>

<div class="container mt-5">
  <h1>Ubah Data</h1>
  <hr>

  <form action="" method="post">
    <div class="mb-3">
      <input type="text" name="id" id="id" value="<?= $tanaman['id']; ?>" hidden>
      <label for="nama" class="form-label">Tanaman</label>
      <!-- kasih value dari db biar otomatis input ada isinya -->
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama tanaman" value="<?= $tanaman['nama']; ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Jenis</label>
      <select class="form-select" id="jenis" name="jenis" aria-label="Default select example" required>
        <option selected disabled>Pilih Jenis</option>
        <option value="Tanaman Hias" <?php echo ($tanaman['jenis'] === 'Tanaman Hias') ? 'selected' : '' ?>>Tanaman Hias</option>
        <option value="Tanaman Obat" <?php echo ($tanaman['jenis'] === 'Tanaman Obat') ? 'selected' : '' ?>>Tanaman Obat</option>
        <option value="Tanaman Hidroponik" <?php echo ($tanaman['jenis'] === 'Tanaman Hidroponik') ? 'selected' : '' ?>>Tanaman Hidroponik</option>
        <option value="Tanaman Buah" <?php echo ($tanaman['jenis'] === 'Tanaman Buah') ? 'selected' : '' ?>>Tanaman Buah</option>
        <option value="Tanaman Sayur" <?php echo ($tanaman['jenis'] === 'Tanaman Sayur') ? 'selected' : '' ?>>Tanaman Sayur</option>

      </select>
    </div>
    <div class="mb-3">
      <label class="form-label" for="namailmiah">Nama Ilmiah</label>
      <input type="text" class="form-control" id="namailmiah" name="namailmiah" placeholder="Masukkan nama ilmiah tanaman" value="<?= $tanaman['namailmiah']; ?>" required>
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-warning">Ubah</button>
    <button type="submit" class="btn btn-danger"><a href="home.php" class="text-light" style="text-decoration: none;">Batal</a></button>
  </form>

</div>

<?php
include 'layout/footer.php';
?>