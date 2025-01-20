<form action="" method="POST">
    <input type="submit" name="svuotaCarrello" value="Svuota carrello" />
</form>
<section>
    <?php foreach($templateParams["carrello"] as $prodotto): ?>
        <img src="<?php echo UPLOAD_DIR.$prodotto["ImmagineProdotto"]; ?>" alt="immagine <?php echo $prodotto["NomeProdotto"]; ?>" />
        <div>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p><?php echo $prodotto["DescrizioneProdotto"]; ?></p>
        </div>
        <div>
            <p><?php echo $prodotto["PrezzoProdotto"]; ?>€</p>
            <input type="number" name="quantita" value=<?php echo $prodotto["QuantitaInCarrello"]; ?> />
            <input type="submit" name="rimuovi<?php echo $prodotto["IDProdotto"]; ?>" value="Rimuovi"></input>
        </div>

    <?php endforeach; ?>
</section>
<p>Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>
<form action="" method="POST">
    <input type="submit" name="vaiInCassa" value="Vai alla cassa" />
</form>

