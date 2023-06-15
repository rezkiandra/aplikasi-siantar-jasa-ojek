<?php
require_once "./bin/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BS -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- BS Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand text-capitalize" href="./">SIANTAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse d-lg-flex justify-content-end navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="./login">Login<span class="visually-hidden"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href=".register">Daftar<span class="visually-hidden"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../assets/js/snippet.js"></script>

</html>