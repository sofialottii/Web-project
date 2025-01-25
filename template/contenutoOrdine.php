

    <?php foreach($templateParams["contenuto"] as $elemento):?>
    <section>
        <ul>
        <li>
            <p class="text-center fs-3 text-uppercase fw-bold"><?php echo $elemento["NomeProdotto"];?></p>
        </li>
        <li>
            Quantit&agrave ordinata: <?php echo $elemento["QuantitaOrdinata"];?>
        </li>
        <li>
            Prezzo unitario: €<?php echo $elemento["PrezzoProdotto"];?>
        </li>
        <li>
            Prezzo totale: €<?php echo $elemento["ImportoTotale"];?>
        </li>
        <li>
        <img src="<?php echo $elemento['ImmagineProdotto'];?>" alt="<?php echo $elemento['NomeProdotto'];?>">
        </li>
    </ul>
    </section>
    <?php endforeach;?>
    <a href="ordini.php">Indietro</a>
