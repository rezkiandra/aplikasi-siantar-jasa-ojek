<?php
require_once "./bin/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="bg-dark w-100 bottom-0 left-0 right-0 <?php if ($page == "tujuan") {
                                                            echo "position-relative";
                                                        } else {
                                                            echo "position-relative";
                                                        } ?>">
        <div class="container d-lg-flex justify-content-center py-5">
            <div class="col-lg-6 d-lg-flex justify-content-start">
                <ul>
                    <li class="nav-item my-3">
                        <a class="nav-link text-light"><i class="bi bi-buildings me-2"></i>Jalan Ahmad Sood, Sambas 79462</a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link text-light"><i class="bi bi-telephone me-2"></i>+62 (821) - 654029</a>
                    </li>
                    <li class="nav-item my-3">
                        <a class="nav-link text-light"><i class="bi bi-dropbox me-2"></i>siantaraldy@business.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 d-lg-flex justify-content-end">
                <ul>
                    <li class="nav-item my-3">
                        <a href="" class="nav-link text-light"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="" class="nav-link text-light"><i class="bi bi-instagram me-2"></i>Instagram</a>
                    </li>
                    <li class="nav-item my-3">
                        <a href="" class="nav-link text-light"><i class="bi bi-facebook me-2"></i>Facebook</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>