<section>
    <h2> PROFILO</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li><label>Vecchia Password
                    <input type="password" id="vecchia_password" name="vecchia_password" />
                </label></li>
            <li><label>Nuova Password
                    <input type="password" id="nuova_password" name="nuova_password" />
                </label></li>
            <li><label>Conferma Password
                    <input type="password" id="conferma_password" name="conferma_password" />
                </label></li>
            <li>
                <a href="#"> <input type="submit" name="aggiornaPassword" value="Salva Password" /></a>
            </li>
        </ul>

    </form>

</section>