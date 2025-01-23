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
            <label for="accedi" hidden></label><input type="submit" name="accedi" id="accedi" value="Accedi" />
        </li>
        <li>
            <label for="iscriviti" hidden></label><input type="submit" id="iscriviti" name="iscriviti" value="Iscriviti" />
        </li>
        <li>
            <label for="home" hidden></label><input type="submit" id="home" name="home" value="Continua senza accedere" /></label>
        </li>
    </ul>
</form>