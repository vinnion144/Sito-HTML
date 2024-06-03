<?php
    session_start();
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("location: ../index.php");
    }
    require("../data/dbconfig.php");
    $data = "SELECT username, password, nome, cognome, soldi, icona, id FROM users WHERE username = '$username'";

    $ris = $conn->query($data);
    
    foreach ($ris as $row){
        $id = $row["id"];
        $username = $row["username"];
        $nome = $row["nome"];
        $cognome = $row["cognome"];
        $soldi = $row["soldi"];
        $icona = $row["icona"];
    }
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $soldi = $_POST["soldi"];
        if(isset($_POST["Icon"])){$icona = $_POST["Icon"];}
        $dati = "UPDATE users SET username = '$username', nome = '$nome', cognome = '$cognome', soldi='$soldi', icona='$icona' WHERE id = '$id'";
        $ris = $conn->query($dati);
        header("profilo.php");
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
                    <div class="link"><a href="Chi-Siamo.php" class="destinazioni-media2">Chi siamo</a></div>
                </div>

                <div class="parte-destra"> 

                    <?php
                        if(isset($_SESSION["username"])){
                            echo <<<EOD
                                <div class="link" style="padding:0"><a href="profilo.php"><img src="../immagini/Icona$icona.jpg" class="IconaImg" style="height:85px; width:85px"></a></div>
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

                <div class="box_icone">

                    <div class="box_icona">
                        <input type="radio" name="Icon" value="1" id="Icona1" class="HideInput">
                        <label class="labelIcon" for="Icona1">
                            <img class="IconaImg" src="../immagini/Icona1.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="2" id="Icona2" class="HideInput">
                        <label class="labelIcon" for="Icona2">
                            <img class="IconaImg" src="../immagini/Icona2.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="3" id="Icona3" class="HideInput">
                        <label class="labelIcon" for="Icona3">
                            <img class="IconaImg" src="../immagini/Icona3.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="4" id="Icona4" class="HideInput">
                        <label class="labelIcon" for="Icona4">
                            <img class="IconaImg" src="../immagini/Icona4.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="5" id="Icona5" class="HideInput">
                        <label class="labelIcon" for="Icona5">
                            <img class="IconaImg" src="../immagini/Icona5.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="6" id="Icona6" class="HideInput">
                        <label class="labelIcon" for="Icona6">
                            <img class="IconaImg" src="../immagini/Icona6.jpg" alt="">
                        </label>
                    </div>
                    <div class="box_icona">
                        <input type="radio" name="Icon" value="7" id="Icona7" class="HideInput">
                        <label class="labelIcon" for="Icona7">
                            <img class="IconaImg" src="../immagini/Icona7.jpg" alt="">
                        </label>
                    </div>

                </div>

                <input type="submit" value="Aggiorna">

            </form>
        </div>
    </body>

</html>