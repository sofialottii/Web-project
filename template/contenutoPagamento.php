
<p class="fs-1 text-center text-uppercase fw-bold">Totale: €<?php echo $totale; ?></p>

<section>
    <h2>Metodo di pagamento</h2>
    <?php if(isset($templateParams["errore"])): ?>
    <p class="text-dark"><?php echo $templateParams["errore"]; ?></p>
<?php endif; ?>
    <section>
        <ul>
            <li class="d-flex gap-3">
                <input type="radio" id="cartaSalvata" name="metodo_pagamento" value="carta_salvata" required />
                <label for="cartaSalvata">Carta salvata</label></li>

            <li class="d-flex gap-3">
                <input type="radio" id="nuovaCarta" name="metodo_pagamento" value="carta_credito" required />
                <label for="nuovaCarta">Carta di credito</label></li>

            <li class="d-flex gap-3">
                <input type="radio" name="metodo_pagamento" value="contanti" disabled required />
                <label for="metodo_pagamento">Contanti</label></li>
        </ul>
    
    </section>

    
    <section id="sezione-pagamento" style="display: none;">
        <form action="" method="POST">
        <ul>
            <li><label for="nome">Nome </label><input type="text" id="nome" name="nome" required /></li>
            <li><label for="cognome">Cognome </label><input type="text" id="cognome" name="cognome" required /></li>
            <li><label for="numeroCarta">Numero Carta </label><input type="text" id="numeroCarta" name="numeroCarta" minlength="16" maxlength="16" required /></li>
            <li><label for="scadenza">Scadenza </label><input type="month" id="scadenza" name="scadenza" required /></li>
            <li><label for="cvv">CVV </label><input type="text" id="nome" name="cvv" placeholder="XXX" minlength="3" maxlength="3" required /></li>
            <li class="d-flex gap-1"><input type="checkbox" id="memorizza-carta" name="memorizza_carta" /><label for="memorizza"> Memorizzare carta</label></li>
            <label for="pagaNuova" hidden></label><input type="submit" id="pagaNuova" name="pagaConNuovaCarta" value="Paga Ora" />
        </ul>
        </form>
    </section>
    

    <section id="sezione-carta-salvata" style="display: none;">
        <form action="" method="POST">
            <ul class="d-flex flex-column gap-3">
                <li class="d-block">
            <label for="cartaReg" class="g-6" >Scegli la carta</label><br/>
            <select id="cartaReg" name="cartaRegistrata" class="g-6" required>
                <?php foreach($templateParams["carteSalvate"] as $carta): ?>
                    <option value="<?php echo $carta["NumeroCarta"]; ?>"><?php echo $carta["NumeroCarta"]; ?></option>
                <?php endforeach; ?>
            </select>
                </li>
                <li class="d-block">
            <label for="pagaVecchia" hidden></label>
            <input class="g-4" type="submit" id="pagaVecchia" name="pagaConVecchiaCarta" value="Paga Ora" />
                </li>
            </ul>
        </form>
    </section>
</section>
<section class="text-center">
    <h2>Indirizzo di Spedizione</h2>
    Via dell'universit&agrave 30, Cesena
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.2933295880252!2d12.232745665196836!3d44.147594977165184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4dc5ea625b1%3A0xfcb0cabca301284d!2sVia%20dell&#39;%20Universit%C3%A0%2C%2030%2C%2047522%20Cesena%20FC!5e0!3m2!1sit!2sit!4v1737821529806!5m2!1sit!2sit" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!--<a href="#" class="text-black">Via dell'universit&agrave 30, Cesena</a>
    <img src="../utils/img/mappa.png" alt="mappa">-->
</section>
<p class="text-uppercase text-center"><a href="carrello.php" class="text-primary">Annulla il pagamento</a></p>


<script src="../js/metodoPagamento.js">
</script>