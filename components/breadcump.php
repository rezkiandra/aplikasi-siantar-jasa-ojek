<?php
require_once "./bin/config.php";
require_once "./bin/query.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/sidebar.css">

    <!-- BS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <?php
                if (isset($_GET['id_pelanggan'])) {
                ?>
                    <a href="./pelanggan?id_pelanggan=<?php echo $id_pelanggan ?>" class="text-uppercase <?php if ($page == "pelanggan") {
                                                                                                                echo "text-dark text-decoration-none";
                                                                                                            } ?>"><i class="bi bi-people-fill me-2"></i>Pelanggan
                    </a>
                <?php
                } else {
                ?>
                    <a href="./pelanggan?id_pelanggan=<?php echo $id_pelanggan ?>" class="text-uppercase <?php if ($page == "pelanggan") {
                                                                                                                echo "text-dark text-decoration-none";
                                                                                                            } ?>"><i class="bi bi-people-fill me-2"></i>Pelanggan
                    </a>
                <?php
                }
                ?>
            </li>
            <li class="breadcrumb-item">
                <?php
                if (empty($_GET['id_pelanggan'])) {
                ?>
                    <a href="./tujuan" class="text-uppercase <?php if ($page == "tujuan") {
                                                                    echo "text-dark text-decoration-none";
                                                                } ?>"><i class="bi bi-car-front-fill me-2"></i>Tujuan
                    </a>
                <?php
                } else {
                ?>
                    <a href="./tujuan?id_pelanggan=<?php echo $id_pelanggan ?>" class="text-uppercase <?php if ($page == "tujuan") {
                                                                                                            echo "text-dark text-decoration-none";
                                                                                                        } ?>"><i class="bi bi-car-front-fill me-2"></i>Tujuan
                    </a>
                <?php
                }
                ?>
            </li>
            <li class="breadcrumb-item">
                <?php
                if (empty($_GET['id_pelanggan'])) {
                ?>
                    <a href="./pembayaran?id_pelanggan=<?php echo $id_pelanggan ?>&id_tujuan=<?php echo $id_tujuan ?>" class="text-uppercase <?php if ($page == "pembayaran") {
                                                                                                                                                    echo "text-dark text-decoration-none";
                                                                                                                                                } ?>"><i class="bi bi-wallet-fill me-2"></i>Pembayaran
                    </a>
                <?php
                } else {
                ?>
                    <a href="./tujuan?id_pelanggan=<?php echo $id_pelanggan ?>" class="text-uppercase <?php if ($page == "tujuan") {
                                                                                                            echo "text-dark text-decoration-none";
                                                                                                        } ?>"><i class="bi bi-car-front-fill me-2"></i>Tujuan
                    </a>
                <?php
                }
                ?>
            </li>
            <li class="breadcrumb-item"><a href="./status?id_pelanggan=<?php echo $id_pelanggan ?>&id_tujuan=<?php echo $id_tujuan ?>&id_pembayaran=<?php echo $id_pembayaran ?>" class="text-uppercase <?php if ($page == "status") {
                                                                                                                                                                                                            echo "text-dark text-decoration-none";
                                                                                                                                                                                                        } ?>"><i class="bi bi-clipboard-check-fill me-2"></i>Status</a></li>
        </ol>
    </nav>
</body>

</html>