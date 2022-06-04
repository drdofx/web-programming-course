CREATE DATABASE IF NOT EXISTS dbakademik;

USE dbakademik;

CREATE TABLE IF NOT EXISTS mata_kuliah (
    kdmtk varchar(10) not null,
    namamtk varchar(20) not null,
    sks int not null,
    semester int,
    PRIMARY KEY (kdmtk)
);

CREATE TABLE IF NOT EXISTS mahasiswa (
    nim int not null,
    nama varchar(25) not null,
    kelas varchar(5),
    PRIMARY KEY (nim)
);

CREATE TABLE IF NOT EXISTS khs (
    periode varchar(6) not null,
    tanggal date,
    nim int not null,
    kdmtk varchar(10) not null,
    nilai varchar(2) not null,
    bobot varchar(6),
    PRIMARY KEY (tanggal)
);