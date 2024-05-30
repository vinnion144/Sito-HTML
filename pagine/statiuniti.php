<?php
    session_start();
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
            Stati Uniti
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
            </div>
        </header>

        <main>
            <div class="city-container">
                <section class="city-text-container">
                    <div class="div-row-col">

                        <div class="col-sx">
                            <div class="irrelevant-text-left">Stati Uniti</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Scopri le Iconiche Città Americane:
                                    Inizia il tuo viaggio esplorando le città più iconiche degli Stati Uniti. Perditi nelle luci scintillanti di New York City, ammira il fascino storico di Washington D.C., sperimenta l'eccitazione di Las Vegas o immergiti nella cultura cosmopolita di Los Angeles. Ogni città ha la sua unica atmosfera e offerta di esperienze da scoprire.</p>
                                <p>Avventure nella Natura Selvaggia:
                                    Dai parchi nazionali alle catene montuose, dagli altopiani desertici alle coste selvagge, gli Stati Uniti offrono una varietà mozzafiato di paesaggi naturali. Esplora il Grand Canyon in Arizona, vela attraverso i fiordi dell'Alaska, o fai trekking nei parchi nazionali dello Utah. La natura americana ti stupirà con la sua bellezza e diversità.</p>
                                <p>Esperienze Uniche e Cultura Locale:
                                    Immergiti nella cultura locale degli Stati Uniti con esperienze uniche e autentiche. Assapora il barbecue del Texas, balla al ritmo del jazz a New Orleans, esplora le comunità Amish in Pennsylvania o assaggia il pesce fresco sulla costa della California. Ogni regione offre qualcosa di unico da scoprire e da gustare.</p>
                                <p>Viaggio su Misura con Holiway:
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio negli Stati Uniti un'esperienza indimenticabile e senza stress. Con il nostro team esperto e la nostra attenzione ai dettagli, vi assicureremo un viaggio su misura che supererà ogni vostra aspettativa.</p>
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/washington.jpg"></div>
                            </div>
                        </div>

                        <div class="col-dx">
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/unit2.avif"></div>
                            </div>
                            <div class="testo-sotto-immagine">The American Dream</div>
                            <div class="filler-text-right">
                                <p>In un paese dove il sogno è parte integrante del tessuto nazionale, un viaggio negli Stati Uniti d'America diventa un'avventura epica tra paesaggi mozzafiato, città pulsanti di energia e una ricca diversità culturale che abbraccia l'intero spettro umano.</p>
                                <p style="margin-top: 10px;">In questo viaggio di scoperta attraverso gli Stati Uniti d'America, si scopre non solo la grandezza dei suoi paesaggi e la vivacità delle sue città, ma anche la ricchezza della sua storia e della sua cultura. È un viaggio che lascia un'impronta indelebile nella mente e nel cuore di chi ha il privilegio di compierlo, alimentando il desiderio di tornare ancora e ancora a esplorare tutte le sue meraviglie.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php
                                    $_SESSION["Prezzo"] = 1200;
                                    $_SESSION["Paese"] = "statiuniti"
                                ?>
                                <a href="../backend/lose_money.php"><p>A partire da 1200$</p></a>
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