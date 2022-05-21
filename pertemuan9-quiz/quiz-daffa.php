<!DOCTYPE html>
<html>
    <head>
        <title>Quiz 2 Pemrograman Web</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>  

        <h2>PHP -- Program Operator Gaji Pegawai -- </h2>
        <h4>oleh: Muhammad Daffa Arviano Putra - 120103038</h4>
        <p><span class="error">* required field</span></p>
        <form method="post" action="quiz-daffa-proses.php" name="input">  
            NIP: <input type="text" name="nip" value=""><span class="error"> * </span><br><br>
            Nama: <input type="text" name="nama" value=""><span class="error"> * </span><br><br>
            Gaji Pokok: <input type="number" name="gaji" value=""><span class="error"> * </span><br><br>
            Bonus: <input type="number" name="bonus" value=""><span class="error"> * </span><br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>
    
    </body>
</html>