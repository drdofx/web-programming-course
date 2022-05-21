<?php
$tahun = date("Y");
$kabisat = ($tahun % 4 == 0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> adalah $kabisat";

/*
Nama: Muhammad Daffa Arviano Putra
NIM: 120103038

Deskripsi File: Program Struktur kondisi khusus ? (ternary) untuk memeriksa tahun saat ini kabisat atau bukan
Output: Tahun 2022 adalah BUKAN KABISAT (di execute saat pengerjaan tahun 2022)

*/
?>