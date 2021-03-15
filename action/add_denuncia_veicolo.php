<?php
    include '../config/db_driver.php';
    $denunciante = $_POST['denunciante'];
    $denunciato = $_POST['denunciato'];
    $data_d = $_POST['data'];
    $targa_auto = $_POST['targa'];
    $luogo = $_POST['luogo'];
    $firma_agente = $_POST['firma'];
    $denuncia = $_POST['descrizione'];

    //echo($denunciante."--".$denunciato."--".$data_d."--".$luogo."--".$firma_agente."--".$denuncia."--");

    $query = "INSERT INTO denuncia_veicoli (denunciante,denunciato,data_denuncia,targa,luogo,firma_agente,descrizione) VALUES ('".$denunciante."','".$denunciato."','".$data_d."','".$luogo."','".$firma_agente."','".$denuncia."','".$firma_agente."')";
    mysqli_query($conn,$query);

    header('Location: ../denuncia_veicolo.php?inserted=1')

?>