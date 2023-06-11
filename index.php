<?php
require_once "./bin/config.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RentalAldy | Beranda</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css//style.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header.php" ?>
    <!-- end header -->

    <div id="profile" class="py-5 mb-4">
        <div class="container d-lg-flex flex-row justify-content-center align-items-center">
            <div class="col-lg-6 py-3">
                <div class="container d-flex flex-column justify-content-center gap-3">
                    <h1 class="text-capitalize">RentalMobil Aldy</h1>
                    <h3>Mobilitas tanpa batas, pengalaman tanpa hambatan</h3>
                    <div class="btn col-5 col-lg-4 btn-secondary">Selengkapnya</div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <img src="./img/mobil1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="service" class="py-3 mb-4 bg-light">
        <div class="container">
            <h3 class="text-center text-uppercase mt-3 mb-5">Servis Kami</h3>
            <div class="d-lg-flex flex-row justify-content-around mb-3">
                <div class="col-lg-3 text-center my-4">
                    <i class="fs-1 bi bi-rocket-takeoff"></i>
                    <h5 class="text-center mt-3">Pelayanan Cepat</h5>
                    <p class="mt-3">Layanan rental mobil yang cepat mengutamakan efisiensi dan responsibilitas pelanggan.</p>
                </div>
                <div class="col-lg-3 text-center my-4">
                    <i class="fs-1 bi bi-calendar-check"></i>
                    <h5 class="text-center mt-3">Dukungan 24/7</h5>
                    <p class="mt-3">Layanan rental mobil terpercaya akan menyediakan dukungan pelanggan yang tersedia 24 jam sehari, 7 hari seminggu.</p>
                </div>
                <div class="col-lg-3 text-center my-4">
                    <i class="fs-1 bi bi-arrows-move"></i>
                    <h5 class="text-center mt-3">Fleksibilitas</h5>
                    <p class="mt-3"> Layanan yang terpercaya akan menawarkan fleksibilitas dalam penyewaan.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>