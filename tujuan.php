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

    <div class="container my-5 min-vh-60">
        <?php include_once "./components/breadcump.php" ?>
        <h4 class="mt-5 mb-3">Silahkan lengkapi alamat tujuan pelanggan <span class="text-danger fw-bold">*</span></h4>
        <div class="col-lg-6 mb-3">
            <label for="inputCity" class="form-label">Kota Asal <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="inputCity" class="form-label">Kota Tujuan <span class="text-danger fw-bold">*</span></label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <label for="inputCity" class="form-label">Jarak Tempuh <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputCity" required>
            </div>
            <div class="col-lg-3 mb-3">
                <label for="inputCity" class="form-label">Harga Tarif <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control" id="inputCity" required>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="inputZip" class="form-label">Hari Keberangkatan <span class="text-danger fw-bold">*</span></label>
            <select id="jenkel" name="jenkel" class="form-select" required>
                <option selected disabled value="">- Pilih Hari</option>
                <option value="Laki-laki" <?php if ($jenkel == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($jenkel == "Perempuan") echo "selected" ?>>Perempuan</option>
            </select>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="inputZip" class="form-label">Jam Keberangkatan <span class="text-danger fw-bold">*</span></label>
            <input type="time" class="form-control" id="inputZip" required>
        </div>
        <div class="col-lg-6 mb-3">
            <input type="submit" value="Simpan" class="btn btn-success col-lg-12 col-12 text-uppercase">
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>