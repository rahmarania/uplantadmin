<?php
    $title = 'Detail Pengguna';

	include 'layout/header.php';

    // ambil id pengguna dari url
    $id_user = (int)$_GET['id'];

	// tampilkan data user
	$users = select("SELECT * FROM pengguna WHERE id = $id_user")[0];

?>

    <div class="container mt-5">
        <h1>Info <?= $users['namapengguna']; ?></h1>
        <hr>

        <table class="table table-bordered table-dark table-striped">
            <tr>
                <td>Nama</td>
                <td width="50%">: <?= $users['namapengguna'];?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>: <?= $users['email'];?></td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>: <?= $users['pekerjaan'];?></td>
            </tr>

            <tr>
                <td>No. Telepon</td>
                <td>: <?= $users['telepon'];?></td>
            </tr>

            <tr>
                <td>Foto</td>
                <td>
                    <a href="img/<?= $users['gambar'];?>">
                        <img src="img/<?= $users['gambar'];?>" width="20%">
                    </a>
                </td>
            </tr>
        </table>

        <a href="pengguna.php" class="btn" style="background-color: #b7cc71">Kembali</a>
    </div>

<?php include 'layout/footer.php';?>