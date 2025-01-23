<form action="" method="POST">
    <label for="cancNot" hidden></label><input type="submit" id="cancNot" name="cancellanotifiche" value="Elimina Tutte">
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p> <?php echo $templateParams["errore"];?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["notifiche"] as $notifica): ?>
        <div>
            <p><?php echo $notifica["IdNotifica"];?></p>
            <p><?php echo $notifica["TipoNotifica"]; ?> </p>
        </div><div>
            <?php echo $notifica["DataNotifica"]; ?>
        </div>
        <div>
            <?php echo $notifica["TestoNotifica"]; ?>
        </div>
        <form action="" method="POST">
            <label for="idNot" hidden></label><input type="hidden" id="idNot" name="IdNotifica" value ="<?php echo $notifica["IdNotifica"] ?>"/>
            <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
        </form>
    <?php endforeach ?>   
</section>