<form action="" method="POST">
    <input type="submit" name="cancellanotifiche" value="Elimina Tutte">
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
            <input type="hidden" name="IdNotifica" value ="<?php echo $notifica["IdNotifica"] ?>"/>
            <input type="submit" name="rimuovi" value="Rimuovi"/>
        </form>
    <?php endforeach ?>   
</section>