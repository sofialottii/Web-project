
Totale:
<section>
    <h2>Metodo di pagamento</h2>
    <form action="PagamentoEffettuato.php" method="POST">
        <ul>
            <li><label>
                <input type="radio" id="cartaSalvata" name="metodo_pagamento" value="carta_salvata" required/>
                Carta salvata
            </label></li>

            <li><label>
                <input type="radio" id="nuovaCarta" name="metodo_pagamento" value="carta_credito" required/>
                Carta di credito
            </label></li>

            <li><label>
                <input type="radio" name="metodo_pagamento" value="contanti" required/>
                Contanti
            </label></li>
        </ul>

    </form>


    <div>
        <lu>
        <li><label for="nome">Nome </label><input type="text" id="nome" name="nome" /></li>
        
        <li><label for="cognome">Cognome </label><input type="text" id="cognome" name="cognome" /></li>

        <li><label for="numeroCarta">Numero Carta </label><input type="number" id="numero" name="nome" /></li>

        <li><label for="scadenza">Scadenza </label><input type="month" id="scadenza" name="nome" /></li>

        <li><label for="cvv">CVV </label><input type="text" id="nome" name="nome" placeholder="XXX"/></li>

        <li><label for="memorizza"> memorizzare carta<input type="checkbox" id="memorizza-carta" name="memorizza_carta"/><label> </li>
        <!-- tracciamento anzi indirizzo -->
        <a href="pagamentoEffettuato.php"> <input type="button" value="Paga Ora" /></a>
        </lu>   
    </div>

    <!--<div>
        <//?php foreach($templateParams["profilo"] as $info):?>
        <option value="<//?php echo $info["NumeroCarta"]; ?>"> </option>

    </div>-->
</section>