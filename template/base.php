<!DOCTYPE html>
<html lang="it">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $templateParams["titolo"]; ?></title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <!--pannello per aprire canvas-->
            <?php 
                require("offcanvas.php");
            ?>

            <h1>EMPORIO DI GRIMILDE </h1>
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