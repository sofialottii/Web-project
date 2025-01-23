<section>

    <?php foreach($templateParams["contenuto"] as $elemento):?>
    <ul>
        <li>
            <?php echo $elemento["NomeProdotto"];?>
        </li>
        <li>
            Quantit&agrave ordinata: <?php echo $elemento["QuantitaOrdinata"];?>
        </li>
        <li>
            Prezzo unitario: <?php echo $elemento["PrezzoProdotto"];?>
        </li>
        <li>
            Prezzo totale: <?php echo $elemento["Subtotale"];?>
        </li>
        <li>
        <img src="<?php echo $elemento["ImmagineProdotto"];?>.jpg" alt="<?php echo $elemento["NomeProdotto"];?>">
        </li>
    </ul>
    <?php endforeach;?>
</section>