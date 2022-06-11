<?php
// Using mysqli_connect for db connection
require '../pertemuan11/test.php';

$databaseHost = "localhost";
$databaseName = "crud_db";
$databaseUsername = "root";
$databasePassword = $key;

// Create connection
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if (!$mysqli) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>