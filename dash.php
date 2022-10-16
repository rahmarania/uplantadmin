<?php 
 
    session_start();
     
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    // include 'layout/header.php';
    include ('fusioncharts.php');
    include 'config/app.php';

    $data_users = select("SELECT * FROM pengguna");
    $jml_tanaman = select("SELECT * FROM tanaman");
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hijaukan Indonesia dengan UPlant</title>
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <script src="js/fusioncharts.js"></script>
    <script src="js/themes/fusioncharts.theme.fusion.js"></script>
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
                                    <small></small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="logout.php">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="./img/a.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white"><?php echo "Admin " . $_SESSION['username'] ."". ""; ?></p>
                    <small class="text-white"></small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="#">
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
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-md-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Tentang Uplant</h2>
                            <p>Uplant merupakan aplikasi berbasis web untuk mempelajari berbagai macam jenis tanaman. Tambah pengetahuanmu di bidang tanaman. Dengan UPlant, Anda memiliki langkah awal untuk menghijaukan Bumi Pertiwi Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <h1 class="card-body text-end">
                                    <?= count($data_users);?>
                                </h1>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Jumlah Users</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-leaf float-start fa-3x py-auto" aria-hidden="true"></i>
                                <h1 class="card-body text-end">
                                    <?= count($jml_tanaman);?>
                                </h1>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Banyak Data Tanaman</small>
                            </div>
                        </div>
                    </div>
                </div>
                    <div style="margin-bottom: 15px;"></div>
                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                                     <?php
                                          $hostdb = "localhost";
                                          $userdb = "root";
                                          $passdb = "";
                                          $namedb = "crud";

                                          $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
                                          if ($dbhandle->connect_error) {
                                                exit("There was an error with your connection: " . $dbhandle->connect_error);
                                                }

                                          $strQuery = "SELECT *, COUNT(id) AS jml_tanaman FROM tanaman GROUP BY(jenis) ORDER BY id DESC";

                                          $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

                                          if ($result) {
                                             $arrData = array(
                                                    "chart" => array(
                                                    "caption" => "Banyak data Tanaman",
                                                    "subCaption" => "UPlant",
                                                    "showValues" => "0",
                                                    "theme" => "candy"
                                                )
                                            );

                                            $arrData["data"] = array();

                                            while ($row = mysqli_fetch_array($result)) {
                                                array_push(
                                                    $arrData["data"],
                                                    array(
                                                        "label" => $row["jenis"],
                                                        "value" => $row["jml_tanaman"]
                                                            )
                                                        );
                                                    }

                                            $jsonEncodedData = json_encode($arrData);

                                            $columnChart = new FusionCharts("bar3D", "myFirstChart", 500, 350, "tanaman", "json", $jsonEncodedData);

                                            $columnChart->render();
                                            $dbhandle->close();
                                                }
                                            ?>

                                <div id="tanaman"></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                             <?php
                                          $hostdb = "localhost";
                                          $userdb = "root";
                                          $passdb = "";
                                          $namedb = "crud";

                                          $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
                                          if ($dbhandle->connect_error) {
                                                exit("There was an error with your connection: " . $dbhandle->connect_error);
                                                }

                                          $strQuery = "SELECT *, COUNT(id) AS banyak_job FROM pengguna GROUP BY(pekerjaan) ORDER BY id DESC";

                                          $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

                                          if ($result) {
                                             $arrData = array(
                                                    "chart" => array(
                                                    "caption" => "Pekerjaan User",
                                                    "subCaption" => "UPlant",
                                                    "showValues" => "0",
                                                    "theme" => "umber"
                                                )
                                            );

                                            $arrData["data"] = array();

                                            while ($row = mysqli_fetch_array($result)) {
                                                array_push(
                                                    $arrData["data"],
                                                    array(
                                                        "label" => $row["pekerjaan"],
                                                        "value" => $row["banyak_job"]
                                                            )
                                                        );
                                                    }

                                            $jsonEncodedData = json_encode($arrData);

                                            $columnChart = new FusionCharts("pie2d", "Chartkerja", 500, 350, "pengguna", "json", $jsonEncodedData);

                                            $columnChart->render();
                                            $dbhandle->close();
                                                }
                                            ?>
                                    <div id="pengguna"></div>
                        </div>
                    </div>
                </div>
                            </div>
                              </div>
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

</body>

</html>