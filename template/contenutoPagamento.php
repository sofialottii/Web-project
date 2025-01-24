
<p>Totale: €<?php echo $totale; ?></p>

<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>
<section>
    <h2>Metodo di pagamento</h2>
    <section>
    <form action="PagamentoEffettuato.php" method="POST">
        <ul>
            <li>
                <input type="radio" id="cartaSalvata" name="metodo_pagamento" value="carta_salvata" required />
                <label for="cartaSalvata">Carta salvata</label></li>

            <li>
                <input type="radio" id="nuovaCarta" name="metodo_pagamento" value="carta_credito" required />
                <label for="nuovaCarta">Carta di credito</label></li>

            <li>
                <input type="radio" name="metodo_pagamento" value="contanti" disabled required />
                <label for="metodo_pagamento">Contanti</label></li>
        </ul>
    </form>
    </section>

    <section id="sezione-pagamento" style="display: none;">
        
        <ul>
            <li><label for="nome">Nome </label><input type="text" id="nome" name="nome" required /></li>
            <li><label for="cognome">Cognome </label><input type="text" id="cognome" name="cognome" required /></li>
            <li><label for="numeroCarta">Numero Carta </label><input type="text" id="numeroCarta" name="numeroCarta" minlength="16" maxlength="16" required /></li>
            <li><label for="scadenza">Scadenza </label><input type="month" id="scadenza" name="scadenza" required /></li>
            <li><label for="cvv">CVV </label><input type="text" id="nome" name="cvv" placeholder="XXX" minlength="3" maxlength="3" required /></li>
            <li><label for="memorizza"> Memorizzare carta</label><input type="checkbox" id="memorizza-carta" name="memorizza_carta" /></li>
            <label for="pagaNuova" hidden></label><input type="submit" id="pagaNuova" name="pagaConNuovaCarta" value="Paga Ora" />
        </ul>
        
    </section>

    <section id="sezione-carta-salvata" style="display: none;">
        <form action="" method="POST">
            <label for="cartaReg">Scegli la carta</label><br/>
            <select id="cartaReg" name="cartaRegistrata">
                <?php foreach($templateParams["carteSalvate"] as $carta): ?>
                    <option value="<?php echo $carta["NumeroCarta"]; ?>"><?php echo $carta["NumeroCarta"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="pagaVecchia" hidden></label><input type="submit" id="pagaVecchia" name="pagaConVecchiaCarta" value="Paga Ora" />

        </form>
    </section>

    <section>
        <h2>Indirizzo di Spedizione</h2>
        Via dell'universit&agrave 30, Cesena
        <img src="../utils/img/mappa.png" alt="mappa">
    </section>
    <a href="carrello.php">Annulla</a>
</section>

<script src="../js/metodoPagamento.js">
</script>