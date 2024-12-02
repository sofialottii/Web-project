<!DOCTYPE html>
<html lang="it">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Prima pagina</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    <body>
        <header>
            <!--pannello per aprire canvas-->
            <h1>La frutta di Grimilde</h1>
        </header>

        <main>
            <?php
                require($templateParams["nome"]);
            ?>
        </main>

        <footer>
            <p>
                LafruttadiGrimilde.com<br>
                <a href="#">Contattaci</a><br>
                Privacy Policy | Cookie Policy | Info Legali
            </p>
        </footer>

    </body>
</html>