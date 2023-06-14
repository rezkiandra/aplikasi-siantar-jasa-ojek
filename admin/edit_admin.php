<?php
require_once "../bin/config.php";

$page       = "Edit Admin";
session_start();
if (!isset($_SESSION['session_username'])) {
    header("location:auth");
    exit();
}

if (isset($_POST['edit'])) { //untuk create data    
    $username         = $_POST['username'];
    $password         = md5($_POST['password']);

    if ($username && $password) {
        $sql1       = "UPDATE user SET username = '$username', password = '$password'";
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $success = "Data admin berhasil diupdate";
        } else {
            $failed  = "Data admin gagal diupdate";
        }
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?> Admin</title>
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
</head>

<body>
    <?php include_once "../components/sidebar.php" ?>
</body>

</html>