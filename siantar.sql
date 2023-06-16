CREATE TABLE
    pelanggan(
        nama_depan CHAR(30) PRIMARY KEY NOT NULL,
        nama_belakang CHAR(30) NOT NULL,
        jenkel char(10) NOT NULL,
        kota_asal CHAR(30) NOT NULL,
        nomor_hp CHAR(13) NOT NULL
    );

CREATE TABLE
    tujuan(
        nama_depan char(30),
        FOREIGN KEY (nama_depan) REFERENCES pelanggan (nama_depan) ON DELETE CASCADE ON UPDATE CASCADE,
        id_tujuan INT PRIMARY KEY AUTO_INCREMENT,
        kota_tujuan CHAR(30) NOT NULL,
        jarak_tempuh int NOT NULL,
        harga_tarif int NOT NULL,
        hari char(10) NOT NULL,
        jam time NOT NULL
    );

CREATE TABLE
    pembayaran(
        nama_depan char(30),
        FOREIGN KEY (nama_depan) REFERENCES tujuan (nama_depan) ON DELETE CASCADE ON UPDATE CASCADE,
        kota_asal CHAR(30) NOT NULL,
        kota_tujuan CHAR(30) NOT NULL,
        jarak_tempuh int NOT NULL,
        harga_tarif int NOT NULL,
        hari char(10) NOT NULL,
        jam time NOT NULL,
        metode_pembayaran char(30) NOT NULL,
        tgl_transaksi DATE
    );