<?php
$day = date("D");
switch($day) {
    case "Sun":
        $hari = "Hari Minggu";
        break;
    case "Mon":
        $hari = "Hari Senin";
        break;
    case "Tue":
        $hari = "Hari Selasa";
        break;
    case "Wed":
        $hari = "Hari Rabu";
        break;
    case "Thu":
        $hari = "Hari Kamis";
        break;
    case "Fri":
        $hari = "Hari Jumat";
        break;
    case "Sat":
        $hari = "Hari Sabtu";
        break;
    default:
        $hari = "Hari Kiamat";
        break;
}

echo "Hari ini adalah <b>$hari</b>";

/*
Nama: Muhammad Daffa Arviano Putra
NIM: 120103038

Deskripsi File: Program Struktur switch case untuk menampikan hari dalam bhs indonesia
Output: Hari ini adalah Hari Sabtu (Di execute saat pengerjaan pada hari sabtu)

*/
?>