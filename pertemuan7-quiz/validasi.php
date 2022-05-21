<!DOCTYPE html>
<html>
    <head>
        <title>Quiz Pemrograman Web</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>  

    <h2>PHP Form Validation</h2>
    <h4>oleh: Muhammad Daffa Arviano Putra - 120103038</h4>
    <p><span class="error">* required field</span></p>
    <form method="post" action="" name="input">  
        Name: <input type="text" name="name" value=""><span class="error"> * </span><br><br>
        E-mail: <input type="text" name="email" value=""><span class="error"> * </span><br><br>
        Website: <input type="text" name="website" value=""><span class="error"></span><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error"> * </span><br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    <?php
    if (isset($_POST['submit'])) { 
        echo "<h2>Your Input:</h2>";
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender'])) {
            echo "Anda tidak mengisi semua kolom yang required!";
        } else {
            echo $_POST['name'] . "<br>";
            echo $_POST['email'] . "<br>";
    
            if (isset($_POST['website'])) echo $_POST['website'] . "<br>";
            if (isset($_POST['comment'])) echo $_POST['comment'] . "<br>";
            
            echo $_POST['gender'] . "<br>";
        }
    }
    ?>
    </body>
</html>