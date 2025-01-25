<section>
    <h2>PROFILO</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p class="text-danger"><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li><label for="vecchia_password">Vecchia Password</label>
                    <input type="password" id="vecchia_password" name="vecchia_password" autocomplete="off"/>
                </li>
            <li><label for="nuova_password">Nuova Password</label>
                    <input type="password" id="nuova_password" name="nuova_password" autocomplete="off"/>
                </li>
            <li><label for="conferma_password">Conferma Password</label>
                    <input type="password" id="conferma_password" name="conferma_password" autocomplete="off"/>
                </li>
            <li class="d-block">
                
                <a href="profilo.php">Ho cambiato idea</a>
                </label><input type="submit" name="aggiornaPassword" id="aggiornaPassword" value="Salva Password" />
            </li>
            <a href="profilo.php" hidden>Ho cambiato idea</a>
                
            
        </ul>
    </form>
    <img src="../utils/img/Grimilde-CestoMele.png" alt="Grimilde con un cesto di mele">
</section>