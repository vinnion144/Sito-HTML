<?php
    session_start();
    require("dbconfig.php");
    $favorite = $_GET["favorite"];
    $pagename = $_GET["pagename"];
    $id = $_SESSION["ID"];

    $query1 = "SELECT ID FROM destinations WHERE pagina_nome = '$pagename'";

    $ris = $conn->query($query1);

    foreach ($ris as $row) {
        $pageid = $row['ID'];
    }

    if ($favorite == "false") {
        $query = "INSERT INTO favorites (User_ID, Destination_ID) VALUES('$id','$pageid')";
        $ris = $conn->query($query);
    }else{
        $query = "DELETE FROM favorites WHERE User_ID = '$id' AND Destination_ID = '$pageid'";
        $ris = $conn->query($query);
    }

    header("Location: ../pagine/$pagename");
?>