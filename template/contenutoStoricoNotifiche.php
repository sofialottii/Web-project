<form action="" method="POST">
    <label for="cancNot" hidden></label><input type="submit" id="cancNot" name="cancellanotifiche" value="Elimina Tutte">
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"];?></p>
<?php endif; ?>


    <?php foreach($templateParams["notifiche"] as $notifica): ?>
        <section class="section-example">
        <form action="notifica.php" method="GET">   
            <label for="IDNotifica" hidden></label><input type="hidden" id="IDNotifica" name="IdNotifica" value="<?php echo $notifica["IdNotifica"]; ?>" />
            <article id="notifica_<?php echo $notifica["IdNotifica"]; ?>" class="cliccabile">
                <header>
                    <p>0<?php echo $notifica["IdNotifica"];?></p>
                    <p><?php echo $notifica["DataNotifica"]; ?></p>
                </header>
                <section>
                    <p><?php echo $notifica["TipoNotifica"]; ?> </p>
                </section>
                <footer>
                    <p>Stato notifica: <?php if($notifica["StatoNotifica"]=="daLeggere"): ?>da leggere.<?php else: ?>letta.<?php endif; ?></p>     
                </footer>
            </article>
            <label for="bottoneSubmit" hidden></label><input type="submit" id="bottoneSubmit" name="bt" value="bt" hidden />
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
        </section>

    <?php endforeach ?>   
    <p><a href="index.php">Torna alla home</a></p>


<script src="../js/hoverSection.js">
</script>