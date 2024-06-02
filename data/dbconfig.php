<?php 
    $conn = new mysqli("localhost:3307", "root", "","sito-html");
    if($conn->connect_error){
        die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
    }
?>