<section>
    <h2>TRACCIAMENTO ORDINE</h2>
    <p>Numero ordine: <?php echo $templateParams["ordine"][0]["IDOrdine"] ?></p>
    <ul>
        <li><input type="radio" name="stato" value="inPreparazione" <?php if($templateParams["ordine"][0]["StatoSpedizione"] == "InPreparazione"):
        echo "checked"; endif; ?> disabled> In preparazione</li>
        <li><input type="radio" name="stato" value="spedito" <?php if ($templateParams["ordine"][0]["StatoSpedizione"] == "InTransito"):
        echo "checked"; endif; ?> disabled> Spedito</li>
        <li><input type="radio" name="stato" value="consegnato" <?php if ($templateParams["ordine"][0]["StatoSpedizione"] == "Consegnato"):
        echo "checked"; endif; ?> disabled> Consegnato</li>
    </ul>
    <form action="index.php" method="post">
        <input type="submit" value="Torna alla home">
    </form>
</section>