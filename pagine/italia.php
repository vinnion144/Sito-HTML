<?php
    $pagename = basename($_SERVER["PHP_SELF"]);
    session_start();
    require("../backend/dbconfig.php");

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
            Italia
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
                <div class="link"><a href="Chi-Siamo.html" class="destinazioni-media4">Chi siamo</a></div>
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
                            <div class="irrelevant-text-left">Italia</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Scopri le Iconiche Città Italiane:
                                    Inizia il tuo viaggio esplorando le affascinanti città italiane. Perditi tra i canali di Venezia, ammira i tesori artistici di Firenze, passeggiando per le strade rinascimentali, oppure percorri le antiche strade di Roma, ammirando il Colosseo e il Pantheon. Ogni città è un tesoro di storia, arte e cultura.</p>
                                <p>Assapora la Cucina Italiana:
                                    Goditi un'autentica esperienza gastronomica italiana, assaggiando piatti tradizionali e prelibatezze locali. Gusta la pizza napoletana nei vicoli di Napoli, deliziosa e fragrante, o assapora i formaggi e i salumi della tradizione toscana nelle colline della Val d'Orcia. E non dimenticare di completare ogni pasto con un bicchiere di vino italiano, rinomato in tutto il mondo.</p>
                                <p>Esplora i Paesaggi Incantevoli:
                                    Dai panorami mozzafiato delle Cinque Terre alle colline del Chianti, dall'affascinante costa della Costiera Amalfitana alle vette delle Dolomiti, l'Italia offre una varietà di paesaggi da togliere il fiato. Esplora le campagne pittoresche, rilassati sulle spiagge di sabbia dorata o avventurati nei sentieri montani per un'esperienza naturale indimenticabile.</p>
                                <p>Scopri la Storia e la Cultura Antica:
                                    Immergiti nella storia millenaria e nella cultura vibrante dell'Italia con visite ai siti archeologici, ai musei e ai monumenti storici. Ammira i capolavori artistici della Galleria degli Uffizi a Firenze, esplora le rovine di Pompei o visita il maestoso Colosseo di Roma, simbolo dell'antica grandezza dell'Impero Romano.</p>
                                <p>Viaggio su Misura con Holiway
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio in Italia un'esperienza indimenticabile e senza stress. Con il nostro team esperto e la nostra attenzione ai dettagli, vi assicureremo un viaggio su misura che supererà ogni vostra aspettativa.</p>
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/montagneitalia.webp"></div>
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
                            <div class="testo-sotto-immagine">Mare Nostrum</div>
                            <div class="filler-text-right">
                                <p>Tra le colline rigogliose della Toscana e le acque scintillanti della Costiera Amalfitana, un viaggio in Italia è un'esperienza che abbraccia i sensi e l'anima, trasportando i viaggiatori in un mondo di bellezza senza tempo e cultura millenaria.</p>
                                <p style="margin-top: 10px;">In questo viaggio nell'anima dell'Italia, si scopre una terra di contrasti e sorprese, dove ogni angolo racconta una storia unica e avvincente. È un viaggio che non solo affascina e incanta, ma che lascia un'impronta indelebile nella mente e nel cuore di chi ha il privilegio di compierlo, trasformando un semplice viaggio in un'avventura indimenticabile attraverso il cuore e l'anima di questa straordinaria nazione.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php
                                    $_SESSION["Prezzo"] = 700;
                                    $_SESSION["Paese"] = "italia";
                                ?>
                                <a href="../backend/lose_money.php"><p>A partire da 700$</p></a>
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
                <div class="carousel-cell-messico"><a href="../pagine/messico.php" class="carousel-text">Messico</a></div>
                <div class="carousel-cell-stati-uniti"><a href="../pagine/statiuniti.php" class="carousel-text">Stati Uniti</a></div>
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