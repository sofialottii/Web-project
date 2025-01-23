<?php if(isset($templateParams["errore"])): ?>
    <p> <?php echo $templateParams["errore"];?></p>
<?php endif; ?>
  
<section>
    <?php foreach($templateParams["ordini"] as $ordin): ?>
    <form action="ordineSingolo.php" method="GET">
        <label for="IDOrdine" hidden></label><input type="hidden" id="IDOrdine" name="IdSingoloOrdine" value="<?php echo $ordin["IDOrdine"]; ?>" />
        <article class="cliccabile">
            <header>
                <p>ORDINE 00<?php echo $ordin["IDOrdine"];?></p>
            </header>
            <section>
                <p>Data: <?php echo $ordin["DataOra"]; ?></p>
                <p>Importo: <?php echo $ordin["ImportoTotale"]; ?></p>
            </section>
            <footer>
                <p><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $ordin["IDOrdine"]; ?>">Traccia ordine</a></p>
            </footer>
        
        </article>
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