

<html>
    <head>

        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            Holiway
        </title>
        <link rel="icon" type="image/x-icon" href="immagini/logo.png">

        <SCRIPT src="script.js"> </SCRIPT>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
    <body>

        <header>
            <div class="homebar">
                <a href="index.html">
                    <img src="immagini/logo.png" width="110px" height="60px" id="logo">
                    Holiway
                </a>
                <a href="pagine/Chi-Siamo.html">Chi siamo</a>
                <a  class="destinazioni-media" href="#destinazioni">Destinazioni</a>
                <?php
                    session_start();
                    if(isset($_SESSION["username"])){
                        echo "<a href='pagine/profilo.php' class='foto-antia'><img src='immagini/logo.png'></a>";
                        echo "<a href='backend/logout.php'>Log Out</a>";
                    }
                    else{
                        echo "<a href='pagine/login.html' style='margin-left:62%;'>Log in</a>";
                        echo "<a href='pagine/register.html'>Register</a>";
                    }
                    
                ?>
                
            </div>
        </header>

        <main>

            <div class="slide-container">

                <div class="slide fade">
                    <img src="immagini/Kyoto.jpg"> </a>
                    <div class="text">Immergiti nella magica Kyoto...</div>
                </div>

                <div class="slide fade">
                    <img src="immagini/Messico.jpg"></a>
                    <div class="text">Messico per veri esploratori!</div>
                </div>

                <div class="slide fade">
                    <img src="immagini/Lione.jpg"></a> 
                    <div class="text">Scopri la bellezza romantica di Lione</div>
                </div>

                <div class="slide fade">
                    <img src="immagini/Sudafrica.jpg"></a>
                    <div class="text">Sudafrica...che meraviglia!</div> 
                </div>

                <a class="dietro" onclick="change(-1)">&#10094;</a>
                <a class="avanti" onclick="change(1)">&#10095;</a>
            </div>

            <script>
                var slideIndex = 1;
                let j = 0;
                var timer = setInterval(change, 6000);
                change(j);
                function change(j) {
                    if (j == 1 || j == -1 ) {
                        if (j==1) {
                            var i;
                            var x = document.getElementsByClassName("slide");
                            for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none"; 
                            }
                            slideIndex++;
                            if (slideIndex > x.length) {slideIndex = 1}
                            if (slideIndex < 1) {slideIndex = x.length} 
                            x[slideIndex-1].style.display = "block";
                            clearInterval(timer);
                            timer = setInterval(change, 6000);
                        } else {
                            var i;
                            var x = document.getElementsByClassName("slide");
                            for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none"; 
                            }
                            slideIndex--;
                            if (slideIndex > x.length) {slideIndex = 1} 
                            if (slideIndex < 1) {slideIndex = x.length}
                            x[slideIndex-1].style.display = "block";
                            clearInterval(timer);
                            timer = setInterval(change, 5000);
                        }
                    } else {
                        var i;
                        var x = document.getElementsByClassName("slide");
                        for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none"; 
                        }
                        slideIndex++;
                        if (slideIndex > x.length) {slideIndex = 1}
                        if (slideIndex < 1) {slideIndex = x.length}  
                        x[slideIndex-1].style.display = "block";
                    }
                }
            </script>

            <script src="script.js"></script>
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
            

            <!--
            <div class="grid-container">
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
                <div class="grid-item">
                    <img src="Messico.jpg">
                </div>
            </div>
            -->

            <div class="sub-text">
                <strong>Scelti per te</strong>
            </div>

            <div class="light-border"></div>
            <div class="irrelevant-text">La felicita' e' un modo di viaggiare, non uno stato da raggiungere</div>
            
            <div class="container">
                <div class="row">
                    <div class="element">
                        <img class="element-image" src="immagini/famiglia.jpg">
                    </div>
                    <div class="element">
                        <div class="element-text"> Famiglie</div>
                        <p class="element-text-p">proponiamo esperienze indimenticabili per famiglie.</p>
                        <p class="element-text-p"> Offriamo destinazioni adatte a tutte le età e interessi, garantendo strutture e servizi family-friendly. Dalle spiagge per i più piccoli alle avventure per gli amanti della natura, abbiamo soluzioni su misura. Per le famiglie culturali, proponiamo mete ricche di storia e tradizioni locali. Personalizziamo ogni dettaglio del vostro viaggio, assicurando un'esperienza senza stress e memorabile. Contattateci oggi per creare insieme il vostro viaggio perfetto in famiglia!</p>
                    </div>
                </div>

                <div class="row sortMe">
                    <div class="element">
                        <p class="element-text">Luna di miele</p>
                        <p class="element-text-p">offre esperienze romantiche e indimenticabili per le coppie appena sposate.</p>
                        <p class="element-text-p">Con destinazioni selezionate attentamente, proponiamo opzioni su misura per ogni preferenza. Sia che siate amanti della natura, desideriate relax su spiagge esotiche, o preferiate avventure culturali, personalizziamo ogni dettaglio, dall'itinerario alle sistemazioni. Lasciate che la nostra esperienza vi guidi per creare una luna di miele senza preoccupazioni, concentrandovi solo sul vostro amore. Contattateci oggi per iniziare il vostro viaggio di nozze da sogno!</p>
                    </div>
                    <div class="element">
                        <img class="element-image" src="immagini/luna-di-miele.jpeg">
                    </div>
                </div>
                
                <div class="row">
                    <div class="element">
                        <img class="element-image" src="immagini/viaggio-studio.png">
                    </div>
                    <div class="element">
                        <div class="element-text"> Vacanza Studio</div>
                        <p class="element-text-p">offre programmi accademici e avventure culturali in destinazioni stimolanti.</p>
                        <p class="element-text-p">Progettati per ispirare l'apprendimento e la scoperta, offriamo corsi linguistici, programmi tematici e supporto completo. Collaboriamo con istituti educativi prestigiosi, garantendo un equilibrio tra studio e svago. Oltre all'aspetto accademico, organizziamo attività ricreative e escursioni culturali per un'esperienza completa. Scegliete la nostra agenzia per un'avventura educativa senza confronti. Contattateci oggi per iniziare il vostro viaggio di studio e scoperta!</p>
                    </div>
                </div>
            </div>

            <div class="sub-text">
                <strong id="destinazioni">Destinazioni</strong>
            </div>

            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true}'>
                <div class="carousel-cell-lione"><a href="pagine/lione.php" class="carousel-text">Francia</a></div>
                <div class="carousel-cell-sudafrica"><a href="pagine/sudafrica.html" class="carousel-text">SudAfrica</a></div>
                <div class="carousel-cell-giappone"><a href="pagine/giappone.html" class="carousel-text">Giappone</a></div>
                <div class="carousel-cell-messico"><a href="pagine/messico.html" class="carousel-text">Messico</a></div>
                <div class="carousel-cell-stati-uniti"><a href="pagine/statiuniti.html" class="carousel-text">Stati Uniti</a></div>
                <div class="carousel-cell-italia"><a href="pagine/italia.html" class="carousel-text">Italia</a></div>
            </div>
                
        </main>
        
        <footer>
            <ul class="footerbar">
                <li><p>Sito creato con la collaborazione di: Aloi Vincenzo, Vivenzio Francesco e Barbato Luca</p></li>
            </ul>
        </footer>
        <a href="https://wa.me/+393288874222/?text=Holiway Information Center" class="contact-link">
            <img src="immagini/contactus.png" alt="" class="img-res">
        </a>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                sortSectionsFromRightToLeft("sortMe");
            });
        </script>
    </body>
</html>