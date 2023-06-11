<?php
require_once "./bin/config.php";
$page       = "mobil";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentalAldy | Mobil</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header2.php" ?>
    <!-- end header -->

    <div class="container mt-5 mb-3">

        <!-- start breadcumb -->
        <?php include_once "./components/breadcump.php" ?>
        <!-- end breadcumb -->

        <div id="mobil" class="d-lg-flex justify-content-center align-items-center my-5 gap-4">
            <div class="col-lg-3 border rounded my-3">
                <img src="./img/mobil1.jpg" alt="mobil" class="img-fluid">
                <div class="container">
                    <h4 class="text-center my-3 mb-5">Toyota Alphard</h4>
                    <h6 class="harga mb-3">Rp150.000/org</h6>
                    <h6 class="status mb-3">Senin - Rabu</h6>
                    <div class="detail1 d-flex justify-content-between align-items-center">
                        <h6 class="seat">4 Seat</h6>
                    </div>
                    <div class="btn btn-sm btn-outline-light btn-dark my-3 text-uppercase col-4">Pilih</div>
                </div>
            </div>
            <div class="col-lg-3 border rounded my-3">
                <img src="./img/mobil1.jpg" alt="mobil" class="img-fluid">
                <div class="container">
                    <h4 class="text-center my-3 mb-5">Toyota Alphard</h4>
                    <h6 class="harga mb-3">Rp150.000/org</h6>
                    <h6 class="status mb-3">Senin - Rabu</h6>
                    <div class="detail1 d-flex justify-content-between align-items-center">
                        <h6 class="seat">4 Seat</h6>
                    </div>
                    <div class="btn btn-sm btn-outline-light btn-dark my-3 text-uppercase col-4">Pilih</div>
                </div>
            </div>
            <div class="col-lg-3 border rounded my-3">
                <img src="./img/mobil1.jpg" alt="mobil" class="img-fluid">
                <div class="container">
                    <h4 class="text-center my-3 mb-5">Toyota Alphard</h4>
                    <h6 class="harga mb-3">Rp150.000/org</h6>
                    <h6 class="status mb-3">Senin - Rabu</h6>
                    <div class="detail1 d-flex justify-content-between align-items-center">
                        <h6 class="seat">4 Seat</h6>
                    </div>
                    <div class="btn btn-sm btn-outline-light btn-dark my-3 text-uppercase col-4">Pilih</div>
                </div>
            </div>
            <div class="col-lg-3 border rounded my-3">
                <img src="./img/mobil1.jpg" alt="mobil" class="img-fluid">
                <div class="container">
                    <h4 class="text-center my-3 mb-5">Toyota Alphard</h4>
                    <h6 class="harga mb-3">Rp150.000/org</h6>
                    <h6 class="status mb-3">Senin - Rabu</h6>
                    <div class="detail1 d-flex justify-content-between align-items-center">
                        <h6 class="seat">4 Seat</h6>
                    </div>
                    <div class="btn btn-sm btn-outline-light btn-dark my-3 text-uppercase col-4">Pilih</div>
                </div>
            </div>
        </div>

        <div id="pagination" class="my-5">
            <?php
            // $perPage            = 4;
            // $page               = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            // $start              = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            // $sql                = "SELECT * FROM tb_berita LIMIT $start, $perPage";

            // $result         = mysqli_query($koneksi, "SELECT * FROM tb_berita");
            // $total          = mysqli_num_rows($result);
            // $pages          = ceil($total / $perPage);
            ?>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if ($start <= 1) { ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?halaman=<?php echo $pages - 1; ?>">Kembali</a>
                        </li>
                    <?php } else { ?>
                        <li class="page-item">
                            <a class="page-link" href="?halaman=<?php echo $pages - 1; ?>">Kembali</a>
                        </li>
                    <?php } ?>


                    <?php for ($i = 1; $i <= $pages; $i++) { ?>
                        <li class="page-item"><a class="page-link text-secondary" href="?halaman=<?php echo $i ?>"> <?php echo $i ?></a></li>
                    <?php } ?>

                    <?php if ($start >= 1) { ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?halaman=<?php echo $pages++; ?>">Lanjut</a>
                        </li>
                    <?php } else { ?>
                        <li class="page-item">
                            <a class="page-link" href="?halaman=<?php echo $pages++; ?>">Lanjut</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav> -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Kembali</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Lanjut</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>