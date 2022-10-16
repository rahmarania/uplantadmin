<?php 
 
    session_start();
     
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $title = 'Data Tanaman';
    // include 'layout/header.php';
    include 'config/app.php';

    $data_barang = select("SELECT * FROM tanaman ORDER BY id DESC");
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tanaman</title>
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#"><img src="img/logo2.png" width="60%"></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">1</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0"><?php echo "Selamat Datang, " . $_SESSION['username'] ."!". ""; ?></p>
                                        <span class="content-text">Cek perkembangan web UPlant
                                        .</span>
                                    </div>
                                </div>
                            </a>
                            <a class="" href="#">
                            </a>
                            <a class="" href="#">
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="img/a.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="img/a.png" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1"><?php echo "Admin " . $_SESSION['username'] ."". ""; ?></p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Pengaturan
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="logout.php">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="img/a.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white"><?php echo "Admin " . $_SESSION['username'] ."". ""; ?></p>
                    <small class="text-white"></small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="dash.php">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="home.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Data Tanaman
                    </a>
                    <a class="nav-link px-3" href="pengguna.php">
                        <i class="fa fa-id-card fa-lg box-icon" aria-hidden="true"></i>Data Pengguna
                    </a>
                    <div style="margin-top: 80px"></div>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="logout.php">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>Keluar
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <div class="card-body text-center">
                                    <a href="tambah.php" class="btn btn-outline-success mb-1 mb-1 mt-1"> <div style="padding: 10px; width: 100%">Tambah</div></a>
                                </div>
                            </div>
                                <div style="margin-top:20px"></div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Tambah data tanaman</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-9">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <div class="card-body text-end">
                                    <?php include ("aksi.php");?>

                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div>
                                            <input type="file" class="form-control" id="formFile" name="filexls">
                                            <div>
                                                <input type="submit" name="submit" class="btn btn-success" value="Upload"  style="margin-top: 8px;">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Upload file (format .xls atau .xlsx)</small>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="d-block bg-white rounded shadow p-3">
                            <table class="table table-bordered table-dark table-striped" id="idtable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tanaman</th>
                                        <th>Jenis</th>
                                        <th>Nama Ilmiah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_barang as $tanaman) : ?>
                                    <tr>
                                        <td><?= $no++;?></td>
                                        <td><?= $tanaman['nama'];?></td>
                                        <td><?= $tanaman['jenis'];?></td>
                                        <td><?= $tanaman['namailmiah'];?></td>
                                        <td width="20%">
                                            <a href="ubah.php?id=<?= $tanaman['id'];?>" class="btn btn-warning">Ubah</a>
                                            <a href="hapus.php?id=<?= $tanaman['id'];?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="js/jquery.js"></script>
    <script src="assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="js/index.js"></script>

<?php
    include 'layout/footer.php';
?>