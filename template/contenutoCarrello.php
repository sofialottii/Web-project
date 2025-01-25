<form action="" method="POST">
    <label for="svuotaCarrello" hidden></label><input type="submit" name="svuotaCarrello" id="svuotaCarrello" value="Svuota carrello" />
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p class="text-danger"><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>

<?php foreach($templateParams["carrello"] as $prodotto): ?>
    <section>
        <img src="<?php echo $prodotto['ImmagineProdotto']; ?>" alt="immagine <?php echo $prodotto['NomeProdotto']; ?>" />
        <div class="text-center">
            <p class="fs-2"><?php echo $prodotto["NomeProdotto"]; ?>: €<?php echo $prodotto["PrezzoProdotto"]*$prodotto["QuantitaInCarrello"]; ?></p>
            <p><?php echo $prodotto["DescrizioneProdotto"]; ?></p>
        </div>
        <div class="text-center p-3">
            <label for="quantitaCarr" hidden></label><input type="number" autocomplete="off" name="quantita_<?php echo $prodotto["IDProdotto"]; ?>" id="quantitaCarr" value=<?php echo $prodotto["QuantitaInCarrello"]; ?> disabled />
        </div>
        <div>    
            <form action="" method="POST">
                <label for="idProd" hidden></label><input type="hidden" id="idProd" name="IDProdotto_<?php echo $prodotto["IDProdotto"]; ?>" value="<?php echo $prodotto["IDProdotto"]; ?>" /> <!--lo uso per aggiornare le query del carrello -->
                <label for="idProd2" hidden></label><input type="hidden" id="idProd2" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi" />
            </form>
        </div>
    </section>
    <?php endforeach; ?>

<p class="fs-2 text-uppercase text-center" >Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>

<p class="text-center"><a href="acquisto.php">Torna agli acquisti</a></p>
<form action="" method="POST">
    <label for="vaiInCassa" hidden></label><input type="submit" name="vaiInCassa" id="vaiInCassa" value="Vai alla cassa" />
</form>


