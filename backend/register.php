

<?php

    require_once("dbconfig.php");

    if($_POST["register-username"]){
        $username = $_POST["register-username"];
    }
    else{
        $username = "";
    }

    if($_POST["register-password"]){
        $password = $_POST["register-password"];
    }
    else{
        $password = "";
    }

    $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";

    if($conn->query($query)){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $conn->close();
        header("location: ../principale/index.php");

    }else{
        die("<p> Query Fallita!</p>");
    }

?>