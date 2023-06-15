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
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/sidebar.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="./pelanggan">SIANTAR</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-flex justify-content-end align-items-centercollapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav gap-3">
                    <!-- <li class="nav-item">
                        <?php
                        $badge  = 2;
                        if ($badge >= 1) {
                        ?>
                            <a class="nav-link active" href="../../rentalmobil/keranjang" aria-current="page"><i class="bi bi-cart me-2"></i>Keranjang
                                <span class="ms-2 translate-middle badge rounded-pill bg-danger"><?php echo $badge ?></span>
                                <span class="visually-hidden"></span>
                            </a>
                        <?php
                        } else {
                        ?>
                            <a class="nav-link active" href="../../rentalmobil/keranjang" aria-current="page"><i class="bi bi-cart me-2"></i>Keranjang
                                <span class="ms-2 translate-middle badge rounded-pill bg-danger"></span>
                                <span class="visually-hidden"></span>
                            </a>
                        <?php
                        }
                        ?>
                    </li> -->
                    <li class="nav-item dropdown">
                        <!-- <?php
                                $sql            = "SELECT * FROM user WHERE id_user = '$id_user'";
                                $query          = mysqli_query($connection, $sql);
                                while ($q       = mysqli_fetch_array($query)) {
                                    $username   = $q['username'];
                                ?>
                            <a class="nav-link active dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-current="page">
                                <i class="bi bi-people me-2"></i><?php echo $username ?><span class="visually-hidden"></span>
                            </a>
                        <?php
                                }
                        ?> -->
                        <a class="nav-link active dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-current="page">
                            <i class="bi bi-people me-2"></i>Akun<span class="visually-hidden"></span>
                        </a>
                        <ul class="dropdown-menu bg-outline-dark">
                            <li>
                                <a class="dropdown-item" href="./logout" onclick="return confirm('Apakah yakin ingin logout?')">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>