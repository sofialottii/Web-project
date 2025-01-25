<section>
    <h2>Area Riservata</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p class="text-danger"><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <form action="#" method="POST">
    <ul>
        <li>
            <label for="E_mail">E-mail</label><input type="email" id="E_mail" name="E_mail" autocomplete="on" />
        </li>
        <li>
            <label for="password">Password</label><input type="password" id="password" name="password" autocomplete="off" />
        </li>
        <li class="d-block">
            <label for="accedi" hidden></label><input type="submit" name="accedi" id="accedi" value="Accedi come admin" />
        </li>
        <li>
            <a href="index.php">Continua senza accedere</a>
        </li>
    </ul>
    </form>
</section>