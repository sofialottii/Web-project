<form action="#" method="GET">
    <input type="search" name="CercaProdotto" placeholder="Cerca per nome..."/>
    <br/>
    <input type="submit" value="Invia richiesta"/>
</form>
<?php foreach($templateParams["prodotti"] as $prodotto): ?>
<form action="prodotto.php" method="GET">
    <input type="hidden" name="IDProdotto" value="<?php echo $prodotto['IDProdotto']; ?>" />
    <article id="prodotto_<?php echo $prodotto['IDProdotto']; ?>" class="cliccabile">
        <header>
            <!--uso ajax per cambiare il cuore-->
            <button id="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>">
                <img src="<?php echo checkPreferito($prodotto["IDProdotto"]); ?>" alt="cuore-vuoto" />        
            </button>    
        </header>
        <section>
            <img src="<?php echo $prodotto["ImmagineProdotto"]; ?>" alt="<?php echo $prodotto["NomeProdotto"]; ?>" />
        </section>
        <footer>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p><?php echo $prodotto["PrezzoProdotto"]; ?></p>
        </footer>
    </article>
</form>

<script>
    //per passare al prodotto specifico
    document.querySelectorAll(".cliccabile").forEach(article => {
        article.addEventListener("click", function () {
    
            this.closest("form").submit(); //cerco il form più vicino e lo invio
        });
    });

    //per cambiare il cuore
    document.getElementById("cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>").addEventListener("click", function() {
        event.preventDefault();
        event.stopPropagation(); // per evitare che l'evento venga propagato al form padre (intero articolo)

        fetch("acquisto.php?IDProdotto=<?php echo $prodotto['IDProdotto']; ?>", {
            method: "GET"
        })
        .then(response => response.text())
        .then(data => {
            // cambia l'immagine con quella ricevuta dalla funzione php
            const img = document.querySelector("#cambia_cuore_<?php echo $prodotto['IDProdotto']; ?> img");
            img.src = data.trim(); 
            console.log(data.trim());
        })
        .catch(error => {
            console.error("Errore:", error);
        });
    });
</script>

<?php endforeach; ?>



<!-- bottone carrello -->

