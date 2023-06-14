<?php
require_once "../bin/config.php";

$page        = "Dashboard";
session_start();
if (!isset($_SESSION['session_username'])) {
    header("location:auth");
    exit();
}

// // Memanggil data pada table kerjasama dalam negeri
// $user           = mysqli_query($connection, "SELECT * FROM pelanggan");
// $jml_pelanggan  = mysqli_num_rows($user);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?>Dashboard</title>
</head>

<body>
    <?php include_once "../components/sidebar.php" ?>
    <div class="container"></div>
</body>

</html>