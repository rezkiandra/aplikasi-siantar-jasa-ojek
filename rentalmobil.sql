CREATE TABLE tb_pelanggan(
    id_pelanggan int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama_pelanggan varchar(255),
    tgl_dibuat DATETIME
);

CREATE TABLE tb_mobil(
    id_mobil int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    kd_mobil varchar(255),
    merek_mobil varchar(255),
    seat_kursi varchar(255)
);

ALTER Table tb_mobil
ADD tgl_dibuat DATETIME;

DESC tb_mobil;

DESC tb_pelanggan;