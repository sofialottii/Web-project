<form action="#" method="POST">
    <h2>Accesso</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <ul>
        <li>
            <label for="E_mail">E-mail</label><input type="email" id="E_mail" name="E_mail" />
        </li>
        <li>
            <label for="password">Password</label><input type="password" id="password" name="password" />
        </li>
        <li>
            <label><input type="submit" name="accedi" value="Accedi" /></label>
        </li>
        <li>
            <label><input type="submit" name="iscriviti" value="Iscriviti" /></label>
        </li>
        <li>
            <label><input type="submit" name="home" value="Continua senza accedere" /></label>
        </li>
    </ul>
</form>