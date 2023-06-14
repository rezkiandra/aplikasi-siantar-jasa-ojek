CREATE DATABASE rentalmobil;

use rentalmobil;

CREATE TABLE
    user(
        id_user INT PRIMARY KEY AUTO_INCREMENT,
        username CHAR(50) NOT NULL,
        password CHAR(50) NOT NULL
    );

CREATE TABLE
    pelanggan(
        id_pelanggan INT PRIMARY KEY AUTO_INCREMENT,
        nama_depan CHAR(20) NOT NULL,
        nama_belakang CHAR(20) NOT NULL,
        email CHAR(50) NOT NULL,
        alamat TEXT,
        nomor_hp INT(13) NOT NULL,
        kabupaten CHAR(50) NOT NULL,
        kecamatan CHAR(50) NOT NULL,
        kode_pos CHAR(6) NOT NULL
    );

CREATE TABLE
    tujuan(
        id_tujuan INT PRIMARY KEY AUTO_INCREMENT,
        alamat_tujuan TEXT,
        kota_tujuan CHAR(50) NOT NULL,
        kabupaten CHAR(50) NOT NULL,
        kecamatan CHAR(50) NOT NULL,
        dusun CHAR(50) NOT NULL,
        desa CHAR(50) NOT NULL,
        kode_pos CHAR(6) NOT NULL,
        hari CHAR(10) NOT NULL,
        jam TIME NOT NULL
    );

CREATE TABLE
    pembayaran(
        id_pembayaran INT PRIMARY KEY AUTO_INCREMENT,
        id_pelanggan INT,
        FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan) on DELETE CASCADE on UPDATE CASCADE,
        id_tujuan INT,
        FOREIGN KEY (id_tujuan) REFERENCES tujuan (id_tujuan) on DELETE CASCADE on UPDATE CASCADE,
        nomor_hp INT(13) NOT NULL,
        hari CHAR(10) NOT NULL,
        jam TIME NOT NULL,
        metode_pembayaran CHAR(50) NOT NULL
    );

CREATE TABLE
    status(
        id_status INT PRIMARY KEY AUTO_INCREMENT,
        id_tujuan INT,
        FOREIGN KEY (id_tujuan) REFERENCES tujuan (id_tujuan) on DELETE CASCADE on UPDATE CASCADE,
        id_pembayaran INT,
        FOREIGN KEY (id_pembayaran) REFERENCES pembayaran (id_pembayaran) on DELETE CASCADE on UPDATE CASCADE,
        metode_pembayaran CHAR(50) NOT NULL,
        status CHAR(10) NOT NULL
    );