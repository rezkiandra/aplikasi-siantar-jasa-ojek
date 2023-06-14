<?php

if (isset($_POST['register'])) {
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    $sql            = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
    $query          = mysqli_query($connection, $sql);
}
