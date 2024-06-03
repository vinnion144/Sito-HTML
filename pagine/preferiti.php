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

    <div class="city.text-container">
        <?php
            $query = "SELECT destinations.pagina_nome, destinations.copertina, destinations.nome FROM destinations JOIN favorites 
            ON destinations.ID = favorites.Destination_ID WHERE favorites.User_ID = '$id'";
            $ris = $conn->query($query);

            if($ris->num_rows == 0){
                echo "<h2 style='text-align:center; color:black'>Non hai pagine preferite</h2>";
                header("Refresh:2; url=../index.php");
            }else{
                echo "<h2 style='text-align:center; color:black;;'>Le tue pagine preferite:</h2>";
                echo "<div class='grid-container'>";
                foreach($ris as $row){
                    $pagina_nome = $row["pagina_nome"];
                    $copertina = $row["copertina"];
                    $nome = $row["nome"];
                    $testo = file_get_contents("../testi/$nome.txt");
                    echo <<<EOD
                            <div class="grid-item-30" style='border: 0px;'>

                                <div class="favorite-card">
                                    <div class="favorite-card__img">
                                        <img src="../immagini/$copertina" alt="$copertina">
                                    </div>
                                    <div class="favorite-card__testo">
                                        <p><a href="$pagina_nome">$nome</a></p>
                                        <p>$testo</p>
                                    </div>
                                </div>
                            </div>

                    EOD;
        
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>