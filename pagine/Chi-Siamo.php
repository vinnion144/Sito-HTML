<?php
    session_start();
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
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
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contattaci</title>
    <link rel="icon" type="image/x-icon" href="../immagini/logo.png">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="homebar">
            <div class="parte-sinistra">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
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

    <main>
        <div class="grid-container">
            <div class="grid-item-30">
                <h1 class="chi-siamo-testo-h1">Vincenzo Aloi</h1>
                <p class="chi-siamo-testo">Vincenzo Aloi, ha intrapreso un affascinante percorso di studi che ha
                    plasmato la sua crescita personale e professionale. Sin da giovane, ha dimostrato una passione
                    innata per l'apprendimento e l'esplorazione intellettuale, un trait che lo ha portato a
                    intraprendere un viaggio accademico pieno di scoperte e realizzazioni.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">Il suo percorso di studi ha avuto inizio presso
                    l'istituto superiore della sua città natale, dove si distinse per la sua dedizione e il suo impegno.
                </p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">Dopo aver completato brillantemente il liceo,
                    Vincenzo ha preso la decisione di intraprendere un percorso universitario che potesse soddisfare le
                    sue aspettative. Ha scelto di iscriversi alla facoltà di Ingegneria Informatica, attratto dalla
                    possibilità di combinare la sua passione per la tecnologia con la sua abilità analitica.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">Dopo anni di duro lavoro e dedizione, Vincenzo ha
                    conseguito brillantemente alla laurea magistrale in Ingegneria Informatica con una tesi innovativa
                    che ha attirato l'attenzione degli esperti del settore.</p>
            </div>
            <div class="grid-item-30">
                <h1 class="chi-siamo-testo-h1">Francesco Vivenzio</h1>
                <p class="chi-siamo-testo">Francesco Vivenzio, un giovane determinato e appassionato di conoscenza, ha
                    intrapreso un percorso accademico ricco di sfide e successi. Dopo aver completato il liceo con
                    eccellenti risultati, Francesco ha deciso di seguire la sua passione per la tecnologia iscrivendosi
                    alla facoltà di Ingegneria Informatica presso l'università locale.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">Durante gli anni universitari, Francesco si è
                    distinto per la sua dedizione allo studio e il suo impegno nel perseguire la sua carriera
                    accademica.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">Dopo aver conseguito brillantemente la laurea
                    magistrale in Ingegneria Informatica, Francesco ha continuato il suo percorso di formazione con
                    corsi di specializzazione nel campo dell'intelligenza artificiale e della cybersecurity. Oggi,
                    Francesco è un professionista stimato nel settore dell'informatica, con una carriera in costante
                    crescita e nuove sfide da affrontare ogni giorno. </p>
            </div>
            <div class="grid-item-30">
                <h1 class="chi-siamo-testo-h1">Luca Barbato</h1>
                <p class="chi-siamo-testo">Luca Barbato, un giovane intraprendente e appassionato di tecnologia, ha
                    intrapreso un percorso accademico caratterizzato da impegno e determinazione. Dopo aver completato
                    con eccellenza il suo percorso al liceo, Luca ha deciso di seguire la sua passione iscrivendosi alla
                    facoltà di Ingegneria Informatica presso l'università locale.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">
                    Durante gli anni universitari, Luca si è distinto per il suo impegno nello studio e la sua
                    partecipazione attiva alla vita accademica. Ha collaborato a progetti di ricerca e ha partecipato a
                    corsi extra per ampliare le sue conoscenze nel campo dell'informatica.</p>
                <p class="chi-siamo-testo" style="margin-top: 10px;">
                    Dopo aver ottenuto brillantemente la laurea magistrale in Ingegneria Informatica, Luca ha proseguito
                    il suo percorso di formazione con corsi specializzati in intelligenza artificiale e sviluppo
                    software. Oggi, Luca è un professionista stimato nel settore dell'informatica, con una carriera in
                    costante crescita e nuove sfide da affrontare.</p>
            </div>
        </div>
        <div class="video_container">
            <video src="../video/video.mp4" type="video/mp4" loop="true" autoplay muted="true" class="video"></video>
        </div>
    </main>
    <footer>
        <ul class="footerbar">
            <li>
                <p>Sito creato con la collaborazione di: Aloi Vincenzo, Vivenzio Francesco e Barbato Luca</p>
            </li>
        </ul>
    </footer>
</body>

</html>