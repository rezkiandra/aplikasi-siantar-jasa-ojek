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
        <h4 class="mt-5 mb-3"><?php if (isset($_GET['id_pelanggan'])) {
                                    echo "Data diri pelanggan sudah lengkap terisi ";
                                } else {
                                    echo "Silahkan lengkapi data diri pelanggan ";
                                } ?><span class="text-danger fw-bold">*</span></h4>
        <form action="tujuan" method="POST">
            <div class="">
                <div class="col-lg-6 mb-3">
                    <?php
                    $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                    $query              = mysqli_query($connection, $sql);
                    while ($result      = mysqli_fetch_array($query)) {
                        $nama_depan     = $result['nama_depan'];
                    ?>
                        <label for="nama_depan" class="form-label">Nama Depan <span class="text-danger fw-bold">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-fingerprint"></i></span>
                            <input type="text" name="nama_depan" class="form-control text-uppercase" id="nama_depan" required autocomplete="off" autofocus placeholder="Masukkan Nama Depan" value="<?php echo $nama_depan ?>" disabled>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-6 mb-3">
                    <?php
                    $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                    $query              = mysqli_query($connection, $sql);
                    while ($result      = mysqli_fetch_array($query)) {
                        $nama_belakang  = $result['nama_belakang'];
                    ?>
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-fingerprint"></i></span>
                            <input type="text" name="nama_belakang" class="form-control text-uppercase" id="nama_belakang" autocomplete="off" required placeholder="Masukkan Nama Belakang" value="<?php echo $nama_belakang ?>" disabled>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <?php
                $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                $query              = mysqli_query($connection, $sql);
                while ($result      = mysqli_fetch_array($query)) {
                    $jenkel         = $result['jenkel'];
                ?>
                    <label for="jenkel" class="form-label">Jenis Kelamin <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                        <select id="jenkel" name="jenkel" class="form-select text-uppercase" required value="<?php echo $jenkel ?>" disabled>
                            <option selected disabled class="text-uppercase">PILIH JENIS KELAMIN</option>
                            <option value="Laki-Laki" <?php if ($jenkel == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if ($jenkel == "Perempuan") echo "selected" ?>>Perempuan</option>
                        </select>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mb-3">
                <?php
                $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                $query              = mysqli_query($connection, $sql);
                while ($result      = mysqli_fetch_array($query)) {
                    $kota_asal      = $result['kota_asal'];
                ?>
                    <label for="kota_asal" class="form-label">Kota Asal<span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" name="kota_asal" class="form-control text-uppercase" id="kota_asal" placeholder="Masukkan Kota" autocomplete="off" required value="<?php echo $kota_asal ?>" disabled>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mb-3">
                <?php
                $sql                = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                $query              = mysqli_query($connection, $sql);
                while ($result      = mysqli_fetch_array($query)) {
                    $nomor_hp       = $result['nomor_hp'];
                ?>
                    <label for="nomor_hp" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        <input type="tel" name="nomor_hp" class="form-control" id="nomor_hp" required autocomplete="off" placeholder="082154330578" value="<?php echo $nomor_hp ?>" disabled>
                    </div>
                <?php
                }
                ?>
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