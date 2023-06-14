<?php
require_once "./bin/config.php";
$page       = "status";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Status</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header2.php" ?>
    <!-- end header -->

    <div class="container my-5">

        <!-- start breadcumb -->
        <?php include_once "./components/breadcump.php" ?>
        <!-- end breadcumb -->

        <div id="bukti_transaksi">
            <h4 class="mt-5 mb-3">Status transaksi <span class="text-danger fw-bold">*</span></h4>
            <div class="col-lg-8 mb-3">
                <label for="inputEmail4" class="form-label">Nama Lengkap Pelanggan <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputEmail4" required>
            </div>
            <div class="col-lg-8 mb-3">
                <label for="inputAddress" class="form-label">Alamat Tujuan <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputAddress">
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
                <input type="text" class="form-control" id="inputState" required>
            </div>
            <div class="col-lg-8 mb-3">
                <label for="inputState" class="form-label">Tanggal Transaksi <span class="text-danger fw-bold">*</span></label>
                <input type="date" class="form-control" id="inputState" required>
            </div>
            <div class="col-lg-8 mb-3">
                <label for="inputState" class="form-label">Status transaksi <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputState" required>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <input type="submit" value="Cetak" class="btn col-lg-12 col-12 text-uppercase btn-warning">
                </div>
                <div class="col-lg-4 mb-3">
                    <input type="submit" value="Kirim Admin" class="btn col-lg-12 col-12 text-uppercase btn-success">
                </div>
            </div>
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>
<script>
    const bukti = document.getElementById("bukti_transaksi");
    // window.print();
</script>

</html>