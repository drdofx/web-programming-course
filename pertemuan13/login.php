<?php
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    // echo($data);
 
    if ($cek > 0) {
        $row = mysqli_fetch_assoc($data);

        $_SESSION['username'] = $row["username"];
        $_SESSION['admin'] = $row["is_admin"];
        $_SESSION['status'] = "login";

        if ($_SESSION['admin'] == 1) {
            header("location:admin/index.php");
        } else {
            header("location:dashboard.php");
        }

        // header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>