<?php
    $pagename = basename($_SERVER["PHP_SELF"]);
    session_start();
    require("../data/dbconfig.php");

    if (isset($_SESSION["username"])) {
        $id = $_SESSION["ID"];
        $query = "SELECT destinations.pagina_nome FROM users JOIN favorites ON users.ID = favorites.User_ID 
        JOIN destinations ON favorites.Destination_ID = destinations.id WHERE favorites.User_ID = $id 
        AND destinations.pagina_nome = '$pagename'";

        $ris = $conn->query($query);

        if ($ris->num_rows == 0) {
            $favorite= 'false';
        }else{
            $favorite = 'true';
        }
    }

    if (!isset($_SESSION["echo"])){
        $_SESSION["echo"] = "";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Messico
        </title>
        <SCRIPT src="script.js"> </SCRIPT>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="../immagini/logo.png">
    </head>

    <body>
        <header>
            <div class="homebar2">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
                <div class="link"><a href="Chi-Siamo.php" class="destinazioni-media4">Chi siamo</a></div>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<div class='link'><a href='preferiti.php' class='preferiti-media'>Preferiti</a></div>";
                    }
                ?>
            </div>
        </header>

        <main>
            <div class="city-container">
                <section class="city-text-container">
                    <div class="div-row-col">

                        <div class="col-sx">
                            <div class="irrelevant-text-left">Messico</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Esplora le Meraviglie Archeologiche delle Civiltà Antiche:
                                    Iniziate il vostro viaggio con un tuffo nella storia millenaria del Messico, esplorando le antiche rovine delle civiltà Maya, Azteca e Zapoteca. Ammirate la grandiosità di Chichen Itza, con la sua iconica piramide di Kukulcán, o immergetevi nella misteriosa città perduta di Teotihuacan, dominata dalle maestose piramidi del Sole e della Luna.</p>
                                <p>Vivi la Magia delle Spiagge Caraibiche:
                                    Rilassatevi sulle incantevoli spiagge del Mar dei Caraibi, dove l'acqua turchese e le sabbie bianche vi accolgono in un paradiso tropicale. Godetevi il sole e il mare a Cancun, esplorate la vibrante vita marina nelle acque cristalline di Cozumel o scoprite la bellezza nascosta di Tulum, con le sue rovine maya che si affacciano sul mare.</p>
                                <p>Assapora la Cucina Tradizionale e i Sapori Esplosivi:
                                    Per gli amanti del cibo, il Messico offre un'autentica esplosione di sapori e aromi. Gustatevi i tacos al pastor nelle strade di Città del Messico, provate il guacamole fresco e le enchiladas in un autentico ristorante messicano o assaporate il piccante mole poblano a Puebla. E non dimenticate di completare il vostro pasto con un tequila o un mezcal artigianale!</p>
                                <p>Esperienze Uniche nella Cultura e nella Tradizione Messicana:
                                    Immergetevi nella ricca cultura e tradizione del Messico con una visita ai colorati mercati artigianali di Oaxaca, dove potrete acquistare opere d'arte locali e souvenir unici. Partecipate a una festa tradizionale messicana, ballando al ritmo dei mariachi e assaggiando le prelibatezze culinarie della regione.</p>
                                <p>Viaggio su Misura con Holiway:
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio in Messico un'esperienza indimenticabile e senza stress. Con il nostro team esperto e la nostra attenzione ai dettagli, vi assicureremo un viaggio su misura che supererà ogni vostra aspettativa.</p>
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/cittàdelmessico.webp   "></div>
                            </div>
                        </div>

                        <div class="col-dx">
                            <div class="image-container">
                                <div>
                                    <?php
                                        if (isset($_SESSION['username'])){
                                            if ($favorite =='false'){
                                            echo <<<EOD
                                            <a href="../backend/bookmark.php?favorite=$favorite&pagename=$pagename"><img src="../immagini/bookmark-false.png" class="bookmark"></a>
                                            <img class="img-res-2" src="../immagini/Kyoto.jpg">
                                            EOD;
                                            }else{
                                                echo <<<EOD
                                                    <a href="../backend/bookmark.php?favorite=$favorite&pagename=$pagename"><img src="../immagini/Bookmark_icon.png" class="bookmark"></a>
                                                    <img class="img-res-2" src="../immagini/Kyoto.jpg">
                                                EOD;
                                            }
                                        }else{
                                            echo <<<EOD
                                            <img class="img-res-2" src="../immagini/Kyoto.jpg">
                                            EOD;
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="testo-sotto-immagine">Perche' viaggiare in messico</div>
                            <div class="filler-text-right">
                                <p>Tra le rovine antiche degli imperi Maya e Azteco e le spiagge paradisiache del Mar dei Caraibi, un viaggio in Messico è un'immersione in un mondo di colori, sapori e tradizioni millenarie.</p>
                                <p style="margin-top: 10px;">In questo viaggio nell'incanto del Messico, si scopre una terra di contrasti e meraviglie, dove ogni angolo racconta una storia unica e affascinante. È un viaggio che non solo incanta e emoziona, ma che lascia un'impronta indelebile nella mente e nel cuore di chi ha il privilegio di compierlo, trasformando un semplice viaggio in un'avventura indimenticabile attraverso il cuore e l'anima di questa straordinaria nazione.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php
                                    $_SESSION["Prezzo"] = 1000;
                                    $_SESSION["Paese"] = "messico";
                                    echo "<a href='../backend/book.php?paginanome=$pagename'><p>A partire da 1100$</p></a>";
                                ?>
                                
                            </div>
                            <h2>
                                <?php
                                    if($_SESSION["echo"] != ""){
                                        $echo = $_SESSION["echo"];
                                        echo "<p style='color:black; text-align:center;'>$echo</p>";
                                        $_SESSION["echo"] = "";
                                    }
                                ?>
                            </h2>
                        </div>

                    </div>
                </section>
            </div>

            <div class="sub-text">
                <strong id="destinazioni"> Altre Destinazioni:</strong>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true}'>
                <div class="carousel-cell-lione"><a href="../pagine/lione.php" class="carousel-text">Francia</a></div>
                <div class="carousel-cell-sudafrica"><a href="../pagine/sudafrica.php" class="carousel-text">SudAfrica</a></div>
                <div class="carousel-cell-giappone"><a href="../pagine/giappone.php" class="carousel-text">Giappone</a></div>
                <div class="carousel-cell-stati-uniti"><a href="../pagine/statiuniti.php" class="carousel-text">Stati Uniti</a></div>
                <div class="carousel-cell-italia"><a href="../pagine/italia.php" class="carousel-text">Italia</a></div>
            </div>

            <a href="https://wa.me/+393288874222/?text=Holiway Information Center" class="contact-link" style="bottom:-100px; z-index:5;">
                <img src="../immagini/contactus.png" alt="" class="img-res">
            </a>

        </main>
        <footer>
            <ul class="footerbar">
                <li><p>Sito creato con la collaborazione di: Aloi Vincenzo, Vivenzio Francesco e Barbato Luca</p></li>
            </ul>
        </footer>
    </body>
</html>