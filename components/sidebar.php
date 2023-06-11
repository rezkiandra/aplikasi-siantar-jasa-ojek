<?php
require_once "./bin/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/sidebar.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto min-vh-100 bg-dark">
                <ul>
                    <li class="my-4">
                        <a href="../../rentalmobil/pelanggan" class="nav-link px-5 text-light">
                            <i class="bi bi-house me-2 text-light"></i>Pelanggan
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="../../rentalmobil/mobil" class="nav-link px-5 text-light">
                            <i class="bi bi-speedometer me-2 text-light"></i>Kendaraan
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="../../rentalmobil/jadwal" class="nav-link px-5 text-light">
                            <i class="bi bi-table me-2 text-light"></i>Jadwal
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="../../rentalmobil/pesanan" class="nav-link px-5 text-light">
                            <i class="bi bi-cart me-2 text-light"></i>Pesanan
                        </a>
                    </li>
                    <li class="my-4">
                        <a href="../../rentalmobil/login" class="nav-link px-5 text-light">
                            <i class="bi bi-gear me-2 text-light"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>