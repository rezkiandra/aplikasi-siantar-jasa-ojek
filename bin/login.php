<?php

// function login
session_start();
if (isset($_COOKIE['cookie_username'])) {
    $cookie_username        = $_COOKIE['cookie_username'];
    $cookie_password        = $_COOKIE['cookie_password'];

    $sql            = "SELECT * FROM user WHERE username = '$username'";
    $query          = mysqli_query($connection, $sql);
    $result         = mysqli_fetch_array($query);
    if ($result['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_username'])) {
    header("location: pelanggan");
    exit();
}

if (isset($_POST['login'])) {
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    if (empty($username) && empty($password)) {
        $error      = "Silahkan masukkan username dan password";
    } else {
        $sql            = "SELECT * FROM user WHERE username = '$username'";
        $query          = mysqli_query($connection, $sql);
        $result         = mysqli_fetch_array($query);

        if (empty($result['username'])) {
            $error      = "Username '$username' tidak terdaftar";
        } elseif ($result['password'] != ($password)) {
            $error      = "Password yang dimasukkan tidak sesuai";
        } else {
            $success    = "Login berhasil";
        }

        if (empty($error)) {
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);

            if ($me == 1) {
                $cookie_name    = "cookie_username";
                $cookie_value   = $username;
                $cookie_time    = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time);

                $cookie_name    = "cookie_password";
                $cookie_value   = md5($password);
                $cookie_time    = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time);
            }
        }
    }
}
// end