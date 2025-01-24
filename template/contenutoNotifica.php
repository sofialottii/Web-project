<section>
    <ul>
        <li>
            <p><?php echo $templateParams["notifica"][0]["IdNotifica"]?></p>
        </li>
        <li>
            <p><?php echo $templateParams["notifica"][0]["TipoNotifica"]?></p>
        </li>
        <li>
            <p><?php echo $templateParams["notifica"][0]["TestoNotifica"]?></p>
        </li>
        <li>
            <p><?php echo $templateParams["notifica"][0]["DataNotifica"]?></p>
        </li>
        <form action="" method="POST">
            <li>
                <label for="idNot" hidden></label><input type="hidden" id="idNot" name="IdNotifica" value ="<?php echo $templateParams["notifica"][0]["IdNotifica"]?>"/>
            </li>
            <li>
                <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
            </li>
        </form>
        <li>
            <a href="storicoNotifiche.php">Indietro</a>
        </li>

    </ul>
</section>