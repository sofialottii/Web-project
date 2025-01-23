<section>
    <h2>TRACCIAMENTO ORDINE</h2>
    <p>Numero ordine: 00<?php echo $templateParams["ordine"][0]["IDOrdine"] ?></p>
    <ul>
        <li><label for="inPreparazione" hidden></label><input type="radio" id="inPreparazione" name="stato" value="inPreparazione" <?php if($templateParams["ordine"][0]["StatoSpedizione"] == "InPreparazione"):
        echo "checked"; endif; ?> disabled> In preparazione</li>
        <li><label for="spedito" hidden></label><input type="radio" id="spedito" name="stato" value="spedito" <?php if ($templateParams["ordine"][0]["StatoSpedizione"] == "InTransito"):
        echo "checked"; endif; ?> disabled> Spedito</li>
        <li><label for="consegnato" hidden></label><input type="radio" id="consegnato" name="stato" value="consegnato" <?php if ($templateParams["ordine"][0]["StatoSpedizione"] == "Consegnato"):
        echo "checked"; endif; ?> disabled> Consegnato</li>
    </ul>
    <form action="index.php" method="post">
        <label for="ritorna" hidden></label><input type="submit" id="ritorna" value="Torna alla home">
    </form>
</section>