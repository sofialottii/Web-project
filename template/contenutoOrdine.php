<?php if(isset($templateParams["errore"])): ?>
    <p> <?php echo $templateParams["errore"];?></p>
<?php endif; ?>

<section>
    <?php foreach($templateParams["ordini"] as $ordin): ?>
        <div>
            <p><?php echo $ordin["IDOrdine"];?></p>
            <p><?php echo $ordin["DataOra"]; ?> </p>
        </div><div>
            <?php echo $ordin["ImportoTotale"]; ?>
        </div>
        
    <?php endforeach ?>   
</section>