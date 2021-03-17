<html>

    <?php
        include './config/db_driver.php';
        error_reporting (E_ERROR);
        $isInserted = $_GET['inserted'];

        $Edited_record = $_GET['id'];
        $query = "SELECT * FROM civili WHERE id ='".$Edited_record."'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result)
    ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Aggiungi Civile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>

    <body style="background-color: rgb(9,0,44);">
        <div class="table-responsive">
            <form method="POST" action="./action/update_civilian.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" style="color: rgb(255,255,255);"></th>
                            <th class="text-center" style="color: rgb(255,255,255);">SCHEDA CIVILE</th>
                            <th class="text-center" style="color: rgb(255,255,255);"></th>
                        </tr>
                        <?php
                            if($isInserted == 1){
                                echo "<tr>";
                                echo '<div class="alert alert-success" align="center"> <b>Civile Modifi</b> </div>';
                                echo "</tr>";
                            }
                        ?>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">Nome&nbsp;<input type="text" name="nome" value="<?php echo($row['nome']); ?>" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Cognome&nbsp;<input type="text" name="cognome" value="<?php echo($row['cognome']); ?>" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Nascita&nbsp;<input type="date" name="data" value="<?php echo($row['data_nascita']); ?>" required=""></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">Sesso&nbsp;&nbsp;<input type="text" name="sesso" value="<?php echo($row['sesso']); ?>" readonly required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Telefono&nbsp; &nbsp;<input type="text" name="telefono" value="<?php echo($row['telefono']); ?>" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Lavoro&nbsp;&nbsp;<input type="text" name="lavoro" value="<?php echo($row['lavoro']); ?>" required=""></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);"></td>
                            <td class="text-center" style="color: rgb(255,255,255);"></td>
                            <td class="text-center" style="color: rgb(255,255,255);">ID&nbsp;<input type="text" name="id" value="<?php echo($row['id']); ?>" readonly required=""></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                            <td class="text-center" style="color: rgb(255,255,255);"><button class="btn btn-success btn-block btn-lg text-center" data-bs-hover-animate="pulse" type="submit">MODIFICA</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>

</html>