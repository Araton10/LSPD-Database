<?php
    $host = "localhost";
    $user = "root";
    $psw = "";
    $db_name = "lspd";

    $conn = mysqli_connect($host,$user,$psw,$db_name);

    if(!$conn){
        echo ("Errore di connessione");
    }else{
        echo("tutto ok");
    }
?>