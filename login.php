<?php
require_once "./bin/config.php";

$page           = "login";
$error          = "";
$success        = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-dark">
                <div class="featured-image mb-3">
                    <img src="./img/poltesa-logo.png" class="img-fluid" style="width: 120px;">
                </div>
                <p class="text-white fs-2 text-uppercase" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Login Akun</p>
                <!-- <p class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Website Kerjasama Politeknik Negeri Sambas</p> -->
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Selamat Datang, Pelanggan</h2>
                        <p>Masukkan username dan password yang sesuai</p>
                        <?php
                        if ($success) {
                        ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $success ?>
                            </div>
                        <?php
                            header("refresh:2; url=auth");
                        } elseif ($error) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error ?>
                            </div>
                        <?php
                            header("refresh:2; url=auth");
                        }
                        ?>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control bg-light" name="username" id="username" placeholder="Masukkan username">
                        </div>
                        <div class="mb-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control bg-light" name="password" id="password" placeholder="Masukkan password">
                        </div>
                        <div class="mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ingat saya</small></label>
                            </div>
                            <div class="forgot">
                                <small>Tidak memiliki akun? <a href="../rentalmobil/register">Register</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" value="Login" name="login" class="btn btn-lg btn-dark fs-6 col-lg-12 col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>