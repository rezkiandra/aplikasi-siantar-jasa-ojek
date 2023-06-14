<?php

// untuk create pelanggan
if (isset($_POST['setPelanggan'])) {
    $nama_depan         = $_POST['nama_depan'];
    $nama_belakang      = $_POST['nama_belakang'];
    $jenkel             = $_POST['jenkel'];
    $email              = $_POST['email'];
    $alamat_pelanggan   = $_POST['alamat_pelanggan'];
    $nomor_hp           = $_POST['nomor_hp'];
    $provinsi           = $_POST['provinsi'];
    $kabupaten          = $_POST['kabupaten'];
    $kecamatan          = $_POST['kecamatan'];
    $kode_pos           = $_POST['kode_pos'];

    $sql                = "INSERT INTO pelanggan (nama_depan, nama_belakang, jenkel, email, alamat_pelanggan, nomor_hp, provinsi, kabupaten, kecamatan, kode_pos)";
    $sql               .= "VALUES";
    $sql               .= "('$nama_depan', '$nama_belakang', '$jenkel', '$email', '$alamat_pelanggan', '$nomor_hp', '$provinsi', '$kabupaten', '$kecamatan', '$kode_pos')";
    $query              = mysqli_query($connection, $sql);
}

// untuk create tujuan
if (isset($_POST['setTujuan'])) {
    $alamat_tujuan      = $_POST['alamat_tujuan'];
    $kota_tujuan        = $_POST['kota_tujuan'];
    $kabupaten          = $_POST['kabupaten'];
    $kecamatan          = $_POST['kecamatan'];
    $dusun              = $_POST['dusun'];
    $desa               = $_POST['desa'];
    $kode_pos           = $_POST['kode_pos'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];

    $sql                = "INSERT INTO tujuan (alamat_tujuan, kota_tujuan, kabupaten, kecamatan, dusun, desa, kode_pos, hari, jam)";
    $sql               .= "VALUES";
    $sql               .= "('$alamat_tujuan', '$kota_tujuan', '$kabupaten', '$kecamatan', '$dusun', '$desa', '$kode_pos', '$hari', '$jam')";
    $query              = mysqli_query($connection, $sql);
}

// untuk create pembayaran
if (isset($_POST['setPembayaran'])) {
    $nomor_hp           = $_POST['nomor_hp'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];

    $sql                = "INSERT INTO pembayaran (nomor_hp, hari, jam, metode_pembayaran)";
    $sql               .= "VALUES";
    $sql               .= "('$nomor_hp', '$hari', '$jam', '$metode_pembayaran')";
    $query              = mysqli_query($connection, $sql);
}

// untuk create status
if (isset($_POST['setStatus'])) {
    $nomor_hp           = $_POST['nomor_hp'];
    $hari               = $_POST['hari'];
    $jam                = $_POST['jam'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];

    $sql                = "INSERT INTO pembayaran (nomor_hp, hari, jam, metode_pembayaran)";
    $sql               .= "VALUES";
    $sql               .= "('$nomor_hp', '$hari', '$jam', '$metode_pembayaran')";
    $query              = mysqli_query($connection, $sql);
}
