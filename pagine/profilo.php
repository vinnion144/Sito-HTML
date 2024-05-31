<?php
    session_start();
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("location: ../index.php");
    }
    require("../backend/dbconfig.php");
    $data = "SELECT username, password, nome, cognome, soldi, id FROM users WHERE username = '$username'";

    $ris = $conn->query($data);
    
    foreach ($ris as $row){
        $id = $row["id"];
        $username = $row["username"];
        $nome = $row["nome"];
        $cognome = $row["cognome"];
        $soldi = $row["soldi"];
    }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profilo</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>

    <header>
            <div class="homebar">
                <div class="parte-sinistra">
                    <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
                    <div class="link"><a href="Chi-Siamo.html" class="destinazioni-media2">Chi siamo</a></div>
                    <div class="link"><a  class="destinazioni-media" href="../index.php">Destinazioni</a></div>
                </div>

                <div class="parte-destra"> 

                    <?php
                        if(isset($_SESSION["username"])){
                            echo <<<EOD
                                <div class='link'><a href='profilo.php' class='destinazioni-media3'><img src='../immagini/logo.png'></a></div>
                                <div class='link'><a href='../backend/logout.php' class='destinazioni-media3'>Log Out</a></div>
                            EOD;
                        }
                        else{
                            echo <<<EOD
                                <div class="link" style='float:right;'"><a href="login.php" class='destinazioni-media3'>Log in</a></div>
                                <div class="link" style='float:right;'><a href="register.php" class='destinazioni-media3'>Register</a></div>    
                            EOD;
                        }
                        
                    ?>
                </div>
                
            </div>
        </header>
        
        <div class="content">
            
            <h1 style="color:black;">Dati personali</h1>

            <form action="" method="POST">
                <table class="tabella">
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" name="username" id="username" <?php echo "value='$username'"?>></td>
                    </tr>
                    <tr>
                        <td><label for="nome">Nome:</label></td>
                        <td><input type="text" name="nome" id="nome" <?php echo "value='$nome'"?>></td>
                    </tr>
                    <tr>
                        <td><label for="cognome">Cognome:</label></td>
                        <td><input type="text" name="cognome" id="cognome" <?php echo "value='$cognome'"?>></td>

                    </tr>
                    <tr>
                        <td><label for="soldi">Soldi:</label></td>
                        <td><input type="text" name="soldi" id="soldi" <?php echo "value='$soldi'"?>></td>
                        
                    </tr>
                    
                    
                </table>

                <input type="submit" value="Aggiorna">

            </form>
        </div>

        <?php
            if(isset($_POST["username"])){
                $username = $_POST["username"];
                $nome = $_POST["nome"];
                $cognome = $_POST["cognome"];
                $soldi = $_POST["soldi"];
                $dati = "UPDATE users SET username = '$username', nome = '$nome', cognome = '$cognome', soldi='$soldi' WHERE id = $id";
                $ris = $conn->query($dati);
                echo "<h2 style='text-align:center; color:black;'>Dati aggiornati con successo</h2>";
            }
        ?>

    </body>
</html>