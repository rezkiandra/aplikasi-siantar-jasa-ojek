<?php
ob_start();
require_once "./bin/config.php";
require_once "./bin/query.php";
require_once "./bin/session.php";

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
        <h4 class="mt-5 mb-3"><?php if (isset($_GET['nama_depan']) && !empty($_GET['nama_depan'])) {
                                    $nama_depan   = $_GET['nama_depan'];
                                    echo "Data diri pelanggan sudah lengkap terisi ";
                                } else {
                                    echo "Silahkan lengkapi data diri pelanggan ";
                                } ?><span class="text-danger fw-bold">*</span></h4>
        <form action="tujuan?nama_depan=<?php echo $nama_depan ?>" method="POST">
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
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fingerprint"></i></span>
                        <input type="text" name="nama_belakang" class="form-control text-uppercase" id="nama_belakang" autocomplete="off" required placeholder="Masukkan Nama Belakang" value="<?php echo $nama_belakang ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="jenkel" class="form-label">Jenis Kelamin <span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select id="jenkel" name="jenkel" class="form-select text-uppercase" required>
                        <option selected disabled class="text-uppercase">PILIH JENIS KELAMIN</option>
                        <option value="Laki-Laki" <?php if ($jenkel == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php if ($jenkel == "Perempuan") echo "selected" ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="kota_asal" class="form-label">Kota Asal <span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                    <input type="text" name="kota_asal" class="form-control text-uppercase" id="kota_asal" placeholder="Masukkan Kota" autocomplete="off" required value="<?php echo $kota_asal ?>">
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                    <input type="tel" name="nomor_hp" class="form-control text-uppercase" id="nomor_hp" required autocomplete="off" placeholder="Masukkan Nomor Hp" value="<?php echo $nomor_hp ?>">
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