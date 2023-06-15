<?php
require_once "./bin/config.php";
require_once "./bin/query.php";

ob_start();
session_start();
if (!isset($_SESSION['session_username'])) {
    header("location:login");
    exit();
}

$page       = "pelanggan";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Pelanggan</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header2.php" ?>
    <!-- end header -->

    <div class="container my-5 min-vh-60">
        <?php include_once "./components/breadcump.php" ?>
        <h4 class="mt-5 mb-3">Silahkan lengkapi data diri pelanggan <span class="text-danger fw-bold">*</span></h4>
        <form action="tujuan" method="POST">
            <div class="">
                <div class="col-lg-6 mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fingerprint"></i></span>
                        <input type="text" name="nama_depan" class="form-control text-uppercase" id="nama_depan" required autocomplete="off" autofocus placeholder="Masukkan Nama Depan">
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control text-uppercase" id="nama_belakang" autocomplete="off" required placeholder="Masukkan Nama Belakang">
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="jenkel" class="form-label">Jenis Kelamin <span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select id="jenkel" name="jenkel" class="form-select" required>
                        <option selected disabled class="text-uppercase">PILIH JENIS KELAMIN</option>
                        <option value="LAKI-LAKI" <?php if ($jenkel == "LAKI-LAKI") echo "selected" ?>>LAKI-LAKI</option>
                        <option value="PEREMPUAN" <?php if ($jenkel == "PEREMPUAN") echo "selected" ?>>PEREMPUAN</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="kota_asal" class="form-label">Kota Asal<span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                    <input type="text" name="kota_asal" class="form-control text-uppercase" id="kota_asal" placeholder="Masukkan Kota" autocomplete="off" required>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                    <input type="tel" name="nomor_hp" class="form-control" id="nomor_hp" required autocomplete="off" placeholder="082154330578">
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <button type="submit" name="setPelanggan" class="btn col-lg-12 col-12 text-uppercase btn-success">Simpan</button>
            </div>
        </form>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>