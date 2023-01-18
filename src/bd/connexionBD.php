<?php

function connexionBdd(){

    //include("../../include/mysql_inc.php");

    $conn = @mysqli_connect("tp-epua:3308", "richaval", "kwia6s9y");

    if (mysqli_connect_errno()) {
        $msg = "erreur ". mysqli_connect_error();
    } else {  
        $msg = "connecté au serveur " . mysqli_get_host_info($conn);
        mysqli_select_db($conn, "richaval");
    
        /*Encodage UTF8 pour les échanges avec la BD*/
        mysqli_query($conn, "SET NAMES UTF8");
    }
    return $conn;
}

?>