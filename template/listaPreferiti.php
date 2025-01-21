<?php if (empty($templateParams["prodotti"])) : ?>
    <h2>La lista dei preferiti è vuota</h2>
<?php endif; ?>

<?php foreach($templateParams["prodotti"] as $prodotto): ?>
<article>
    <header>
        <!--uso ajax per cambiare il cuore-->
        <button id="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>">
            <img src="<?php echo checkPreferito($prodotto["IDProdotto"]); ?>" alt="cuore-vuoto" />        
        </button>

        <script>
            document.getElementById("cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>").addEventListener("click", function() {
                event.preventDefault();

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
            
    </header>
    <section>
        <img src="<?php echo $prodotto["ImmagineProdotto"]; ?>" alt="<?php echo $prodotto["NomeProdotto"]; ?>" />
    </section>
    <footer>
        <p><?php echo $prodotto["NomeProdotto"]; ?></p>
        <p><?php echo $prodotto["PrezzoProdotto"]; ?></p>
    </footer>
</article>
<?php endforeach; ?>

<!-- bottone carrello -->
<form action="carrello.php" method="POST">
    <button type="submit" value="Vai al carrello">
        <img src="../utils/img/icons/carrello.png" alt="carrello" />
    </button>
</form>