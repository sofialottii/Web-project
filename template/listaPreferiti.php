
<?php if (empty($templateParams["prodotti"])) : ?>
    <h2>La lista dei preferiti è vuota</h2>
<?php endif; ?>

<?php foreach($templateParams["prodotti"] as $prodotto): ?>
    <section class="section-example">
    <form action="prodotto.php" method="GET">
    <label for="btn1" hidden></label><input type="hidden" id="btn1" name="IDProdotto" value="<?php echo $prodotto['IDProdotto']; ?>" />
    <article id="prodotto_<?php echo $prodotto['IDProdotto']; ?>" class="cliccabile">
        <header>
            <!--uso ajax per cambiare il cuore-->
            <label for="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>" hidden></label><button id="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>">
                <img src="<?php echo checkPreferito($prodotto['IDProdotto']); ?>" alt="preferiti" />        
            </button>
        </header>
        <section>
            <img src="<?php echo $prodotto['ImmagineProdotto']; ?>" alt="<?php echo $prodotto["NomeProdotto"]; ?>" />
        </section>
        <footer>
            <p class="fs-3 fw-bold"><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p>Prezzo per 100 gr: €<?php echo $prodotto["PrezzoProdotto"]; ?>0</p>
        </footer>
    </article>
    <label for="bottoneSubmit" hidden></label><input type="submit" id="bottoneSubmit" name="bt" value="bt" hidden />
</form>


<script>
    document.querySelectorAll(".cliccabile").forEach(article => {
        article.addEventListener("click", function () {

            this.closest("form").submit(); //cerco il form più vicino e lo invio
        });
    });

    document.getElementById("cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>").addEventListener("click", function() {
        event.preventDefault();
        event.stopPropagation(); // per evitare che l'evento venga propagato al form padre (intero articolo)
        
        fetch("acquisto.php?IDProdotto=<?php echo $prodotto['IDProdotto']; ?>", {
            method: "GET"
        })
        .then(response => response.text())
        .then(data => {
            // Cambia l'immagine con quella ricevuta dalla funzione PHP
            const img = document.querySelector("#cambia_cuore_<?php echo $prodotto['IDProdotto']; ?> img");
            img.src = data.trim(); // Assicurati che il dato ricevuto sia il percorso dell'immagine
            console.log(data.trim());
        })
        .catch(error => {
            console.error("Errore:", error);
        });
    });
</script>

</section>
<?php endforeach; ?>

<!-- bottone carrello -->
<form action="carrello.php" method="POST">
    <button type="submit" value="Vai al carrello">
        <img src="../utils/img/icons/carrello.png" alt="carrello" />
    </button>
</form>

<script src="../js/hoverSection.js"></script>