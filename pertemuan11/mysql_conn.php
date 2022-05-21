<?php

$host = mysql_connect("localhost", "root", "");

if (!$host) {
    die("Koneksi ke host gagal: " . mysql_error());
} else {
    echo "Koneksi ke host berhasil";
}

$db = mysql_select_db("db_pertemuan11");

if (!$db) {
    die("Koneksi ke database gagal: " . mysql_error());
} else {
    echo "Koneksi ke database berhasil";
}