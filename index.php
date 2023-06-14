<?php
require_once "./bin/config.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?>Beranda</title>
</head>

<body>
    <!-- start header -->
    <?php include_once "./components/header.php" ?>
    <!-- end header -->

    <div class="py-5 mb-4">
        <div class="container d-lg-flex flex-row justify-content-center align-items-center">
            <div class="col-lg-6 py-3">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-capitalize mb-3">Sistem Jasa Antar</h1>
                    <h3 class="mb-3">Mobilitas tanpa batas, pengalaman tanpa hambatan</h3>

                    <!-- Toast -->
                    <button type="button" class="btn col-5 btn-sm col-lg-4 shadow btn-secondary fs-6" id="liveToastBtn">Selengkapnya</button>
                    <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-lg">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="./assets/img/poltesa-logo.png" class="rounded me-2" style="width: 50px;">
                                <strong class="me-auto"><?php echo $toastTitle ?></strong>
                                <small>Sekarang</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Halo Pelanggan, Silahkan login terlebih dahulu yaa!
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                </div>
            </div>
            <div class="col-lg-6 py-3">
                <img src="./assets/img/mobil1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="service" class="py-3 bg-light">
        <div class="container">
            <h3 class="text-center text-uppercase mt-3 mb-2">Servis Kami</h3>
            <div class="d-lg-flex flex-row justify-content-around">
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-rocket-takeoff"></i>
                    <h5 class="text-center mt-3">Pelayanan Cepat</h5>
                    <p class="mt-3">Layanan rental mobil yang cepat mengutamakan efisiensi dan responsibilitas pelanggan.</p>
                </div>
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-calendar-check"></i>
                    <h5 class="text-center mt-3">Dukungan 24/7</h5>
                    <p class="mt-3">Layanan rental mobil terpercaya akan menyediakan dukungan pelanggan yang tersedia 24 jam sehari, 7 hari seminggu.</p>
                </div>
                <div class="col-lg-3 text-center my-5">
                    <i class="fs-1 bi bi-arrows-move"></i>
                    <h5 class="text-center mt-3">Fleksibilitas</h5>
                    <p class="mt-3">Layanan yang terpercaya akan menawarkan fleksibilitas dalam penyewaan.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')

    if (toastTrigger) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show()
        })
    }
</script>

</html>