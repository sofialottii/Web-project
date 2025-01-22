
<p>Totale: €<?php echo $totale; ?></p>

<?php if(isset($templateParams["errore"])): ?>
    <p><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>
<section>
    <h2>Metodo di pagamento</h2>
    <section>
    <form action="PagamentoEffettuato.php" method="POST">
        <ul>
            <li><label>
                <input type="radio" id="cartaSalvata" name="metodo_pagamento" value="carta_salvata" required />
                Carta salvata
            </label></li>

            <li><label>
                <input type="radio" id="nuovaCarta" name="metodo_pagamento" value="carta_credito" required />
                Carta di credito
            </label></li>

            <li><label>
                <input type="radio" name="metodo_pagamento" value="contanti" disabled required />
                Contanti
            </label></li>
        </ul>
    </form>
</section>

<section id="sezione-pagamento" style="display: none;">
    <form action="" method="POST">
    <ul>
        <li><label for="nome">Nome </label><input type="text" id="nome" name="nome" required /></li>
        <li><label for="cognome">Cognome </label><input type="text" id="cognome" name="cognome" required /></li>
        <li><label for="numeroCarta">Numero Carta </label><input type="text" id="numeroCarta" name="numeroCarta" minlength="16" maxlength="16" required /></li>
        <li><label for="scadenza">Scadenza </label><input type="month" id="scadenza" name="scadenza" required /></li>
        <li><label for="cvv">CVV </label><input type="text" id="nome" name="cvv" placeholder="XXX" minlength="3" maxlength="3" required /></li>
        <li><label for="memorizza"> Memorizzare carta</label><input type="checkbox" id="memorizza-carta" name="memorizza_carta" /></li>
        <input type="submit" name="pagaConNuovaCarta" value="Paga Ora" />
    </ul>
    </form>
</section>

<section id="sezione-carta-salvata" style="display: none;">
    <form action="" method="POST">
        <label>Scegli la carta<br/>
        <select name="cartaRegistrata">
            <?php foreach($templateParams["carteSalvate"] as $carta): ?>
                <option value="<?php echo $carta["NumeroCarta"]; ?>"><?php echo $carta["NumeroCarta"]; ?></option>
            <?php endforeach; ?>
        </select> </label>

    </form>
</section>
    <!--<div>
        </se/?php foreach($templateParams["profilo"] as $info):?>
        <option value="<//?php echo $info["NumeroCarta"]; ?>"> </option>

    </div>-->

    <section>
        <h2>Indirizzo di Spedizione</h2>
        Via dell'universit&agrave 30, Cesena
        <img src="mappa.png" alt="mappa">
    </section>
</section>

<script src="../js/metodoPagamento.js">
</script>