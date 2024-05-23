<?php
    if (isset($_POST["register-username"])) {$username = $_POST["register-username"];} else {$username = "";}
	if (isset($_POST["register-password"])) {$password = $_POST["register-password"];} else {$password = "";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">

        <form action="" method="POST">

            <label for="register-username">Username:</label><input type="text" id="register-username" name="register-username" ></p>

            <label for="register-password">Password:</label><input type="password" id="password-username" name="register-password" ></p>
            <label for="confirm-password">Conferma Password: <input type="password" id="confirm-password" name="confirm-password" ></label></p>

            <input type="submit" value="Registrati">

        </form>

    </div>
    <?php

        require("../backend/dbconfig.php");
        if(isset($_POST["register-username"]) and isset($_POST["register-password"])) {
            if ($_POST["register-username"] == "" or $_POST["register-password"] == "") {
                echo "<p>username e password non possono essere vuoti!</p>";
                die("");
            } elseif ($_POST["register-password"] != $_POST["confirm-password"]){
                echo "<p>Le password inserite non corrispondono</p>";
                die("");
            }
                $query = "SELECT username FROM users WHERE username = '$username'";

                $ris = $conn->query($query);

                if($ris->num_rows > 0){
                    echo "Username gia' in uso";
                    die("");
                }
                else{
                    $register = "INSERT INTO users(username, password) VALUES('$username', '$password')";
                    $collegamento = $conn->query($register);
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;
                    $conn->close();
                    echo ("<p>Registrazione effettuata con successo, verrai reindirizzato fra pochi istanti</p>");
                    header("Refresh:5; url=../index.php");
                    }
            
            }

            
    ?>



</body>
</html>