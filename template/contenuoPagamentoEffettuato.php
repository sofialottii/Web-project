<section>
    <img src="../utils/img/check.png" alt="Check">
    Grazie per il pagamento
    <ul>
    <li><a href="tracciamentoOrdine.php?IDOrdine=<?php echo $_GET["IDOrdine"]; ?>"><label for="tracciamentoPagEff" hidden></label><input type="submit" id="tracciamentoPagEff" value="Tracciamento Ordine" /></a></li>
    <li><a href="index.php"><label for="homePagamentoEff" hidden></label><input type="submit" id="homePagamentoEff" value="Home" /></a> </li>
    </ul>
</section>