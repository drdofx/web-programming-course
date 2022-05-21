<?php
// Using mysqli_connect for db connection

$databaseHost = "localhost";
$databaseName = "crud_db";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

echo "Koneksi ke database berhasil";
mysqli_close($mysqli);

?>