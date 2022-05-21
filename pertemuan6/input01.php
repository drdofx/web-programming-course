<!-- form input -->
<!DOCTYPE html>
<html>
    <head>
        <title>Pengolahan Form</title>
    </head>
    <body>
        <form action="" method="post" name="input">
            Nama Anda: <input type="text" name="nama" /><br>
            <input type="submit" name="input" value="OK" />
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])) {
    if (isset($_COOKIE['nama'])) {
        $nama = $_COOKIE['nama'];
        setcookie('nama', $nama . ',' . $_POST['nama'] ,time() + 3600);
    } else {
        setcookie('nama', $_POST['nama'] ,time() + 3600);
    }

    $all_nama = explode(',', $_COOKIE['nama']);
    foreach($all_nama as $nama) {
        echo "Nama Anda: <b>$nama</b> <br>";
    }
}