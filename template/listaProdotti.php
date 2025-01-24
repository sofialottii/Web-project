<form action="#" method="GET">
    <label for="inviaRic" hidden></label><input type="submit" id="inviaRic" value="Cerca"/>
    <label for="cercaProd" hidden></label><input type="search" id="cercaProd" name="CercaProdotto" placeholder="Cerca per nome..."/>
</form>
<?php foreach($templateParams["prodotti"] as $prodotto): ?>
<form action="prodotto.php" method="GET">
    <label for="idProd" hidden></label><input type="hidden" id="idProd" name="IDProdotto" value="<?php echo $prodotto['IDProdotto']; ?>" />
    <article id="prodotto_<?php echo $prodotto['IDProdotto']; ?>" class="cliccabile">
        <?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
        <header>
            <!--uso ajax per cambiare il cuore-->
            <label for="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>" hidden></label><button id="cambia_cuore_<?php echo $prodotto['IDProdotto']; ?>">
                <img src="<?php echo checkPreferito($prodotto['IDProdotto']);?>" alt="cuore-vuoto" />        
            </button>   
        </header> 
        <?php endif; ?> 
        <section>
            <img src="<?php echo $prodotto['ImmagineProdotto'];?>" alt="<?php echo $prodotto["NomeProdotto"]; ?>" />
        </section>
        <footer>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p>Prezzo per 100 gr: €<?php echo $prodotto["PrezzoProdotto"]; ?>0</p>
        </footer>
    </article>
    <label for="bottoneSubmit" hidden></label><input type="submit" id="bottoneSubmit" name="bt" value="bt" hidden />
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
<a href="index.php">Torna alla home</a>
<!-- bottone carrello -->
<?php if(!$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
<form action="carrello.php" method="POST">
    <label for="vaiCarrello" hidden></label><button type="submit" id="vaiCarrello" value="Vai al carrello">
        <img src="../utils/img/icons/carrello.png" alt="carrello" />
        <nav><?php echo count($templateParams["carrello"]); ?></nav>
    </button>
</form>
<?php endif; ?>




