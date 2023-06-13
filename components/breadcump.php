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
    <!-- breadcumb -->
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../rentalmobil/pelanggan" class="<?php if ($page == "pelanggan") {
                                                                                            echo "text-dark text-decoration-none";
                                                                                        } ?>"><i class="bi bi-people-fill me-2"></i>Pelanggan</a></li>
            <li class="breadcrumb-item"><a href="../../rentalmobil/tujuan" class="<?php if ($page == "tujuan") {
                                                                                        echo "text-dark text-decoration-none";
                                                                                    } ?>"><i class="bi bi-car-front-fill me-2"></i>Tujuan</a></li>
            <li class="breadcrumb-item"><a href="../../rentalmobil/pembayaran" class="<?php if ($page == "pembayaran") {
                                                                                            echo "text-dark text-decoration-none";
                                                                                        } ?>"><i class="bi bi-wallet-fill me-2"></i>Pembayaran</a></li>
            <li class="breadcrumb-item"><a href="../../rentalmobil/status" class="<?php if ($page == "status") {
                                                                                        echo "text-dark text-decoration-none";
                                                                                    } ?>"><i class="bi bi-clipboard-check-fill me-2"></i>Status</a></li>
        </ol>
        </ol>
    </nav>
    <!-- end breadcumb -->
</body>

</html>