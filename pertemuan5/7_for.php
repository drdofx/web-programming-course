<?php

// contoh 1
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "<br>";

// contoh 2
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
}

echo "<br>";

// contoh 3
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
    $i++;
}

echo "<br>";

// contoh 4
for ($i = 1; $i <= 10; print "$i ", $i++);

/*
Nama: Muhammad Daffa Arviano Putra
NIM: 120103038

Deskripsi File: Program Struktur Perulangan for dan beberapa variasinya
Output: 
    1 2 3 4 5 6 7 8 9 10
    1 2 3 4 5 6 7 8 9 10
    1 2 3 4 5 6 7 8 9 10
    1 2 3 4 5 6 7 8 9 10

*/

?>