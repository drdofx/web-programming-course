<?php
    if (isset($_POST['submit'])) { 
        echo "<title>Quiz 2 Pemrograman Web</title>";
        echo "<h2>PHP -- Program Operator Gaji Pegawai -- </h2>";
        echo "<h4>oleh: Muhammad Daffa Arviano Putra - 120103038</h4>";
        echo "<hr>";

        // cek apakah semua kolom sudah diisi
        if (empty($_POST['nip']) || empty($_POST['nama']) || empty($_POST['gaji']) || empty($_POST['bonus'])) {
            echo "Anda tidak mengisi semua kolom yang required!<br>";
            echo "<a href='quiz-daffa.php'>Kembali</a>";
        } else {
            // cek apakah data NIP berupa angka semua (karena saya lebih memilih tag input type berupa text untuk NIP karena merupakan variable identitas)
            if (!preg_match("/^\d+$/", $_POST['nip'])) {
                echo "NIP harus berupa angka!<br>";
                echo "<a href='quiz-daffa.php'>Kembali</a>";
            } else {
                $nip = $_POST['nip'];
                $nama = $_POST['nama'];
                $gaji = $_POST['gaji'];
                $bonus = $_POST['bonus'];
    
                // Hitung tunjangan dan pajak
                $tunjangan = $gaji * 0.05;
                $pajak = $gaji * 0.1;
                
                // Hasil gaji akhir
                $gaji_bersih = $gaji + $tunjangan + $bonus - $pajak;

                echo "<b>NIP</b>: $nip <br>";
                echo "<b>Nama</b>: $nama <br><br>";
                echo "<b>Gaji</b> Pokok: Rp. $gaji <br>";
                echo "<b>Bonus</b>: Rp. $bonus <br>";
                echo "<b>Tunjangan</b>: Rp. $tunjangan <br>";
                echo "<b>Pajak</b>: Rp. $pajak <br><br>";

                echo "<b>Gaji yang harus dibayarkan</b> untuk $nama adalah <u>Rp. $gaji_bersih</u>";
            }
        }
    }
?>