<?php
require_once "./bin/config.php";
$page       = "pembayaran";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Pembayaran</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header2.php" ?>
    <!-- end header -->

    <div class="container my-5">

        <!-- start breadcumb -->
        <?php include_once "./components/breadcump.php" ?>
        <!-- end breadcumb -->

        <h4 class="mt-5 mb-3">Silahkan lengkapi metode pembayaran untuk transaksi <span class="text-danger fw-bold">*</span></h4>
        <div class="col-lg-8 mb-3">
            <label for="inputEmail4" class="form-label">Nama Lengkap Pelanggan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputAddress" class="form-label">Alamat Pelanggan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputAddress" class="form-label">Alamat Tujuan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputCity" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <label for="inputEmail4" class="form-label">Hari Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputEmail4" required>
            </div>
            <div class="col-lg-4 mb-3">
                <label for="inputEmail4" class="form-label">Jam Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <input type="time" class="form-control" id="inputEmail4" required>
            </div>
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputState" class="form-label">Metode Pembayaran <span class="text-danger fw-bold">*</span></label>
            <select id="inputState" class="form-select" required>
                <option selected>-- Pilih Pembayaran</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-lg-8 mb-3">
            <input type="submit" value="Bayar" class="btn col-lg-12 col-12 text-uppercase btn-success">
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>