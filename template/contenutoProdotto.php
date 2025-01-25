<article>
    <header>
        <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
        <label for="cambia_cuore<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>" hidden></label>
            <button id="cambia_cuore_<?php echo $templateParams["articolo"][0]['IDProdotto']; ?>">
                <img src="<?php echo checkPreferito($templateParams['articolo'][0]['IDProdotto']); ?>" alt="cuore-vuoto" />        
            </button>
        <?php endif; ?>
    </header>
        <section>
        <img src="<?php echo $templateParams['articolo'][0]['ImmagineProdotto']; ?>" alt="<?php echo $templateParams['articolo'][0]['NomeProdotto']; ?>" />
        <p class="text-center fs-3 fw-bold"><?php echo $templateParams["articolo"][0]["NomeProdotto"]; ?></p>
        </section>
        <ul>
            
                <p id="prezzoTotale" data-prezzo-unitario="<?php echo $templateParams["articolo"][0]["PrezzoProdotto"]; ?>">
                €<?php echo $templateParams["articolo"][0]["PrezzoProdotto"]; ?></p>
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
                <label for="quantita" hidden></label>
                <input type="number" name="quantita" id="quantita" min="0" max="<?php echo $templateParams["articolo"][0]["QuantitaDisponibile"]; ?>" value="0" autocomplete="" />
            </li>
            <?php if($templateParams["articolo"][0]["QuantitaDisponibile"] <= 5):?>
            <li>
                <p><?php if($templateParams["articolo"][0]["QuantitaDisponibile"] == 0):?>Prodotto esaurito!
                <?php else: ?>Solo <?php echo $templateParams["articolo"][0]["QuantitaDisponibile"]; ?> rimanenti nel nostro sito!
                <?php endif; ?></p>
            </li>
            <?php endif; ?>
            <li>
                <a href="acquisto.php">Torna agli acquisti</a>
            </li>
            <li>
                <label for="aggiungiCarrello" hidden></label><input type="submit" name="aggiungiCarrello" id="aggiungiCarrello" value="AGGIUNGI AL CARRELLO" <?php if($templateParams["articolo"][0]["QuantitaDisponibile"] == 0):?>disabled<?php endif;?> />
            </li>
        </ul>
        </form>
    </section>
    <?php else: ?>
    <section>
        <form action="" method="POST">
            <ul>
                <li>
                    <p>Disponibilità prodotto attuale: <?php echo $templateParams["articolo"][0]["QuantitaDisponibile"]; ?></p>
                </li>
                <li>
                    <label for="quantitaRifornimento" hidden></label><input type="number" autocomplete="" name="quantitaRifornimento" id="quantitaRifornimento" min="-<?php echo $templateParams["articolo"][0]["QuantitaDisponibile"]; ?>" value="1" />
                </li>
                <li>
                    <label for="cambiaRifornimento" hidden></label><input type="submit" name="cambiaRifornimento" id="cambiaRifornimento" value="RIFORNISCI" />
                </li>
                <li>
                    <label for="nuovoPrezzo">Nuovo prezzo:</label><input type="number" autocomplete="" id="nuovoPrezzo" name="nuovoPrezzo" min="0" step="0.01" placeholder="€<?php echo $templateParams["articolo"][0]["PrezzoProdotto"] ?>" />
                </li>
                <li>
                    <label for="cambiaPrezzo" hidden></label><input type="submit" id="cambiaPrezzo" name="cambiaPrezzo" value="CAMBIA PREZZO" />
                </li>
                <li>
                    <label for="cambiaVisibilita" hidden></label><input type="submit" id="cambiaVisibilita" name="cambiaVisibilita" value="Rendi <?php if($templateParams["articolo"][0]["Visibile"] == 'Y'):?>invisibile<?php else:?>visibile<?php endif;?>" />
                </li>
                <li>
                    <a href="acquisto.php">Torna ai prodotti</a>
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

    document.addEventListener("DOMContentLoaded", function () {
    const quantitaInput = document.getElementById("quantita");
    const prezzoTotale = document.getElementById("prezzoTotale");
    const prezzoUnitario = parseFloat(prezzoTotale.dataset.prezzoUnitario);

    // Aggiungi un listener per il cambiamento del valore della quantità
    quantitaInput.addEventListener("input", function () {
        const quantita = parseInt(this.value) || 1; // Prevenire valori non numerici
        const nuovoPrezzo = (prezzoUnitario * quantita).toFixed(2);
        prezzoTotale.textContent = `€${nuovoPrezzo}`;
    });
});

</script>