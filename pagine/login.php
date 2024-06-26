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
            <div class="parte-sinistra">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png"></a></div>
            </div>

            <div class="parte-destra">
                <div class="link" style='float:right;'><a href="register.php" class='destinazioni-media3'>Register</a></div>
            </div>
            
        </div>
    </header>
    <div class="content">

        <h1 style="color:black;">Log In</h1>
        <h2 style="color:black;">Welcome Back</h2>

        <div class="form">

            <form action="" method="POST">

                <table class="tabella">

                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" name="username" value="<?php echo $username?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password" required></td>
                    </tr>

                </table>

                <input type="submit" value="Invia">

            </form>

        </div>
    </div>

    

    <?php
        require("../data/dbconfig.php");
        if(isset($_POST["username"]) and isset($_POST["password"])){
            $query = "SELECT username, password FROM users WHERE username= '$username' and password = '$password'";

            $ris = $conn->query($query);

            if($ris->num_rows == 0){
                echo "<h2 style='text-align:center;color:black;'>Utente non trovato</h2>";
                echo "<a href='../backend/reset-password.php'><h3 style='text-align:center; color:black;'>Clicca qui' per resettare la password</h3></a>";
            }
            else{
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                echo "<h2 style='text-align:center;color:black;'>Login effettuato con successo, verrai reindirizzato fra pochi istanti</h2>";
                header("Refresh:2; url=../index.php");
            }
        }
    ?>

    <a href="https://wa.me/+393288874222/?text=Holiway Information Center" class="contact-link">
        <img src="../immagini/contactus.png" alt="" class="img-res">
    </a>
</body>
</html>