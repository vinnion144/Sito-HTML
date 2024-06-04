<?php
    session_start();
    require_once("../data/dbconfig.php");
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $pagina_nome = $_GET["paginanome"];
        $id = $_SESSION["ID"];
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
            $query = "DELETE FROM holidays WHERE user_id = $id AND destinazione = '$pagina_nome'";
            $conn->query($query);
            header("Location: ../pagine/$paese.php");
    }
    }else{
        $username = "";
        $soldi = "0";
        $paese = $_SESSION["Paese"];
        $echo = "Non sei loggato";
        $_SESSION["echo"] = $echo;
        header("Location: ../pagine/$paese.php");
    }

    
?>