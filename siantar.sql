CREATE DATABASE siantar;

CREATE TABLE
    user(
        id_user INT PRIMARY KEY AUTO_INCREMENT,
        username CHAR(30) NOT NULL,
        password CHAR(30) NOT NULL
    );

CREATE TABLE
    pelanggan(
        id_pelanggan INT PRIMARY KEY AUTO_INCREMENT,
        nama_depan CHAR(30) NOT NULL,
        nama_belakang CHAR(30) NOT NULL,
        jenkel char(10) NOT NULL,
        kota_asal CHAR(30) NOT NULL,
        nomor_hp CHAR(13) NOT NULL
    );

CREATE TABLE
    tujuan(
        id_tujuan INT PRIMARY KEY AUTO_INCREMENT,
        id_pelanggan INT,
        FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan) ON DELETE CASCADE ON UPDATE CASCADE,
        kota_tujuan char(30) NOT NULL,
        jarak_tempuh CHAR(30) NOT NULL,
        harga_tarif INT NOT NULL,
        hari CHAR(30) NOT NULL,
        jam CHAR(30) NOT NULL
    );

CREATE TABLE
    pembayaran(
        id_pembayaran INT PRIMARY KEY AUTO_INCREMENT,
        id_pelanggan INT,
        FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan) ON DELETE CASCADE ON UPDATE CASCADE,
        id_tujuan INT,
        FOREIGN KEY (id_tujuan) REFERENCES tujuan (id_tujuan) ON DELETE CASCADE ON UPDATE CASCADE,
        kota_tujuan char(30) NOT NULL,
        jarak_tempuh CHAR(30) NOT NULL,
        harga_tarif INT NOT NULL,
        hari CHAR(30) NOT NULL,
        jam CHAR(30) NOT NULL
    );

CREATE TABLE
    status(
        id_status INT PRIMARY KEY AUTO_INCREMENT,
        id_pembayaran INT,
        FOREIGN KEY (id_pembayaran) REFERENCES pembayaran (id_pembayaran) ON DELETE CASCADE ON UPDATE CASCADE,
        tgl_transaksi DATE NOT NULL,
        status char(10)
    );

SELECT * FROM pelanggan;

SELECT * FROM user;

ALTER TABLE pembayaran ADD metode_pembayaran char(30) NOT NULL;
ALTER TABLE pelanggan AUTO_INCREMENT = 1;