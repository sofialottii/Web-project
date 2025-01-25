<section>
    <h2>MODIFICA IL TUO PROFILO</h2>
    <?php if(isset($templateParams["erroreDati"])): ?>
    <p class="text-danger"><?php echo $templateParams["erroreDati"]; ?></p>
    <?php endif; ?>
    <form action="#" method="POST">
    <ul>
        <li>
            <label for="nome">Nome</label><input type="text" id="nome" name="nome" autocomplete="on" value="<?php echo $templateParams["profilo"][0]["Nome"] ?>" />
        </li>
        <li>
            <label for="cognome">Cognome</label><input type="text" id="cognome" name="cognome" autocomplete="on" value="<?php echo $templateParams["profilo"][0]["Cognome"] ?>" />
        </li>       
        <li>
            <label for="dataNascita">Data di nascita</label><input type="date" id="dataNascita" name="dataNascita" autocomplete="off" value="<?php echo $templateParams["profilo"][0]["DataNascita"] ?>" />
        </li>
        <li>
            <label for="sesso">Sesso</label><select name="sesso" id="sesso" autocomplete="off">
                <option value="Nessuno" selected="selected" hidden>Scegli sesso</option>
                <option value="Uomo">Uomo</option>
                <option value="Donna">Donna</option>
                <option value="Altro">Altro</option>
            </select>
        </li>
        <li class="d-block">
            <a href="profilo.php">Ho Cambiato idea</a>
            <label for="ModificaCampi" hidden></label><input type="submit" name="ModificaCampi" id="ModificaCampi" value="Salva Modifiche" />
        </li>
        <a href="profilo.php" hidden>Ho Cambiato idea</a>
        
    </ul>
</form>
<img src="../utils/img/Grimilde-CestoMele.png" alt="Grimilde con un cesto di mele">
</section>