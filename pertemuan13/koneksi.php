<?php
// Using mysqli_connect for db connection
require '../pertemuan11/test.php';

$databaseHost = "localhost";
$databaseName = "session_login";
$databaseUsername = "root";
$databasePassword = $key;

// Create connection
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if (!$connection) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>