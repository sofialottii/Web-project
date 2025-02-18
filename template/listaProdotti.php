<!-- Form di ricerca -->
<form action="#" method="GET" class="d-flex my-4 mx-5">
    <label for="cercaProd" hidden></label><input type="search" id="cercaProd" name="CercaProdotto" class="form-control me-3" placeholder="Cerca per nome..."/>
    <label for="inviaRic" hidden></label><input type="submit" id="inviaRic" value="Cerca"/>
</form>


<!-- Griglia dei prodotti -->
<div class="container">
    <div class="row g-4">
        <?php foreach($templateParams["prodotti"] as $prodotto): ?>
            <div class="col-12 col-md-6 col-lg-3">
                    <form action="prodotto.php" method="GET">
                        <label for="idProd" hidden></label><input type="hidden" name="IDProdotto" value="<?php echo $prodotto['IDProdotto']; ?>" />
                        
                        <article id="prodotto_<?php echo $prodotto['IDProdotto']; ?>" class="cliccabile click temporaneo">
                            <?php if(isUserLoggedIn() && !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
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
                                <p class="fs-3 fw-bold text-center"><?php echo $prodotto["NomeProdotto"]; ?></p>
                                <p class="text-center">Prezzo per 100 gr: €<?php echo $prodotto["PrezzoProdotto"]; ?></p>
                            </footer>
                        </article>
                        <label for="bottoneSubmit" hidden></label><input type="submit" id="bottoneSubmit" name="bt" value="bt" hidden />
                    </form>
                
            </div>

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
    </div>
</div>
    



<p class="mt-4 mb-0 text-center"><a href="index.php">Torna alla home</a></p>
<!-- bottone carrello -->
<?php if(isUserLoggedIn() && !$dbh->isUtenteAdmin($_SESSION["E_mail"])): ?>
<form action="carrello.php" method="POST">
    <label for="vaiCarrello" hidden></label>
    
    <button type="submit" id="vaiCarrello" value="Vai al carrello">
        <img src="../utils/img/icons/carrello.png" alt="carrello" />
        <nav><?php echo count($templateParams["carrello"]); ?></nav>
    </button>
    
</form>
<?php endif; ?>

<script src="../js/hoverSection.js"></script>




