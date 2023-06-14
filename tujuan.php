<?php
require_once "./bin/config.php";
$page       = "tujuan";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Tujuan</title>
    <style>
        @import "./scss/_utilities.scss";
    </style>

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

    <div class="container my-5">

        <!-- start breadcumb -->
        <?php include_once "./components/breadcump.php" ?>
        <!-- end breadcumb -->

        <h4 class="mt-5 mb-3">Silahkan lengkapi alamat tujuan pelanggan <span class="text-danger fw-bold">*</span></h4>
        <div class="col-lg-8 mb-3">
            <label for="inputAddress" class="form-label">Alamat Tujuan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputCity" class="form-label">Kota Tujuan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <label for="inputState" class="form-label">Kabupaten <span class="text-danger fw-bold">*</span></label>
                <select id="inputState" class="form-select" required>
                    <option selected>-- Pilih Kabupaten</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-lg-4 mb-3">
                <label for="inputState" class="form-label">Kecamatan <span class="text-danger fw-bold">*</span></label>
                <select id="inputState" class="form-select" required>
                    <option selected>-- Pilih Kecamatan</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <label for="inputZip" class="form-label">Dusun <span class="text-danger fw-bold">*</span></label>
                <select id="inputState" class="form-select" required>
                    <option selected>-- Pilih Dusun</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-lg-4 mb-3">
                <label for="inputZip" class="form-label">Desa <span class="text-danger fw-bold">*</span></label>
                <select id="inputState" class="form-select" required>
                    <option selected>-- Pilih Desa</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="col-lg-8 mb-3">
            <label for="inputZip" class="form-label">Kode Pos <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputZip" required>
        </div>  
        <div class="row">
            <div class="col-lg-4 mb-3">
                <label for="inputZip" class="form-label">Hari Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputZip" required>
            </div>
            <div class="col-lg-4 mb-3">
                <label for="inputZip" class="form-label">Jam Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <input type="time" class="form-control" id="inputZip" required>
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success col-lg-8 col-12 text-uppercase">
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>