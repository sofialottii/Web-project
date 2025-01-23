<section>
    <h2>PROFILO</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li><label for="vecchia_password">Vecchia Password</label>
                    <input type="password" id="vecchia_password" name="vecchia_password" />
                </li>
            <li><label for="nuova_password">Nuova Password</label>
                    <input type="password" id="nuova_password" name="nuova_password" />
                </li>
            <li><label for="conferma_password">Conferma Password</label>
                    <input type="password" id="conferma_password" name="conferma_password" />
                </li>
            <li>
                <a href="#"><label for="aggiornaPassword" hidden></label><input type="submit" name="aggiornaPassword" id="aggiornaPassword" value="Salva Password" /></a>
            </li>
            <li><a href="profilo.php"><label for="cambioIdea" hidden></label><input type="button" id="cambioIdea" value="Ho Cambiato idea" /></a> </li>
        </ul>
    </form>
    <img src="../utils/img/Grimilde-CestoMele.png" alt="Grimilde con un cesto di mele">
</section>