<?php
require_once "./bin/config.php";
require_once "./bin/register.php";

$page           = "register";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Register</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-dark">
                <div class="featured-image mb-3">
                    <a href="./">
                        <img src="./assets/img/poltesa-logo.png" class="img-fluid" style="width: 120px;">
                    </a>
                </div>
                <p class="text-white fs-2 text-uppercase fw-bold">Register Akun</p>
                <p class="text-white text-wrap text-center">Sistem Jasa Antar (SIANTAR)</p>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Selamat Datang, Pelanggan</h2>
                        <p>Daftarkan username dan password anda</p>
                        <?php
                        if ($success) {
                        ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $success ?>
                            </div>
                        <?php
                            header("refresh:3; url=login");
                        }
                        ?>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control bg-light" name="username" id="username" placeholder="Masukkan username" autocomplete="off" autofocus>
                        </div>
                        <div class="mb-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control bg-light" name="password" id="password" placeholder="Masukkan password" autocomplete="off">
                        </div>
                        <div class="mb-5 d-flex justify-content-between">
                            <div class="form-check">
                            </div>
                            <div class="forgot">
                                <small>Sudah memiliki akun? <a href="./login">Login</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" value="Register" name="register" class="btn btn-lg btn-dark fs-6 col-lg-12 col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>