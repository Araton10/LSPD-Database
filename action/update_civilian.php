<?php
  include '../config/db_driver.php';
    $nome_d = $_POST['nome'];
    $cognome_d = $_POST['cognome'];
    $data_d = $_POST['data'];
    $sesso_d = $_POST['sesso'];
    $tel_d = $_POST['telefono'];
    $lavoro_d = $_POST['lavoro'];
    $id_edit = $_POST['id'];

    $query = "UPDATE civili SET nome='".$nome_d."', cognome='".$cognome_d."', data_nascita='".$data_d."', telefono='".$tel_d."', lavoro='".$lavoro_d."' WHERE id='".$id_edit."'";
    mysqli_query($conn,$query);

    echo($nome_d);
    echo("------");
    echo($cognome_d);
    echo("------");
    echo($data_d);
    echo("------");
    echo($sesso_d);
    echo("------");
    echo($tel_d);
    echo("------");
    echo($lavoro_d);
    echo("------");
    echo($id_edit);
    echo("------");

    header('Location: ../scheda_civile.php?edited=1')
?>