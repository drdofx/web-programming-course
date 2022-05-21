<?php
$nim = '120103038';
$nama = 'Muh Daffa';
$umur = '20';
$nilai = '99.99';
$status = TRUE;

echo "NIM: ". $nim . "<br>";
echo "Nama: ". $nama . "<br>";
print "Umur: ". $umur . "<br>";
printf("Nilai: %.3f<br>", $nilai);

if ($status) {
    echo "Status: Aktif";
} else {
    echo "Status: Tidak Aktif";
}
?>