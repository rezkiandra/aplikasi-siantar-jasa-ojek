<?php

$jenkel         = "";
$success        = "";
$error          = "";
$id_pelanggan   = "";

// untuk create pelanggan
if (isset($_POST['setPelanggan'])) {
    $nama_depan         = $_POST['nama_depan'];
    $nama_belakang      = $_POST['nama_belakang'];
    $jenkel             = $_POST['jenkel'];
    $kota_asal          = $_POST['kota_asal'];
    $nomor_hp           = $_POST['nomor_hp'];

    $sql                = "INSERT INTO pelanggan (nama_depan, nama_belakang, jenkel, kota_asal, nomor_hp)";
    $sql               .= "VALUES";
    $sql               .= "('$nama_depan', '$nama_belakang', '$jenkel', '$kota_asal', '$nomor_hp')";
    $query              = mysqli_query($connection, $sql);

    $success            = "Berhasil memasukkan data pelanggan";
} else {
    $error              = "Gagal memasukkan data pelanggan";
}

// untuk create tujuan
if (isset($_POST['setTujuan'])) {
    $kota_asal          = $_POST['kota_asal'];
    $kota_tujuan        = $_POST['kota_tujuan'];
    $jarak_tempuh       = $_POST['jarak_tempuh'];
    $harga_tarif        = $_POST['harga_tarif'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];

    $sql                = "INSERT INTO tujuan (kota_asal, kota_tujuan, jarak_tempuh, harga_tarif, hari, jam)";
    $sql               .= "VALUES";
    $sql               .= "('$kota_asal', '$kota_tujuan', '$jarak_tempuh', '$harga_tarif', '$hari', '$jam')";
    $query              = mysqli_query($connection, $sql);

    $success            = "Berhasil memasukkan kota tujuan";
} else {
    $error              = "Gagal memasukkan kota tujuan";
}

// untuk create pembayaran
if (isset($_POST['setPembayaran'])) {
    $nama_pelanggan     = $_POST['nama_pelanggan'];
    $kota_asal          = $_POST['kota_asal'];
    $kota_tujuan        = $_POST['kota_tujuan'];
    $jarak_tempuh       = $_POST['jarak_tempuh'];
    $harga_tarif        = $_POST['harga_tarif'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];

    $sql                = "INSERT INTO pembayaran (nama_pelanggan, kota_asal, kota_tujuan, jarak_tempuh, harga_tarif, hari, jam, metode_pembayaran)";
    $sql               .= "VALUES";
    $sql               .= "('$nama_pelanggan', '$kota_asal', '$kota_tujuan', '$jarak_tempuh', '$harga_tarif', '$hari', '$jam', '$metode_pembayaran')";
    $query              = mysqli_query($connection, $sql);

    $success            = "Berhasil melakukan pembayaran";
} else {
    $error              = "Gagal melakukan pembayaran";
}

// untuk create status
if (isset($_POST['setStatus'])) {
    $nama_pelanggan     = $_POST['nama_pelanggan'];
    $kota_asal          = $_POST['kota_asal'];
    $kota_tujuan        = $_POST['kota_tujuan'];
    $jarak_tempuh       = $_POST['jarak_tempuh'];
    $harga_tarif        = $_POST['harga_tarif'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];
    $status             = $_POST['status'];

    $sql                = "INSERT INTO status (nama_pelanggan, kota_asal, kota_tujuan, jarak_tempuh, harga_tarif, hari, jam, metode_pembayaran, status)";
    $sql               .= "VALUES";
    $sql               .= "('$nama_pelanggan', '$kota_asal', '$kota_tujuan', '$jarak_tempuh', '$harga_tarif', '$hari', '$jam', '$metode_pembayaran', '$status')";
    $query              = mysqli_query($connection, $sql);

    $success            = "Berhasil menyimpan status pembayaran";
} else {
    $error              = "Gagal menyimpan status pembayaran";
}
