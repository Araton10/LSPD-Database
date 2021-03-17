<html>

    <?php
        include './config/db_driver.php';
        error_reporting (E_ERROR);
        $isInserted = $_GET['inserted'];
        $isEdited = $_GET['edited'];
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
            <form method="POST" action="./action/add_civilian.php">
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
                                echo '<div class="alert alert-success" align="center"> <b>Civile Aggiunto</b> </div>';
                                echo "</tr>";
                            }
                            if($isEdited == 1){
                                echo "<tr>";
                                echo '<div class="alert alert-success" align="center"> <b>Civile Modificato</b> </div>';
                                echo "</tr>";
                            }
                        ?>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">Nome&nbsp;<input type="text" name="nome" placeholder="Nome" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Cognome&nbsp;<input type="text" name="cognome" placeholder="Cognome" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Nascita&nbsp;<input type="date" name="data" required=""></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">Sesso&nbsp;&nbsp;<input type="text" name="sesso" placeholder="M / F" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Telefono&nbsp; &nbsp;<input type="text" name="telefono" placeholder="Telefono" required=""></td>
                            <td class="text-center" style="color: rgb(255,255,255);">Lavoro&nbsp;&nbsp;<input type="text" name="lavoro" placeholder="Lavoro" required=""></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="color: rgb(255,255,255);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                            <td class="text-center" style="color: rgb(255,255,255);"><button class="btn btn-success btn-block btn-lg text-center" data-bs-hover-animate="pulse" type="submit">INVIA</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
        <div class="table-responsive  table table-hover results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg-1">NOME</th>
                        <th id="trs-hd" class="col-lg-2">COGNOME</th>
                        <th id="trs-hd" class="col-lg-3">NASCITA</th>
                        <th id="trs-hd" class="col-lg-2">SESSO</th>
                        <th id="trs-hd" class="col-lg-2">TELEFONO</th>
                        <th id="trs-hd" class="col-lg-2">LAVORO</th>
                        <th id="trs-hd" class="col-lg-2">AZIONE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                        <?php
                            if (!$conn) {
                                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                                exit;
                            }
                             $query = "SELECT * FROM civili";
                             $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                    <td style='color: rgb(255,255,255);'>{$row['nome']}</td>
                                    <td style='color: rgb(255,255,255);'>{$row['cognome']}</td>
                                    <td style='color: rgb(255,255,255);'>{$row['data_nascita']}</td>
                                    <td style='color: rgb(255,255,255);'>{$row['sesso']}</td>
                                    <td style='color: rgb(255,255,255);'>{$row['telefono']}</td>
                                    <td style='color: rgb(255,255,255);'>{$row['lavoro']}</td>
                                    <td>
                                        <a href='modifica_civile.php?id={$row['id']}'>
                                            <button class='btn btn-warning' style='margin-left: 5px;' type='submit'><i class='fa fa-edit' style='font-size: 15px;'></i> Edit</button>
                                        </a>
                                        <button class='btn btn-danger' style='margin-left: 5px;' type='submit'><i class='fa fa-trash' style='font-size: 15px;'></i> Delete</button>
                                    </td>
                                </tr>
                                 ";

                            }
                        ?>
                </tbody>
                <!--
                    QUESTA È LA PARTE CHE CREA LE RIGHE DELLA TABELLA
                    
                    <tbody>
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                    <tr>
                        <td style="color: rgb(255,255,255);">01</td>
                        <td style="color: rgb(255,255,255);">Iaiu</td>
                        <td style="color: rgb(255,255,255);">Souvik Kundu</td>
                        <td style="color: rgb(255,255,255);">Bootstrap Stuido</td>
                        <td style="color: rgb(255,255,255);">2014</td>
                        <td style="color: rgb(255,255,255);">2014</td>
                        <td>
                            <button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></button>
                            <button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </td>
                    </tr>
                </tbody>
                -->
            </table>
        </div>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>

</html>