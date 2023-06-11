<?php
require_once "./bin/config.php";
$page       = "pelanggan";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIANTAR | Pelanggan</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header2.php" ?>
    <!-- end header -->

    <div id="content" class="my-5">
        <div class="container">

            <!-- start breadcumb -->
            <?php include_once "./components/breadcump.php" ?>
            <!-- end breadcumb -->

            <h4 class="mt-5 mb-3">Silahkan lengkapi data diri pelanggan</h4>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama Depan <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email <span class="text-danger fw-bold">*</span></label>
                    <input type="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password <span class="text-danger fw-bold">*</span></label>
                    <input type="password" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Alamat 1 <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat rumah">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Alamat 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Gedung, Bangunan, Lantai">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Nomor HP <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Kota <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Kabupaten <span class="text-danger fw-bold">*</span></label>
                    <select id="inputState" class="form-select" required>
                        <option selected>-- Pilih Kabupaten</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Kecamatan <span class="text-danger fw-bold">*</span></label>
                    <select id="inputState" class="form-select" required>
                        <option selected>-- Pilih Kecamatan</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Kode Pos <span class="text-danger fw-bold">*</span></label>
                    <input type="text" class="form-control" id="inputZip" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            Saya telah setuju dan siap mengikuti peraturan yang ada pada sistem ini
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn col-lg-2 col-12 btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- start footer -->
    <?php include_once "./components/footer.php" ?>
    <!-- end footer -->
</body>

</html>