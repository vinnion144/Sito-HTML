<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../style.css">
</head>


<body>

    <header>

        <div class="homebar">
                <img src="../immagini/logo.png" width="110px" height="60px" id="logo">
                <text style="color: white; font-size: 30px; font-family: Arial;">Holiway</text>
        </div>

    </header>

    <div class="form">

        <form action="" method="POST">

            Username: <input type="text" id="username" name="username"></p>
            Password: <input type="text" id="password" name="password"></p>
            <input type="submit" text="Invia">

        </form>

    </div>
</body>
</html>


<?php

    require("../backend/dbconfig.php");

    if(isset($_POST["username"])){
        $username = $_POST["username"];
    }else{
        $username = "";
    }

    if(isset($_POST["password"])){
        $password = $_POST["password"];
    }else{
        $password = "";
    }

    $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";

    $ris = $conn->query($query) or die("<p>Query fallita! ".$conn->error."</p>");

    if($ris->num_rows == 0){
        echo "Utente non trovato";
        $conn->close();
    }else{
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $conn->close();
        header("location: ../principale/index.php");
    }

?>