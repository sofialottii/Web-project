<form action="#" method="POST">
    <h2>ISCRIVITI</h2>
    <?php if(isset($templateParams["erroreRegister"])): ?>
    <p><?php echo $templateParams["erroreRegister"]; ?></p>
    <?php endif; ?>
    <ul>
        <li>
            <label for="nome">Nome</label><input type="text" id="nome" name="nome" autocomplete="on" maxlength="20" />
        </li>
        <li>
            <label for="cognome">Cognome</label><input type="text" id="cognome" name="cognome" autocomplete="on" maxlength="20" />
        </li>
        <li>
            <label for="E_mail">E-mail</label><input type="email" id="E_mail" name="E_mail" autocomplete="on" />
        </li>
        <li>
            <label for="password">Password</label><input type="password" id="password" name="password" maxlength="20" autocomplete="off" />
        </li>
        <li>
            <label for="conferma_password">Conferma Password</label><input type="password" id="conferma_password" name="conferma_password" maxlength="20" autocomplete="off" />
        </li>
        <li>
            <label for="dataNascita">Data di nascita</label><input type="date" id="dataNascita" name="dataNascita" autocomplete="off" />
        </li>
        <li>
            <label for="sesso">Sesso</label><select name="sesso" id="sesso" autocomplete="off">
                <option value="Nessuno" selected="selected" hidden>Scegli sesso</option>
                <option value="Uomo">Uomo</option>
                <option value="Donna">Donna</option>
                <option value="Altro">Altro</option>
            </select>
        </li>
        <li>
            <label for="iscriviti" hidden></label><input type="submit" name="iscriviti" id="iscriviti" value="Iscriviti" />
        </li>
        <li>
            <a href="login.php">Hai già un account? Accedi</a>
        </li>
    </ul>
</form>