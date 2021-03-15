<?php
    include '../config/db_driver.php';
    $denunciante = $_POST['denunciante'];
    $denunciato = $_POST['denunciato'];
    $data_d = $_POST['data'];
    $luogo = $_POST['luogo'];
    $firma_agente = $_POST['firma'];
    $denuncia = $_POST['descrizione'];

    echo($denunciante."--".$denunciato."--".$data_d."--".$luogo."--".$firma_agente."--".$denuncia."--");

    $query = "INSERT INTO denuncia_generica (denunciante,denunciato,data_denuncia,luogo,firma_agente,denuncia) VALUES ('".$denunciante."','".$denunciato."','".$data_d."','".$luogo."','".$firma_agente."','".$denuncia."')";
    mysqli_query($conn,$query);

    header('Location: ../denuncia_generica.php?inserted=1')

?>