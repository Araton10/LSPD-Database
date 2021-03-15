<?php
  include '../config/db_driver.php';
    $nome_d = $_POST['nome'];
    $cognome_d = $_POST['cognome'];
    $data_d = $_POST['data'];
    $sesso_d = $_POST['sesso'];
    $tel_d = $_POST['telefono'];
    $lavoro_d = $_POST['lavoro'];

    $query = "INSERT INTO civili (nome,cognome,data_nascita,sesso,telefono,lavoro) VALUES ('".$nome_d."','".$cognome_d."','".$data_d."','".$sesso_d."','".$tel_d."','".$lavoro_d."')";
    mysqli_query($conn,$query);

    header('Location: ../scheda_civile.php?inserted=1')
?>