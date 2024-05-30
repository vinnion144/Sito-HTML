<?php
    session_start();
    require_once("dbconfig.php");
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = "";
        $soldi = "0";
        $paese = $_SESSION["Paese"];
        $echo = "Insufficient Fund";
        $_SESSION["echo"] = $echo;
        header("Location: ../pagine/$paese.php");
    }

    $controllo_soldi = "SELECT soldi FROM users WHERE username = '$username'";

    $ris = $conn->query("$controllo_soldi");
    
    foreach($ris as $row){
        $soldi = $row["soldi"];
    }
    if($soldi>=$_SESSION["Prezzo"]){
        $paese = $_SESSION["Paese"];
        $soldi = $soldi-$_SESSION["Prezzo"];
        $update_soldi = "UPDATE users SET soldi = '$soldi' WHERE username = '$username'";
        $conn->query("$update_soldi");
        $_SESSION["echo"] = "Transazione avvenuta con successo";
        header("Location: ../pagine/$paese.php");
    }else{
        $paese = $_SESSION["Paese"];
        $echo = "Insufficient Fund";
        $_SESSION["echo"] = $echo;
        header("Location: ../pagine/$paese.php");
    }
?>