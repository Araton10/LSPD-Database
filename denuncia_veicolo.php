<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Denuncia Veicolo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background-color: rgb(9,0,44);">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" style="color: rgb(255,255,255);"></th>
                    <th class="text-center" style="color: rgb(255,255,255);">MODULO DENUNCIA VEICOLO</th>
                    <th class="text-right" style="color: rgb(255,255,255);"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" style="color: rgb(255,255,255);">Denunciante&nbsp;<input type="text" placeholder="Chi denuncia" required="" name="denunciante"></td>
                    <td class="text-center" style="color: rgb(255,255,255);">Denunciato&nbsp; &nbsp;<input type="text" placeholder="Chi viene denunciato" required="" name="denunciato"></td>
                    <td class="text-center" style="color: rgb(255,255,255);">Data denuncia&nbsp;&nbsp;<input type="date" required="" name="data"></td>
                </tr>
                <tr>
                    <td class="text-center" style="color: rgb(255,255,255);">Targa veicolo&nbsp;<input type="text" placeholder="Targa" required="" name="targa"></td>
                    <td class="text-center" style="color: rgb(255,255,255);">Luogo&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" value="Centrale di Polizia" name="luogo"></td>
                    <td class="text-center" style="color: rgb(255,255,255);">Firma agente&nbsp; &nbsp;&nbsp;<input type="text" placeholder="Nome e Cognome" required="" name="firma"></td>
                </tr>
                <tr>
                    <td class="text-center" style="color: rgb(255,255,255);"></td>
                    <td class="text-center" style="color: rgb(255,255,255);">Descrizione
                        <form><textarea class="form-control" placeholder="Descrizione dell'accaduto. Area espandibile." required="" name="descrizione"></textarea></form>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="color: rgb(255,255,255);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td class="text-center" style="color: rgb(255,255,255);"><button class="btn btn-success btn-block btn-lg text-center" data-bs-hover-animate="pulse" type="submit">INVIA</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>