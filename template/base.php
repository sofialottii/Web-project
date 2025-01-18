<!DOCTYPE html>
<html lang="it">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $templateParams["titolo"]; ?></title>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
    </head>
    <body>
        <header>
            <!--pannello per aprire canvas-->
            <h1>Emporio di Grimilde</h1>
        </header>
<!-- il main contiena la pagina specifica dove si trova il contenuto (tipo contenutoIndex (nota non index ma contenuto...))  -->
        <main>
            <?php
                require($templateParams["nome"]);
            ?>
        </main>

        <footer>
            <p>
                EmporiodiGrimilde.com<br>
                <a href="#">Contattaci</a><br>
                Privacy Policy | Cookie Policy | Info Legali
            </p>
        </footer>

    </body>
</html>