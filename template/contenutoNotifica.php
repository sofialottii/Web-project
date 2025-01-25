<section>
    <form action="" method="POST">
        <header class="d-flex">
            <p class="text-start"><?php echo $templateParams["notifica"][0]["IdNotifica"]?></p>
            <p><?php echo $templateParams["notifica"][0]["DataNotifica"]?></p>
        </header>
        <ul>
        <li>
            <p class="text-uppercase fs-4"><?php echo $templateParams["notifica"][0]["TipoNotifica"]?></p>
        </li>
        <li>
            <p><?php echo $templateParams["notifica"][0]["TestoNotifica"]?></p>
        </li>
        <li>
            <label for="idNot" hidden></label><input type="hidden" id="idNot" name="IdNotifica" value ="<?php echo $templateParams["notifica"][0]["IdNotifica"]?>"/>
        </li>
        <li class="d-block">
            <a href="storicoNotifiche.php">Torna alle notifiche</a>
            <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
        </li>
        <a href="storicoNotifiche.php" hidden>Indietro</a>
    </ul>
    </form>
</section>