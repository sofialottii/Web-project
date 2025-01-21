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
            <form action="" method="POST">
                <input type="hidden" name="IDProdotto" value="<?php echo $prodotto["IDProdotto"]; ?>" />
                <input type="submit" name="rimuovi" value="Rimuovi" />
            </form>
        </div>

    <?php endforeach; ?>
</section>
<p>Totale: €<?php echo prezzoTotale($templateParams["carrello"]); ?></p>
<a href="acquisto.php">Torna agli acquisti</a>
<form action="" method="POST">
    <input type="submit" name="vaiInCassa" value="Vai alla cassa" />
</form>

