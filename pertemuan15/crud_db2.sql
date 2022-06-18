-- Database: crud_db

CREATE DATABASE IF NOT EXISTS crud_db;

USE crud_db;

CREATE TABLE `calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT,  
    `nama` VARCHAR(64) NOT NULL,  
    `alamat` VARCHAR(255) NOT NULL,  
    `jenis_kelamin` VARCHAR(16) NOT NULL,  
    `agama` VARCHAR(16) NOT NULL,  
    `sekolah_asal` VARCHAR(64) NOT NULL,    
    PRIMARY KEY  (`id`)
);

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`,
`sekolah_asal`) VALUES (NULL, 'Lia', 'Jl. Mangga No. 3, Mataram',
'perempuan', 'Islam', 'SMPN 32 Ampenan');
