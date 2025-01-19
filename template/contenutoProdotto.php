<article>
    <section>
        <img src="<?php echo $templateParams["articolo"][0]["ImmagineProdotto"]; ?>" alt="<?php echo $templateParams["articolo"][0]["NomeProdotto"]; ?>" />
    </section>
    <section>
        <ul>
            <li>
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
    <section>
        <ul>
            <li>
                <p>Quantità:</p>
            </li>
            <li>
                <form action="">
                    <input type="number" name="quantita" min="1" max="10" value="1" />
                </form>
            </li>
            <li>
                <form action="">
                    <a href="acquisto.php"><input type="button" value="COMPRA ORA" /></a>
                </form>
            </li>
        </ul>
    </section>


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