<?php
    if(isset($_POST["username"])){$username=$_POST["username"];}else{$username= "";}
    if(isset($_POST["password"])){$password=$_POST["password"];}else{$password= "";}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>


<body>

    <header>

        <div class="homebar">
                <a href="../index.php"><img src="../immagini/logo.png" width="110px" height="60px" id="logo"></a>
                <a href="../index.php"><text style="color: white; font-size: 30px; font-family: Arial;">Holiway</text></a>
        </div>

    </header>

    <div class="form">

        <form action="" method="POST">

            <label for="username">Username:</label><input type="text" id="username" name="username"></p>
            <label for="password">Password:</label><input type="password" id="password" name="password"></p>
            <input type="submit" value="Invia">

        </form>

    </div>

    <?php
        require("../backend/dbconfig.php");
        if(isset($_POST["username"]) and isset($_POST["password"])){
            $query = "SELECT username, password FROM users WHERE username= '$username' and password = '$password'";

            $ris = $conn->query($query);

            if($ris->num_rows == 0){
                echo "Utente non trovato";
            }
            else{
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                echo "Login effettuato con successo";
                header("Refresh:2; url=../index.php");
            }
        }
    ?>
    
</body>
</html>