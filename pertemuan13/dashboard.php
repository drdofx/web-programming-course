<html>
<head>
    <title>Login Dengan PHP MySQLi - Page User dashboard</title>
</head>
<body>
    <h2>Dashboard User</h2>
    <!-- cek apakah sudah login -->
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="logout.php">Log out</a>
</body>
</html>