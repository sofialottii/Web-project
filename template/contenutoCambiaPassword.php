<div class="row justify-content-center m-0">
<section class="temporaneo mt-5 col-10 col-md-8 col-lg-5 pb-0">
    <h2>PROFILO</h2>
    <?php if(isset($templateParams["errorelogin"])): ?>
    <p class="text-danger"><?php echo $templateParams["errorelogin"]; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="vecchia_password">Vecchia Password</label>
                <input type="password" id="vecchia_password" name="vecchia_password" autocomplete="off"/>
            </li>
            <li>
                <label for="nuova_password">Nuova Password</label>
                <input type="password" id="nuova_password" name="nuova_password" autocomplete="off"/>
            </li>
            <li class=" mb-3">
                <label for="conferma_password">Conferma Password</label>
                <input type="password" id="conferma_password" name="conferma_password" autocomplete="off"/>
            </li>
            <li  class="text-center mb-3">
                </label>
                <input type="submit" name="aggiornaPassword" id="aggiornaPassword" value="Salva Password"  class="w-75"/>
            </li>
            <li  class="text-center mb-3">
                <a href="profilo.php" >Ho cambiato idea</a>
            </li>
            <a href="profilo.php" hidden>Ho cambiato idea</a>
            
        </ul>
    </form>
    <img src="../utils/img/Grimilde-CestoMele.png" alt="" class="mx-auto rounded d-block img-fluid ">
</section>
    </div>