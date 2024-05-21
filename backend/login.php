<?php
    require_once("../backend/dbconfig.php");
    
    if(isset($_POST["username"])){
        $username = $_POST["username"];
    }else{
        $username = "";
    }

    if(isset($_POST["password"])){
        $password = $_POST["password"];
    }else{
        $password = "";
    }

    $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";

    $ris = $conn->query($query) or die("<p>Query fallita! ".$conn->error."</p>");

    if($ris->num_rows == 0){
        $conn->close();
        header("location: ../pagine/login.html");
    }else{
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $conn->close();
        header("location: ../index.php");
    }


    // require_once("../backend/dbconfig.php");

    // if(isset($_POST["username"])){
    //     $username = $_POST["username"];
    // }else{
    //     $username = "";
    // }

    // if(isset($_POST["password"])){
    //     $password = $_POST["password"];
    // }else{
    //     $password = "";
    // }

    // $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";

    // $ris = $conn->query($query) or die("<p>Query fallita! ".$conn->error."</p>");

    // if($ris->num_rows == 0){
    //     echo "Utente non trovato";
    //     $conn->close();
    // }else{

    //     $conn->close();
    //     header("location: ../principale/index.php");
    // }

?>