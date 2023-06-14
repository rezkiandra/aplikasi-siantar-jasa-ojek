<?php
require_once "./bin/config.php";
require_once "./bin/query.php";

$jenkel     = "";
$provinsi   = "";
$kabupaten  = "";
$kecamatan  = "";

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
        <form class="">
            <div class="">
                <div class="col-lg-6 mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan <span class="text-danger fw-bold">*</span></label>
                    <input type="text" name="nama_depan" class="form-control" id="nama_depan" required autocomplete="off" placeholder="Levi">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" autocomplete="off" placeholder="Ackerman">
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="jenkel" class="form-label">Jenis Kelamin <span class="text-danger fw-bold">*</span></label>
                <select id="jenkel" name="jenkel" class="form-select" required>
                    <option selected disabled value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" <?php if ($jenkel == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($jenkel == "Perempuan") echo "selected" ?>>Perempuan</option>
                </select>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="alamat_pelanggan" class="form-label">Kota Asal<span class="text-danger fw-bold">*</span></label>
                <input type="text" name="alamat_pelanggan" class="form-control" id="alamat_pelanggan" placeholder="" autocomplete="off">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
                <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" required autocomplete="off" placeholder="082185940394">
            </div>
            <div class="col-lg-6 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Saya telah setuju dan siap mengikuti peraturan yang ada pada sistem ini
                    </label>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <input type="submit" value="Simpan" id="setPelanggan" name="setPelanggan" class="btn col-lg-12 col-12 text-uppercase btn-success">
            </div>
        </form>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>