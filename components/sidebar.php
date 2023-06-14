<?php
require_once "../bin/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../admin/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../admin/assets/css/typography.css">
    <link rel="stylesheet" href="../admin/assets/css/default-css.css">
    <link rel="stylesheet" href="../admin/assets/css/styles.css">
    <link rel="stylesheet" href="../admin/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../admin/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- BS Icons -->
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h3 class="text-uppercase text-light"><?php echo $toastTitle ?></h3>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="../admin/index" aria-expanded="true"><i class="bi bi-speedometer me-2"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/tarif" aria-expanded="true"><i class="bi bi-speedometer me-2"></i>
                                    <span>Tarif</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/pesanan" aria-expanded="true"><i class="bi bi-speedometer me-2"></i>
                                    <span>Kelola Pesanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/edit_admin" aria-expanded="true"><i class="bi bi-speedometer me-2"></i>
                                    <span>Edit Admin</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="form">
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h4 class="page-title pull-left"><?php echo $page ?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./logout" onclick="return confirm('Apakah yakin ingin logout?')">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="../admin/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="../admin/assets/js/popper.min.js"></script>
<script src="../admin/assets/js/bootstrap.min.js"></script>
<script src="../admin/assets/js/owl.carousel.min.js"></script>
<script src="../admin/assets/js/metisMenu.min.js"></script>
<script src="../admin/assets/js/jquery.slimscroll.min.js"></script>
<script src="../admin/assets/js/jquery.slicknav.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../admin/assets/js/line-chart.js"></script>
<script src="../admin/assets/js/pie-chart.js"></script>
<script src="../admin/assets/js/plugins.js"></script>
<script src="../admin/assets/js/scripts.js"></script>

</html>