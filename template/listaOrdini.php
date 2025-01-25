<?php if(isset($templateParams["errore"])): ?>
    <p> <?php echo $templateParams["errore"];?></p>
<?php endif; ?>
  

    <?php foreach($templateParams["ordini"] as $ordin): ?>
    <section class="section-example">
        <form action="ordineSingolo.php" method="GET">
        <label for="IDOrdine" hidden></label><input type="hidden" id="IDOrdine" name="IdSingoloOrdine" value="<?php echo $ordin["IDOrdine"]; ?>" />
        <label for="IDE_mail" hidden></label><input type="hidden" id="IDE_mail" name="mail" value="<?php echo $ordin["E_mail"]; ?>" />
        <article class="cliccabile">
            <header>
                <p>ORDINE 00<?php echo $ordin["IDOrdine"];?>
                <?php if($dbh->isUtenteAdmin($_SESSION["E_mail"])): ?> - <?php echo $ordin["E_mail"]; ?> <?php endif;?>
                </p>
                <p><?php echo $ordin["DataOra"]; ?></p>
                
            </header>
            <section>
                <p>Importo: €<?php echo $ordin["ImportoTotale"]; ?></p>
            </section>
            <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
            <footer>
                <p><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $ordin["IDOrdine"]; ?>">Traccia ordine</a></p>
            </footer>
            <?php endif; ?>
        
        </article>
        <label for="bottoneSubmit" hidden></label><input type="submit" id="bottoneSubmit" name="bt" value="bt" hidden />
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
