<form action="" method="POST">
    <label for="cancNot" hidden></label><input type="submit" id="cancNot" name="cancellanotifiche" value="Elimina Tutte">
</form>
<?php if(isset($templateParams["errore"])): ?>
    <p> <?php echo $templateParams["errore"];?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["notifiche"] as $notifica): ?>
        <form action="notifica.php" method="GET">   
            <label for="notif" hidden></label><input type="hidden" id="IDNotifi" name="IDNotifica" value="<?php echo $prodotto['IDProdotto']; ?>" />
            <article id="notifica_<?php echo $prodotto['idNotifica']; ?>" class="cliccabile">
                <div>
                    <p><?php echo $notifica["IdNotifica"];?></p>
                    <p><?php echo $notifica["TipoNotifica"]; ?> </p>
                </div><div>
                    <?php echo $notifica["DataNotifica"]; ?>
                </div>
                <div>
                    <?php echo $notifica["TestoNotifica"]; ?>
                </div>
            </article>
        </form>
        <form action="" method="POST">
            <label for="idNot" hidden></label><input type="hidden" id="idNot" name="IdNotifica" value ="<?php echo $notifica["IdNotifica"] ?>"/>
            <label for="rimuovi" hidden></label><input type="submit" id="rimuovi" name="rimuovi" value="Rimuovi"/>
        </form>
    <?php endforeach ?>   
</section>