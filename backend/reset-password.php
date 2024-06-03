<?php
    if(isset($_POST["username"])){$username =$_POST["username"];}else{$username = "";}
    if(isset($_POST["password"])){$password =$_POST["password"];}else{$password = "";}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <div class="homebar">
            <div class="parte-sinistra">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png"></a></div>
            </div>

            <div class="parte-destra">
                <div class="link" style='float:right;'><a href="../pagine/register.php" class='destinazioni-media3'>Register</a></div>
                <div class="link" style='float:right;'><a href="../pagine/login.php" class='destinazioni-media3'>Log in</a></div>
            </div>
            
        </div>
    </header>

    <div class="content">

        <h2 style="color:black;">Reset Password</h2>

            <form action="" method="post">

                <table class="tabella">

                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" name="username"  value="<?php echo "$username"?>" required></td>
                    </tr>

                    <tr>
                        <td><label for="password">Nuova Password:</label></td>
                        <td><input type="password" id="password" name="password" required></td>
                    </tr>

                    <tr>
                        <td><label for="confirm-password">Conferma Password:</label></td>
                        <td><input type="password" id="confirm-password" name="confirm-password" required></td>
                    </tr>

                </table>

                <button type="submit">Reset</button>

            </form>
    </div>

    <?php
        require("../data/dbconfig.php");

        if(isset($_POST["username"])){
            if($_POST["password"] != $_POST["confirm-password"]){
                echo "<h2 style='text-align:center; color:black;'>Le due password non combaciano</h2>";
            }else{
                $username = $_POST["username"];
                $password = $_POST["password"];
                $query= "SELECT username FROM users WHERE username = '$username'";
                $ris = $conn->query($query);

                if($ris->num_rows == 0){
                    echo "<h2 style='text-align:center; color:black;'>Nessun utente corrisponde all'email data</h2>";
                }else{
                    $query = "UPDATE users SET password = '$password' WHERE username = '$username'";
                    $ris = $conn->query($query);
                    echo "<h2 style='text-align:center; color:black;'>Password aggiornata con successo</h2>";
                    header("Refresh:2; url=../pagine/login.php");
                    
                }
            }
        }
    ?>
</body>

</html>