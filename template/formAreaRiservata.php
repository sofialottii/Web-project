<form action="#" method="POST">
    <h2>Area Riservata</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <ul>
        <li>
            <label for="E_mail">E-mail</label><input type="email" id="E_mail" name="E_mail" autocomplete="on" />
        </li>
        <li>
            <label for="password">Password</label><input type="password" id="password" name="password" autocomplete="off" />
        </li>
        <li>
            <label for="accedi" hidden></label><input type="submit" name="accedi" id="accedi" value="Accedi come admin" />
        </li>
        <li>
            <label for="home" hidden></label><input type="submit" name="home" id="home" value="Continua senza accedere" />
        </li>
    </ul>
</form>