<?php
require_once "./bin/config.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIANTAR | Beranda</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header.php" ?>
    <!-- end header -->

    <div id="profile" class="py-5 mb-4">
        <div class="container d-lg-flex flex-row justify-content-center align-items-center">
            <div class="col-lg-6 py-3">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-capitalize mb-3">Sistem Jasa Antar</h1>
                    <h3 class="mb-3">Mobilitas tanpa batas, pengalaman tanpa hambatan</h3>
                    <div class="btn col-5 col-lg-3 btn-secondary">Selengkapnya</div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <img src="./img/mobil1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="service" class="py-3 bg-light">
        <div class="container">
            <h3 class="text-center text-uppercase mt-3 mb-2">Servis Kami</h3>
            <div class="d-lg-flex flex-row justify-content-around">
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-rocket-takeoff"></i>
                    <h5 class="text-center mt-3">Pelayanan Cepat</h5>
                    <p class="mt-3">Layanan rental mobil yang cepat mengutamakan efisiensi dan responsibilitas pelanggan.</p>
                </div>
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-calendar-check"></i>
                    <h5 class="text-center mt-3">Dukungan 24/7</h5>
                    <p class="mt-3">Layanan rental mobil terpercaya akan menyediakan dukungan pelanggan yang tersedia 24 jam sehari, 7 hari seminggu.</p>
                </div>
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-arrows-move"></i>
                    <h5 class="text-center mt-3">Fleksibilitas</h5>
                    <p class="mt-3"> Layanan yang terpercaya akan menawarkan fleksibilitas dalam penyewaan.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>