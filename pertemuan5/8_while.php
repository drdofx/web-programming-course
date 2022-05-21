<?php
// contoh 1
$i = 1;
while ($i <= 10) {
    echo "$i ";
    $i++;
}

echo "<br>";

// contoh 2
$i = 1;
while ($i <= 10):
    echo "$i ";
    $i++;
endwhile;

echo "<br>";

// contoh 3
$i = 1;
while ($i <= 6) {
    echo "<h$i>Heading $i</h$i>";
    $i++;
}

/*
Nama: Muhammad Daffa Arviano Putra
NIM: 120103038

Deskripsi File: Program Struktur Perulangan while dan beberapa variasinya
Output: 
    1 2 3 4 5 6 7 8 9 10
    1 2 3 4 5 6 7 8 9 10
    #Heading 1
    ##Heading 2
    ###Heading 3
    ####Heading 4
    #####Heading 5
    ######Heading 6

*/
?>