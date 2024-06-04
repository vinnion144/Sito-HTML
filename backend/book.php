<?php
    session_start();
    $pagina_nome=$_GET["paginanome"];
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
                    <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
                </div>

                <div class="parte-destra"> 
                    <div class="link" style="padding:0"><a href="profilo.php"><img src="../immagini/$icona.jpg" class="IconaImg" style="height:85px; width:85px"></a></div>
                    <div class='link'><a href='../backend/logout.php' class='destinazioni-media3'>Log Out</a></div>
                </div>
                
            </div>
        </header>

        <div class="content">
            
            <h1 style="color:black;">Book your Holiday</h1>
            <h2 style="color:black">Fill to book</h2>
            <br>
            <br>
            <div class="form">

                <form action="" method="POST">
                
                    <table class="tabella">

                        <tr>
                            <td><label for="data_inizio">Data di inzio:</label></td>
                            <td><input type="date" id="data_inizio" name="data_inizio" required></td>
                        </tr>
                        <tr>
                            <td><label for="data_fine">Data di fine:</label></td>
                            <td><input type="date" id="data_fine" name="data_fine" required></td>
                        </tr>
                        <tr>
                            <td><label for="persone">Persone:</label></td>
                            <td><input type="number" max="9" min="1" id="persone" name="persone" required></td>
                        </tr>
            

                    </table>
                    <br>
                    <br>
                    <input type="submit" value="Prenota" class="pulsante-centrato">

                </form>

                <?php

                    if(isset($_POST["data_inizio"]) && isset($_POST["data_fine"]) && isset($_POST["persone"])) {
                        $id = $_SESSION["ID"];
                        $check = "SELECT destinazione, user_id FROM holidays WHERE destinazione = '$pagina_nome' AND user_id = $id";
                        $ris = $conn->query($check);
                        if($ris->num_rows > 0){
                            $_SESSION["echo"] = "Hai gia' una vacanza prenotata!";
                            header("Location: ../pagine/$pagina_nome");
                        }
                        $data_inizio = $_POST["data_inizio"];
                        $data_fine = $_POST["data_fine"];
                        $persone = $_POST["persone"];
                        $today = date("Y-m-d h:i:sa");
                        if ($data_inizio < $today or $data_fine < $data_inizio) {
                            echo ("<h2 style='text-align:center;color:black;'>Date non disponibli o non corettamente inserite</h2>");
                        }
                        else{
                            $holiday = "INSERT INTO holidays(user_id, destinazione, data_inizio, data_fine, persone) VALUES('$id', '$pagina_nome', '$data_inizio', '$data_fine', '$persone')";
                            $collegamento = $conn->query($holiday);
                            // $book = "INSERT INTO book(User_ID, Holiday_ID) VALUES('$id', 'holiday-id')";
                            $conn->close();
                            echo ("<h2 style='text-align:center;color:black;'>Verifying transaction.....</h2>");
                            header("Refresh:2; url=lose_money.php?paginanome=$pagina_nome");
                        }

                    }
                ?>

            </div>
        </div>

        <a href="https://wa.me/+393288874222/?text=Holiway Information Center" class="contact-link">
            <img src="../immagini/contactus.png" alt="" class="img-res">
        </a>

    </body>
</html>