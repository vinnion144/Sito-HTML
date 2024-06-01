<?php
    session_start();
    require("../backend/dbconfig.php");

    if(!isset($_SESSION["username"])){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferiti</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div class="homebar">
            <div class="parte-sinistra">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
                <div class="link"><a href="Chi-Siamo.html" class="destinazioni-media2">Chi siamo</a></div>
                <div class="link"><a  class="destinazioni-media" href="#destinazioni">Destinazioni</a></div>
            </div>

            <div class="parte-destra"> 

                <?php

                    $username = $_SESSION["username"];
                    echo <<<EOD
                        <div class='link'><a href='profilo.php' class='destinazioni-media3'><img src='../immagini/logo.png'></a></div>
                        <div class='link'><a href='../backend/logout.php' class='destinazioni-media3'>Log Out</a></div>
                    EOD;
                    $id = $_SESSION["ID"];

                    
                ?>
            </div>
            
        </div>
    </header>
    <div class="city.text-container">
        <?php
            $query = "SELECT destinations.pagina_nome, destinations.copertina, destinations.nome FROM destinations JOIN favorites 
            ON destinations.ID = favorites.Destination_ID WHERE favorites.User_ID = '$id'";
            $ris = $conn->query($query);

            if($ris->num_rows == 0){
                echo "<h2 style='text-align:center; color:black'>Non hai pagine preferite</h2>";
            }else{
                echo "<h2 style='text-align:center; color:black;;'>Le tue pagine preferite:</h2>";
                echo "<div class='grid-container'>";
                foreach($ris as $row){
                    $pagina_nome = $row["pagina_nome"];
                    $copertina = $row["copertina"];
                    $nome = $row["nome"];
                    echo <<<EOD
                            <div class="grid-item-30" style='border: 0px;'>
                                <a href='$pagina_nome'><img src='../immagini/$copertina' style='width:100%;height:100%;'></a>
                                <div class='preferiti-testo'>$nome</div>
                            </div>

                    EOD;
        
                }
                echo "</div>";
            }
        ?>
    </div>
    
    <footer>
        <ul class="footerbar">
            <li><p>Sito creato con la collaborazione di: Aloi Vincenzo, Vivenzio Francesco e Barbato Luca</p></li>
        </ul>
    </footer>

</body>
</html>