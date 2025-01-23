<article>
    <section>
        <img src="<?php echo $templateParams["articolo"][0]["ImmagineProdotto"]; ?>" alt="<?php echo $templateParams["articolo"][0]["NomeProdotto"]; ?>" />
    </section>
    <section>
        <ul>
            <li>
                <label for="cambia_cuore<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>" hidden></label>
                <button id="cambia_cuore_<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>">
                    <img src="<?php echo checkPreferito($templateParams["articolo"][0]['IDProdotto']); ?>" alt="cuore-vuoto" />        
                </button>
            </li>
            <li>
                <p><?php echo $templateParams["articolo"][0]["NomeProdotto"]; ?></p>
            </li>
            <li>
                <p>€<?php echo $templateParams["articolo"][0]["PrezzoProdotto"]; ?></p>
            </li>
            <li>
                <p><?php echo $templateParams["articolo"][0]["DescrizioneProdotto"]; ?></p>
            </li>
        </ul>
    </section>
    <?php if(!$templateParams["isUtenteAdmin"]): ?>
    <section>
        <form action="" method="POST">
        <ul>
            <li>
                <p>Quantità:</p>
            </li>
            <li>
                <label for="quantita" hidden></label><input type="number" name="quantita" id="quantita" min="1" max="10" value="1" />
            </li>
            <li>
                <label for="aggiungiCarrello" hidden></label><input type="submit" name="aggiungiCarrello" id="aggiungiCarrello" value="AGGIUNGI AL CARRELLO" />
            </li>
        </ul>
        </form>
    </section>
    <?php else: ?>
    <section>
        <form action="" method="POST">
            <ul>
                <li>
                    <p>Disponibilità prodotto:</p>
                </li>
                <li>
                    <label for="quantitaRifornimento" hidden></label><input type="number" name="quantitaRifornimento" id="quantitaRifornimento" min="0" value="1" /> <!--in value metterò la quantità presa da databse -->
                </li>
                <li>
                    <label for="cambiaRifornimento" hidden></label><input type="submit" name="cambiaRifornimento" id="cambiaRifornimento" value="CAMBIA RIFORNIMENTO" />
                </li>
                <li>
                    <label for="nuovoPrezzo">Nuovo prezzo:</label><input type="text" id="nuovoPrezzo" name="nuovoPrezzo" />
                </li>
                <li>
                    <label for="cambiaPrezzo" hidden></label><input type="submit" id="cambiaPrezzo" name="cambiaPrezzo" value="CAMBIA PREZZO" />
                </li>
            </ul>
        </form>
    </section>
    <?php endif; ?>


</article>



<script>
    document.getElementById("cambia_cuore_<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>").addEventListener("click", function() {
        event.preventDefault();

        fetch("acquisto.php?IDProdotto=<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>", {
            method: "GET"
        })
        .then(response => response.text())
        .then(data => {
            // Cambia l'immagine con quella ricevuta dalla funzione PHP
            const img = document.querySelector("#cambia_cuore_<?php echo $templateParams["articolo"][0]['IDProdotto']; ?> img");
            img.src = data.trim(); // Assicurati che il dato ricevuto sia il percorso dell'immagine
            console.log(data.trim());
        })
        .catch(error => {
            console.error("Errore:", error);
        });
    });
</script>