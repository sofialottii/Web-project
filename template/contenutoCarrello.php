<form action="" method="POST">
    <label for="svuotaCarrello" hidden></label><input type="submit" name="svuotaCarrello" id="svuotaCarrello" value="Svuota carrello" />
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["carrello"] as $prodotto): ?>
        <img src="<?php echo UPLOAD_DIR.$prodotto['ImmagineProdotto']; ?>" alt="immagine <?php echo $prodotto['NomeProdotto']; ?>" />
        <div>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p><?php echo $prodotto["DescrizioneProdotto"]; ?></p>
        </div>
        <div>
            <p data-prezzo-unitario="<?php echo $prodotto["PrezzoProdotto"]; ?>">
                €<?php echo $prodotto["PrezzoProdotto"]*$prodotto["QuantitaInCarrello"]; ?></p>
            <label for="quantitaCarr" hidden></label><input type="number" autocomplete="off" name="quantita_<?php echo $prodotto["IDProdotto"]; ?>" id="quantitaCarr" value=<?php echo $prodotto["QuantitaInCarrello"]; ?> disabled />
            <form action="" method="POST">
                <label for="idProd" hidden></label><input type="hidden" id="idProd" name="IDProdotto_<?php echo $prodotto["IDProdotto"]; ?>" value="<?php echo $prodotto["IDProdotto"]; ?>" /> <!--lo uso per aggiornare le query del carrello -->
                <label for="idProd2" hidden></label><input type="hidden" id="idProd2" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi" />
            </form>
        </div>
    <?php endforeach; ?>
</section>
<p prezzoTotale="<?php echo $templateParams["carrello"] ?>" >Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>
<a href="acquisto.php">Torna agli acquisti</a>

<form action="" method="POST"> 
    <label for="vaiInCassa" hidden></label><input type="submit" name="vaiInCassa" id="vaiInCassa" value="Vai alla cassa" />
</form>


