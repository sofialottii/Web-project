<form action="#" method="POST">
    <h2>Accesso</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <ul>
        <li>
            <label for="E_mail">E-mail</label><input type="text" id="E_mail" name="E_mail" />
        </li>
        <li>
            <label for="password">Password</label><input type="password" id="password" name="password" />
        </li>
        <li>
            <input type="submit" name="accedi" value="Accedi" />
        </li>
        <li>
            <input type="submit" name="iscriviti" value="Iscriviti" />
        </li>
        <li>
            <input type="submit" name="home" value="Continua senza accedere" />
        </li>
    </ul>
</form>