<form action="" method="POST">
    <input type="submit" name="svuotaCarrello" value="Svuota carrello" />
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["carrello"] as $prodotto): ?>
        <img src="<?php echo UPLOAD_DIR.$prodotto["ImmagineProdotto"]; ?>" alt="immagine <?php echo $prodotto["NomeProdotto"]; ?>" />
        <div>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p><?php echo $prodotto["DescrizioneProdotto"]; ?></p>
        </div>
        <div>
            <p data-prezzo-unitario="<?php echo $prodotto["PrezzoProdotto"]; ?>">
                €<?php echo $prodotto["PrezzoProdotto"]*$prodotto["QuantitaInCarrello"]; ?></p>
            <input type="number" name="quantita_<?php echo $prodotto["IDProdotto"]; ?>" value=<?php echo $prodotto["QuantitaInCarrello"]; ?> min="1" />
            <form action="" method="POST">
                <input type="hidden" name="IDProdotto_<?php echo $prodotto["IDProdotto"]; ?>" value="<?php echo $prodotto["IDProdotto"]; ?>" /> <!--lo uso per aggiornare le query del carrello -->
                <input type="hidden" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                <input type="submit" name="rimuovi" value="Rimuovi" />
            </form>
        </div>
    <?php endforeach; ?>
</section>
<p prezzoTotale="<?php echo $templateParams["carrello"] ?>" >Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>
<a href="acquisto.php">Torna agli acquisti</a>

<form action="" method="POST"> 
<input type="submit" name="vaiInCassa" value="Vai alla cassa" />
</form>

<script src="../js/aggiornamentoCarrello.js"> 
</script>
