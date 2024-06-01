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
            Sudafrica
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
                            <div class="irrelevant-text-left">Sudafrica</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Safari nella Terra dei Grandi Cinque:
                                    Iniziate il vostro viaggio con un emozionante safari nelle rinomate riserve private del Sud Africa. Avrete l'opportunità di avvistare i maestosi leoni, gli eleganti elefanti, i potenti rinoceronti, i leopardi agili e i bufali imponenti - i famosi "Big Five" - mentre esplorate la vastità della savana africana.</p>
                                <p>Esperienze Indimenticabili a Città del Capo:
                                    Proseguite il vostro viaggio nella vibrante Città del Capo, situata tra l'iconica Table Mountain e l'incantevole Oceano Atlantico. Ammirate lo spettacolare panorama dalla cima della Table Mountain, esplorate i mercati vivaci di Victoria & Alfred Waterfront e assaporate la deliziosa cucina locale lungo la famosa strada gastronomica di Kloof Street.</p>
                                <p>Scoprite la Cultura e la Storia del Sud Africa:
                                    Immergetevi nella ricca storia e cultura del Sud Africa con una visita a Robben Island, dove Nelson Mandela fu imprigionato per anni durante l'apartheid. Esplorate il suggestivo quartiere di Bo-Kaap a Città del Capo, con le sue case colorate e la sua vibrante atmosfera. O scoprite la storia dell'umanità presso il sito archeologico di Sterkfontein, dove sono stati scoperti i resti fossili di antichi ominidi.</p>
                                <p>Avventure nella Natura Selvaggia della Garden Route:
                                    Per gli amanti dell'avventura, la Garden Route offre un paradiso di bellezza naturale e attività emozionanti. Scoprite le spiagge incontaminate, le foreste pluviali lussureggianti e le spettacolari formazioni rocciose lungo questa strada costiera mozzafiato. Dalle escursioni nella natura alla degustazione di vini locali, la Garden Route promette un'esperienza indimenticabile per tutti i gusti.</p>
                                <p>Viaggio su Misura con Holiway:
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio in Sud Africa un'esperienza senza pari. Con il nostro team esperto e la nostra attenzione ai dettagli, vi assicureremo un viaggio su misura che supererà tutte le vostre aspettative.</p>
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/safari.jpg"></div>
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
                            <div class="testo-sotto-immagine">La bellezza</div>
                            <div class="filler-text-right">
                                <p>Nel calore avvolgente dell'Africa meridionale, un viaggio diventa una danza tra culture millenarie e paesaggi selvaggi che catturano l'anima. Il Sud Africa, con la sua ricchezza di tradizioni e la maestosità della natura, offre un'esperienza unica e indimenticabile per chiunque abbia il privilegio di esplorarlo. </p>
                                <p style="margin-top: 10px;">E mentre il sole sprofonda oltre l'orizzonte, dipingendo il cielo con sfumature di rosso e arancione, si comprende il vero spirito del Sud Africa: un'armonia perfetta tra la magnificenza della natura e la ricchezza delle sue genti. In questo viaggio nel cuore dell'Africa meridionale, si scopre non solo un paese, ma un universo di emozioni e scoperte che rimarranno per sempre incise nella memoria.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php
                                    $_SESSION["Prezzo"] = 800;
                                    $_SESSION["Paese"] = "sudafrica";
                                ?>
                                <a href="../backend/lose_money.php"><p>A partire da 800$</p></a>
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
                <div class="carousel-cell-giappone"><a href="../pagine/giappone.php" class="carousel-text">Giappone</a></div>
                <div class="carousel-cell-messico"><a href="../pagine/messico.php" class="carousel-text">Messico</a></div>
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