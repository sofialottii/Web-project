<article>
    <h2>RECENSIONI</h2>
    <?php foreach($templateParams["recensioni"] as $recensione): ?>
    <article>
        <header>    
            <p><?php echo $recensione["Nome"]; ?> <?php echo $recensione["Cognome"]; ?> - <?php echo $recensione["E_mail"]; ?></p>
            <p><?php for ($i = 1; $i <= 5; $i++) {
                if ($i <= $recensione["NumeroStelle"]) {
                    echo '<span data-filled="true">★</span>';
                } else {
                    echo '<span data-filled="false">★</span>';
                }
            } ?>
            </p>
        </header>
        <section>
            <p><?php echo $recensione["TestoRecensione"]; ?></p>
        </section>
        <footer>
            <p><?php echo $recensione["DataRecensione"]; ?></p>
            <form action="" method="POST">
                <label for="DataRec" hidden></label><input type="hidden" id="DataRec" name="dataRecensione" value ="<?php echo $recensione["DataRecensione"] ?>"/>
                <label for="MailRec" hidden></label><input type="hidden" id="MailRec" name="mailRecensione" value ="<?php echo $recensione["E_mail"] ?>"/>
                <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
            </form>
        </footer>
    </article>
    <?php endforeach; ?>
    <a href="index.php">Torna alla home</a>
</article>
