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
            Giappone
        </title>
        <SCRIPT src="script.js"> </SCRIPT>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="../immagini/logo.png">
    </head>

    <body>
        <header>
            <div class="homebar">
                <div class="link" style="padding:0"><a href="../index.php"><img src="../immagini/logo.png">Holiway</a></div>
                <div class="link"><a href="Chi-Siamo.html" class="destinazioni-media4">Chi siamo</a></div>
            </div>
        </header>

        <main>
            <div class="city-container">
                <section class="city-text-container">
                    <div class="div-row-col">

                        <div class="col-sx">
                            <div class="irrelevant-text-left">Giappone</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Esperienze uniche a Tokyo:
                                    Iniziate il vostro viaggio nell'effervescente metropoli di Tokyo, dove tradizione e modernità si fondono in un'armonia unica. Ammirate l'imponenza della Tokyo Skytree, passeggiando tra i grattacieli di Shibuya e i santuari secolari di Asakusa. Assaporate l'autentico sushi nei mercati di Tsukiji o Shibuya e immergetevi nella cultura del manga a Akihabara, il quartiere elettronico della città.</p>
                                <p>Avventure nelle Antiche Tradizioni di Kyoto:
                                    Proseguite il vostro viaggio nella storica Kyoto, dove i templi antichi e i tradizionali quartieri delle geishe vi porteranno indietro nel tempo. Ammirate la magnificenza del Tempio d'Oro (Kinkaku-ji), immergendovi nella quiete dei suoi giardini circostanti. Fate una passeggiata per le strade acciottolate di Gion, sperando di avvistare una geisha in abito tradizionale.</p>
                                <p>Esperienze Culinarie Indimenticabili:
                                    Per gli amanti del cibo, il Giappone offre un'esplosione di sapori unici e prelibatezze delizie. Assaporate il sushi freschissimo a Tokyo, gustatevi l'okonomiyaki, la frittata giapponese, a Hiroshima, o provate il ramen fumante nelle piccole botteghe di Osaka. E non dimenticatevi di completare la vostra esperienza culinaria con una cerimonia del tè tradizionale!</p>
                                <p>Viaggio su Misura con Holiway:
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio in Giappone un'esperienza indimenticabile e senza stress. Con il nostro team esperto e la nostra attenzione ai dettagli, vi assicureremo un viaggio su misura che supererà ogni vostra aspettativa.</p>
                                
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/viaggio-giappone.jpg"></div>
                            </div>
                        </div>

                        <div class="col-dx">
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/Kyoto.jpg"></div>
                            </div>
                            <div class="testo-sotto-immagine">Le tradizioni</div>
                            <div class="filler-text-right">
                                <p>Tra tradizioni millenarie e modernità futuristica, un viaggio in Giappone è un'esperienza avvincente che porta i viaggiatori in un mondo di contrasti affascinanti, dove antico e nuovo si fondono armoniosamente.</p>
                                <p style="margin-top: 10px;">In questo viaggio nell'anima del Giappone, si scopre una terra di contrasti e sorprese, dove antiche tradizioni convivono con la modernità più sfrenata. È un viaggio che non solo affascina e incanta, ma che lascia un'impronta indelebile nella mente e nel cuore di chi ha il privilegio di compierlo, aprendo la mente a nuove prospettive e ispirando un amore profondo per la cultura e la bellezza di questa straordinaria nazione.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php
                                    $_SESSION["Prezzo"] = 1100;
                                    $_SESSION["Paese"] = "giappone";
                                ?>
                                <a href="../backend/lose_money.php"><p>A partire da 1100$</p></a>
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