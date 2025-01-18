<article>
    <form action="#" method="GET">
        <input type="search" name="CercaProdotto" placeholder="Cerca per nome..."/>
        <br/>
        <input type="submit" value="Invia richiesta"/>
    </form>
    <?php foreach($templateParams["prodotti"] as $prodotto): ?>
    <article>
        <header>    
            <img src="../utils/img/icons/cuore_vuoto.png" alt="cuore-vuoto" />
        </header>
        <section>
            <img src="<?php echo $prodotto["ImmagineProdotto"]; ?>" alt="<?php echo $prodotto["NomeProdotto"]; ?>" />
        </section>
        <footer>
            <p><?php echo $prodotto["NomeProdotto"]; ?></p>
            <p><?php echo $prodotto["PrezzoProdotto"]; ?></p>
        </footer>
    </article>
    <?php endforeach; ?>
    <!-- bottone carrello -->
</article>
