<?php
require_once "./bin/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Keranjang</title>
</head>

<body>
    <!-- start header -->
    <?php echo include_once "./components/header2.php" ?>
    <!-- end header -->

    <div class="container mt-5 mb-3 min-vh-100">

    <!-- start breadcumbs -->
    <?php echo include_once "./components/breadcump.php" ?>
    <!-- end breadcumbs -->

    </div>
</body>

</html>