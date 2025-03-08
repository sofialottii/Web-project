<div class="row justify-content-center m-0">
<section  class="temporaneo mt-5 col-10 col-md-8 col-lg-5 pb-0">
    <h2>MODIFICA IL TUO PROFILO</h2>
    <?php if(isset($templateParams["erroreDati"])): ?>
    <p class="text-danger"><?php echo $templateParams["erroreDati"]; ?></p>
    <?php endif; ?>
    <form action="#" method="POST">
    <ul class="form p-0">
        <li class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" autocomplete="on" value="<?php echo $templateParams["profilo"][0]["Nome"] ?> " class="form-control" />
        </li>
        <li class="mb-3">
            <label for="cognome" class="form-label">Cognome</label>
            <input type="text" id="cognome" name="cognome" autocomplete="on" value="<?php echo $templateParams["profilo"][0]["Cognome"] ?>" class="form-control"/>
        </li>       
        <li class="mb-3">
            <label for="dataNascita" class="form-label">Data di nascita</label>
            <input type="date" id="dataNascita" name="dataNascita" autocomplete="off" value="<?php echo $templateParams["profilo"][0]["DataNascita"] ?>" class="form-control"/>
        </li>
        <li class="mb-3">
            <label for="sesso" class="form-label">Sesso</label>
            <select name="sesso" id="sesso" autocomplete="off" class="form-control">
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
    </div>