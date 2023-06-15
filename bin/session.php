<?php

session_start();
if (!isset($_SESSION['session_username'])) {
    header("location:login");
    exit();
}
