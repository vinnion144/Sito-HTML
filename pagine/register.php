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
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="homebar">
            <div class="parte-sinistra">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png"></a></div>
            </div>

            <div class="parte-destra">
                <div class="link" style='float:right;'><a href="login.php" class='destinazioni-media3'>Log in</a></div>
            </div>
            
        </div>
    </header>

    <div class="content">

        <h1 style="color:black;">Welcome to Holiway</h1>
        <h2 style="color:black">Fill to register</h2>

        <div class="form">

            <form action="" method="POST">
                

            <table class="tabella">
                    
                    <tr>
                        <td><label for="register-username">Username:</label></td>
                        <td><input type="text" id="register-username" name="register-username" required></td>
                    </tr>
                    <tr>
                        <td><label for="register-password">Password:</label></td>
                        <td><input type="password" id="register-password" name="register-password" required></td>
                    </tr>
                    <tr>
                        <td><label for="confirm-password">Conferma Password:</label></td>
                        <td><input type="password" id="confirm-password" name="confirm-password" required></td>
                    </tr>
        

                </table>
                <input type="submit" value="Registrati" class="pulsante-centrato">



            </form>

        </div>
    </div>
    
    <?php

        require("../data/dbconfig.php");
        if(isset($_POST["register-username"]) and isset($_POST["register-password"])) {
            if ($_POST["register-username"] == "" or $_POST["register-password"] == "") {
                echo "<h2 style='text-align:center;color:black;'>Username e password non possono essere vuoti!</h2>";
                die("");
            } elseif ($_POST["register-password"] != $_POST["confirm-password"]){
                echo "<h2 style='text-align:center;color:black;'>Le password inserite non corrispondono</h2>";
                die("");
            }
                $query = "SELECT username FROM users WHERE username = '$username'";

                $ris = $conn->query($query);

                if($ris->num_rows > 0){
                    echo "<h2 style='text-align:center;color:black;'>Username gia' in uso</h2>";
                    die("");
                }
                else{
                    $register = "INSERT INTO users(username, password) VALUES('$username', '$password')";
                    $collegamento = $conn->query($register);
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;
                    $conn->close();
                    echo ("<h2 style='text-align:center;color:black;'>Registrazione effettuata con successo, verrai reindirizzato fra pochi istanti</h2>");
                    header("Refresh:5; url=../index.php");
                    }
            
            }

            
    ?>

    <a href="https://wa.me/+393288874222/?text=Holiway Information Center" class="contact-link">
        <img src="../immagini/contactus.png" alt="" class="img-res">
    </a>
</body>
</html>