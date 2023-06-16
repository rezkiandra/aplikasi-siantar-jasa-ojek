<?php
require_once "./bin/config.php";
require_once "./bin/query.php";
require_once "./bin/session.php";
require_once "./bin/function.php";

$page           = "tujuan";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Tujuan</title>

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
        <h4 class="mt-5 mb-3">Silahkan lengkapi tujuanmu <?php echo $nama_depan ?> <span class="text-danger fw-bold">*</span></h4>
        <form action="pembayaran" method="POST">
            <div class="col-lg-6 mb-3">
                <?php
                $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                $query              = mysqli_query($connection, $sql);
                while ($result      = mysqli_fetch_array($query)) {
                    $kota_asal      = $result['kota_asal'];
                ?>
                    <label for="inputCity" class="form-label">Kota Asal <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control text-uppercase" id="inputCity" required value="<?php echo $kota_asal ?>" disabled>
                <?php
                }
                if (empty($_GET['id_pelanggan'])) {
                ?>
                    <label for="inputCity" class="form-label">Kota Asal <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control text-uppercase" id="inputCity" required value="<?php echo $kota_asal ?>" disabled>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="inputCity" class="form-label">Kota Tujuan <span class="text-danger fw-bold">*</span></label>
                <input type="text" class="form-control text-uppercase" id="inputCity" required autocomplete="off" autofocus placeholder="Masukkan Kota Tujuan">
            </div>
            <div class="row">
                <?php
                $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                $query              = mysqli_query($connection, $sql);
                while ($result      = mysqli_fetch_array($query)) {
                    $kota_asal      = $result['kota_asal'];
                ?>
                    <div class="col-lg-3 mb-3">
                        <label for="inputCity" class="form-label">Jarak Tempuh <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control text-uppercase" id="inputCity" required disabled>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="inputCity" class="form-label">Harga Tarif <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control text-uppercase" id="inputCity" required disabled value="<?php echo $harga_tarif ?>">
                    </div>
                <?php
                }
                if (empty($_GET['id_pelanggan'])) {
                ?>
                    <div class="col-lg-3 mb-3">
                        <label for="inputCity" class="form-label">Jarak Tempuh <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control text-uppercase" id="inputCity" required disabled>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="inputCity" class="form-label">Harga Tarif <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control text-uppercase" id="inputCity" required disabled value="<?php echo $harga_tarif ?>">
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="col-lg-6 mb-3">
                <label for="inputZip" class="form-label">Hari Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <select id="jenkel" name="jenkel" class="form-select text-uppercase" required>
                    <option selected disabled value="">- Pilih Hari</option>
                    <option value="Laki-laki" <?php if ($jenkel == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($jenkel == "Perempuan") echo "selected" ?>>Perempuan</option>
                </select>
            </div>
            <div class="col-lg-6 mb-3">
                <label for="inputZip" class="form-label">Jam Keberangkatan <span class="text-danger fw-bold">*</span></label>
                <input type="time" class="form-control text-uppercase" id="inputZip" required>
            </div>
            <div class="col-lg-6 mb-3">
                <input type="submit" value="Simpan" class="btn btn-success col-lg-12 col-12 text-uppercase">
            </div>
        </form>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>