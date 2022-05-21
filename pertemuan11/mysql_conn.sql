-- Database: pertemuan11

CREATE DATABASE IF NOT EXISTS db_pertemuan11;

CREATE TABLE IF NOT EXISTS user (
    id SERIAL,
    nama varchar(255) NOT NULL,
    alamat varchar(255) NOT NULL,
    pekerjaan varchar(255) NOT NULL,
    PRIMARY KEY (id)
)

INSERT INTO user (nama, alamat, pekerjaan) VALUES 
('Andi', 'Surabaya', 'Programmer'),
('Santoso', 'Jakarta', 'Designer'),
('Samsul', 'Semarang', 'Arsitek');