<form action="" method="POST">
    <label for="cancNot" hidden></label><input type="submit" id="cancNot" name="cancellanotifiche" value="Elimina Tutte">
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"];?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["notifiche"] as $notifica): ?>
        <form action="notifica.php" method="GET">   
            <label for="IDNotifica" hidden></label><input type="hidden" id="IDNotifica" name="IdNotifica" value="<?php echo $notifica["IdNotifica"]; ?>" />
            <article id="notifica_<?php echo $notifica["IdNotifica"]; ?>" class="cliccabile">
                <header>
                    <p><?php echo $notifica["IdNotifica"];?></p>
                    <p><?php echo $notifica["TipoNotifica"]; ?> </p>
                </header>
                <section>
                    <?php echo $notifica["DataNotifica"]; ?>
                </section>
                <footer>
                    <?php echo $notifica["TestoNotifica"]; ?>
                </footer>
            </article>
        </form>
        <form action="" method="POST">
            <label for="idNot" hidden></label><input type="hidden" id="idNot" name="IdNotifica" value ="<?php echo $notifica["IdNotifica"] ?>"/>
            <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
        </form>

        <script>
            //per passare alla notifica specifica
            document.querySelectorAll(".cliccabile").forEach(article => {
                article.addEventListener("click", function () {

                    this.closest("form").submit(); //cerco il form più vicino e lo invio
                });
            });

        </script>

    <?php endforeach ?>   
</section>