<?php
// Using mysqli_connect for db connection
require 'test.php';

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

// Print host information
echo "Connected Successfully. Host info: " . mysqli_get_host_info($mysqli);

// CLose connection
mysqli_close($mysqli);
echo "<br> Connection Closed";

?>